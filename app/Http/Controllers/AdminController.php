<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controllers; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Response as FacadeResponse;
use Illuminate\Support\Facades\Hash;
use Validator;
use Redirect,Config;
use Datatables;
use Auth;
use Session;
use App\Models\User;
use App\Models\ChatMessage;
use App\Models\Chat;
use App\Models\Notification;
use League\Csv\Writer;
use Schema;
use SplTempFileObject;
use App\Models\Userdetail;
use App\Models\Companydetail;
use App\Models\Licensedetails;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{

   public function admin_login(Request $reg)
   {
     return "hello";
   }


   public function admin(Request $request){
         
        if($request->isMethod('post')){
           // echo 'Abhishek';die;
            $data = $request->input();
             //print_r($data); exit;
             if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'],'type' => 'admin'])) {
                $request->session()->put('datas', $request->input());
                if($request->session()->has('datas'))
                  {
            return redirect('/admin/dashboard');
                  }  
            }else{
               
               return redirect('/admin')->with('flash_message_error','Invalid Username or Password');
            }
        }
        return view('admin.login');
    }

     public function dashboard()
     {
       // return "Abhishek";
        if(session()->has('datas'))
        {
          
       $user=User::select('*')->where('type','=','customer')
        ->where('login_status','=', '1')
        ->orderBy('id', 'desc')->limit(30)->get();
       return view('/admin/dashboard')->with('user',$user);
        }else{
            session()->forget('datas');
            return redirect('/admin')->with('flash_message_error','Please login to access');
        }
        
    }
 public function analytics(){
  //$agent = User::select('*')->where('type','=','agent')->orderBy('id', 'ASC')->get();
  //print_r($agent);die;

  return view('/admin/analytics');//->with('output',$output);
 }

public function exportCsv()
{
  return view('/admin/tasks');
}

 public function chatreport(Request $request){
  //echo "test";die;
  $agentid= $request->agentid;
  //$startdate=$request->startdate;
  //$enddate=$request->enddate;
  //$fileName = 'tasks.csv';

$headers = array(
        "Content-type" => "text/csv",
        "Content-Disposition" => "attachment; filename=file.csv",
        "Pragma" => "no-cache",
        "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
        "Expires" => "0"
    );

    $reviews = ChatMessage::where('sender_id', '=', $agentid)->orwhere('receive_id', '=', $agentid)->get();
    $columns = array('Senderid', 'Message', 'ShereFile', 'Type', 'Date');

    $callback = function() use ($reviews, $columns)
    {
        $file = fopen('php://output', 'w');
        fputcsv($file, $columns);
        //print_r($reviews);die;
        foreach ($reviews as $task) {
                $row['sender_id'] = $task->sender_id;
                $row['Message'] = $task->message;
                $row['file'] = $task->description;
                $row['Type']  = $task->text_type;
                $row['Date']  = $task->created_at;
                
                $User = User::select('*')->where('session_id',$task->sender_id)->first();         
                fputcsv($file, array($User->name, $row['Message'], $row['file'], $row['Type'], $row['Date']));
        }
        fclose($file);
    };
    return response()->download($callback, 'user-' . date('d-m-Y'), $headers);














 //$fileName = storage_path('document/tasks.csv');die;
  //$tasks = ChatMessage::where('sender_id', '=', $agentid)
    //->orwhere('receive_id', '=', $agentid)
    //->where('created_at', '<=', $startdate)
    //->where('created_at', '>=', $enddate)
    //->get();      
        /*$tasks = ChatMessage::all();
        $fileName = "file.csv";
        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
            );
        
        $columns = array('Sender id', 'Message', 'Shere File', 'Type', 'Date');
        
        $callback = function() use($tasks, $columns) {
            $handle  = fopen($fileName, 'w');
            fputcsv($fileName, $columns);
            
            foreach ($tasks as $task) {
                $row['sender_id'] = $task->sender_id;
                $row['Message'] = $task->message;
                $row['file'] = $task->description;
                $row['Type']  = $task->text_type;
                $row['Date']  = $task->created_at;
                
                $User = User::select('*')->where('session_id',$task->sender_id)->first();         
                fputcsv($handle, array($User->name, $row['Message'], $row['file'], $row['Type'], $row['Date']));
            }
            fclose($handle);
          };
        //return response()->stream($callback, 200, $headers);
         return response()->download($fileName, 'file '.date("d-m-Y H:i").'.csv', $headers);*/

 }
public function manage_agent(){

  $user=User::select('*')->where('type','!=','customer')
        ->where('type','!=', 'admin')
        ->orderBy('id', 'desc')->get();
  $count_user=count($user);      
return view('/admin/manage_agent')->with('count_user',$count_user);
}

public function getagentlist()
{
  
  $users = User::select('*')->where('type','=','agent')->orderBy('id', 'DESC');

        return datatables()->of($users)
            
            ->addColumn('action', function($users){
                   //$editUrl = url('editagent/'.$users->id);
                   //$delUrl = url('delagent/'.$users->id);
                   
                  $btn ='<a href="#" class="edit btn btn-info  editagent" id="'.$users->id.'">Edit</a>';
                  $btn = $btn.'<a href="#" class="edit btn btn-danger   delete" id="'.$users->id.'">Delete</a>';

                   return $btn;
            })
            ->rawColumns(['action']) 
            ->make(true);
}

public function customer()
{
  return view('/admin/customer');
}

public function getcustomerlist()
{
  $users = User::select('*')->where('type','=','customer')->orderBy('id', 'DESC');

        return datatables()->of($users)
            
            ->addColumn('action', function($users){
                   //$editUrl = url('editagent/'.$users->id);
                   //$delUrl = url('delagent/'.$users->id);
                   $btn = '<a href="#" class="edit btn btn-info  viewcust" id="'.$users->id.'">View</a>';
                   /*$btn ='<a href="'.$editUrl.'" class="edit btn btn-primary btn-sm">Edit</a>';*/
                   $btn = $btn.'<a href="#" class="edit btn btn-danger  delete" id="'.$users->id.'">Delete</a>';

                   return $btn;
            })
            
            ->rawColumns(['action']) 
            ->make(true); 
}
function fetchdata(Request $request)
    {
        $id = $request->id;
        $User = User::find($id);
        $output = array(
            'id'    =>  $User->id,
            'name'    =>  $User->name,
            'mobileno'     =>  $User->mobileno,
            'email'     =>  $User->email,
             'image'     =>  $User->image,
            'ip_address'     =>  $User->ip_address,
            'regioncode'     =>  $User->regioncode,
            'regionname'     =>  $User->regionname,
            'zipcode'     =>  $User->zipcode,
            'areacode'     =>  $User->areacode,
            'city'     =>  $User->city,
            'country'     =>  $User->country
          );
        echo json_encode($output);
    }

 public function custfetchdata(Request $request)
 {
   $id = $request->id;
   $User = User::find($id);
   $output = array(
            'name'    =>  $User->name,
            'mobileno'     =>  $User->mobileno,
            'email'     =>  $User->email,
            
            'ip_address'     =>  $User->ip_address,
            'regioncode'     =>  $User->regioncode,
            'regionname'     =>  $User->regionname,
            'zipcode'     =>  $User->zipcode,
            'areacode'     =>  $User->areacode,
            'city'     =>  $User->city,
            'country'     =>  $User->country
          );
        echo json_encode($output);
 }   
public function delagent(Request $request)
{
   $User = User::find($request->id);
        if($User->delete())
        {
            echo 'Data Deleted';
        }
}
public function delcustomer(Request $request)
{
   $User = User::find($request->id);
        if($User->delete())
        {
            echo 'Data Deleted';
        }
}

public function addagent()
{
 return view('/admin/addagent'); 
}

public function postdata(Request $request){
      //echo $request->file('image')->getClientOriginalName();die;
      //$success_output = '';
    //$success_output='';
      $user=User::select('*')->where('type','!=','customer')
        ->where('type','!=', 'admin')
        ->orderBy('id', 'desc')->get();

     

      if($request->get('button_action') == "insert")
        {
         if(count($user) < 41){   
            if ($files = $request->file('image')) 
             { 
         // $files['name']
        //$ext=$files->getClientOriginalExtension(); 
        $imageName = date('YmdHis') . "_" . $request->file('image')->getClientOriginalName();
        $files->move(public_path('/userimages'), $imageName);
          
        //echo $imageName; die; 
        //$clientIP = request()->ip();
        //$data = \Location::get($clientIP);   
        
        //$ip=$data->ip;
        //$countryName=$data->countryName;
        //$countryCode=$data->countryCode;
        //$regionCode=$data->regionCode;
        //$regionName=$data->regionName;
        //$cityName=$data->cityName;
        //$zipCode=$data->zipCode;
        //$isoCode=$data->isoCode;
        //$postalCode=$data->postalCode;
        //$latitude=$data->latitude;
        //$longitude=$data->longitude;
        //$metroCode=$data->metroCode;
        //$areaCode=$data->areaCode;
        //$driver=$data->driver; 
      
        $cust_id= mt_rand(100000, 999999);
        $User = new User;
        $User->name = $request->name;
        $User->mobileno = $request->mobileno;
        $User->email  = $request->email;
        $User->remember_token  = $request->_token;
        $User->password =Hash::make($request->password);
        $User->type = 'agent';
        $User->image = $imageName;
        //$User->ip_address = $ip;
        //$User->countrycode = $countryCode;
        //$User->regioncode = $regionCode;
        //$User->regionname = $regionName;
        //$User->zipcode = $zipCode;
        //$User->isocode = $isoCode;
        //$User->postalcode = $postalCode;
        //$User->latitude = $latitude;
        //$User->longitude = $longitude;
        //$User->metrocode = $metroCode;
        //$User->areacode = $areaCode;
        //$User->driver = $driver;
        //$User->city = $cityName;
        //$User->country = $countryName;
        $User->session_id  =$cust_id;
        $User->save();
        $success_output = '<div class="alert alert-success">Agent Data Inserted Successfully</div>';
         }
        $output = array( 'success' => $success_output );
        }else{
    $success_output = '<div class="alert alert-success">Only 40 Agents are allowed</div>';
       $output = array( 'success' => $success_output  );
  }
      }


       if($request->get('button_action') == "update"){

          if ($files = $request->file('image')){
            
            $imageName = date('YmdHis') . "_" . $request->file('image')->getClientOriginalName();
            $files->move(public_path('/userimages'), $imageName); 
            
            /*$clientIP = request()->ip();
            $data = \Location::get($clientIP);   
            
            $ip=$data->ip;
            $countryName=$data->countryName;
            $countryCode=$data->countryCode;
            $regionCode=$data->regionCode;
            $regionName=$data->regionName;
            $cityName=$data->cityName;
            $zipCode=$data->zipCode;
            $isoCode=$data->isoCode;
            $postalCode=$data->postalCode;
            $latitude=$data->latitude;
            $longitude=$data->longitude;
            $metroCode=$data->metroCode;
            $areaCode=$data->areaCode;
            $driver=$data->driver;*/ 

            $User = User::find($request->agentid);
            $User->name = $request->name;
            $User->mobileno = $request->mobileno;
            $User->email  = $request->email;
            $User->image = $imageName;
            /*$User->ip_address = $ip;
            $User->countrycode = $countryCode;
            $User->regioncode = $regionCode;
            $User->regionname = $regionName;
            $User->zipcode = $zipCode;
            $User->isocode = $isoCode;
            $User->postalcode = $postalCode;
            $User->latitude = $latitude;
            $User->longitude = $longitude;
            $User->metrocode = $metroCode;
            $User->areacode = $areaCode;
            $User->driver = $driver;
            $User->city = $cityName;
            $User->country = $countryName;*/
            $User->update();             
          }else{

            $User = User::find($request->agentid);
            $User->name = $request->name;
            $User->mobileno = $request->mobileno;
            $User->email  = $request->email;
            $User->image = $request->old_img;
            $User->update();
          }
      $success_output = '<div class="alert alert-success">Agent Data Updated Successfully</div>';
       $output = array( 'success' => $success_output );
      }
  
      echo json_encode($output);
}

    public function notificationsend(Request $request)
    {
       
          $sessionid = $request->sessionid;
          $receive_id = $request->receive_id;
          $suggestionadmin = $request->suggestionadmin;
          $type = $request->text_type; 
          
          $Message = new ChatMessage();
          $Message->sender_id =$sessionid;
          $Message->receive_id =$receive_id;
          $Message->message = $suggestionadmin;
          $Message->text_type = $type;
          $Message->notification_admin = '1';
          $Message->save(); 
   
   $response =  Response()->json([
                "success" => true
                ]);

   return $response;

   //$Chat = Chat::where('customer_id',$receive_id)->update(['agent_id'=>$sessionid, 'agent_typing'=>'1']);
 
 //$userChat = ChatMessage::where('sender_id',$receive_id)->update(['receive_id'=>$sessionid]);
    }

    public function logout(){
        
        $admin_id= Auth::user()->id;
        Auth::user()->name;
        $Chat = User::where('id','=',$admin_id)
        ->where('Isactive', '=','1')
        ->update(['Isactive'=>'0']);
              Auth::logout();
              Session::flush();
              return redirect('/admin')->with('flash_message_success','Logged out Successfully'); 
    }
  public function chat_page()
  {
    $id= Auth::user()->id;
    $User = User::select('*')->where('id',$id)->get();
    return view('/admin/chat_page')->with('User',$User);
  }
   public function account()
  {
    $id= Auth::user()->id;
    $User = User::select('*')->where('id',$id)->get();
    return view('/admin/account')->with('User', $User);
  }

  public function acc_update(Request $request)
  {
    $name=$request->name;
    $email=$request->email;
    $oldimg=$request->oldimg;
    $newimage=$request->newimage;
    $image= Auth::user()->image;
    $id= Auth::user()->id;
    //echo $request->file('newimage');die;



    if($oldimg==$image && $request->file('newimage')==''){
      $update = User::where('id','=',$id)
        ->update(['name'=>$name,'email'=>$email]);
    }else if($request->file('newimage')!=''){

      //echo 'sunil';die;
     if($files = $request->file('newimage'))
     {
      $imageName = date('YmdHis') . "" . $request->file('newimage')->getClientOriginalName();
      $files->move(public_path('/userimages'), $imageName);
      $update = User::where('id','=',$id)
        ->update(['name'=>$name,'email'=>$email,'image'=>$imageName]);
     }
    }

    $User = User::select('*')->where('id',$id)->get();
    return redirect('/admin/account')->with(['User' => $User,'flash_message_error' => 'successfully account details updated']);
  }

  public function resetpassword(Request $request)
  {
    $id= Auth::user()->id;
    $newpassword=Hash::make($request->npass);
    $update = User::where('id','=',$id)
        ->update(['password'=>$newpassword]);
    $User = User::select('*')->where('id',$id)->get();
    return redirect('/admin/account')->with(['User' => $User,'flash_message_error' => 'Please logout then login']);
  }
 
 public function companydetailpost(Request $request)
 {
   $id= Auth::user()->id;
   $company_name=$request->company_name;
   $header=$request->header;
   $welmsg=$request->welmsg;
   $chatpageurl=$request->chatpageurl;
   $metatitle=$request->metatitle;
   $metadesc=$request->metadesc;
   $update = User::where('id','=',$id)
        ->update(['company_name'=>$company_name,'header'=>$header,'wel_msg'=>$welmsg,'chat_page_url'=>$chatpageurl,'meta_title'=>$metatitle,'meta_desc'=>$metadesc]);
   
    $User = User::select('*')->where('id',$id)->get();
    return redirect('/admin/chat_page')->with(['User' => $User,'flash_message_error' => 'Please logout then login']);
    

 }


  public function appearance()
  {
     return view('/admin/appearance');
  }
}
