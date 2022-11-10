
 var session_id=Auth::User()->session_id;
 var receive_id='';
$('.customer_details').on('click',function() {
  
   $('.show_profie').show();
   $('.chat_detail').show();
   
   //session_id=$(this).data('customer_id');
   //receive_id=$(this).data('agent_id');
   //alert(session_id);
   var customer_email=$(this).data('email');
   var customer_name=$(this).data('name');
   
   var customer_mobile=$(this).data('mobile');
   var customer_ip=$(this).data('ip');
   var customer_regioncode=$(this).data('regioncode');
   var customer_city=$(this).data('city');
   var customer_country=$(this).data('country');
   var custsession=$(this).data('customer_id');
    
     $('.detail_email').html(customer_email);
     var img='<svg width="50" height="50"><circle cx="25" cy="25" r="20" fill="#2196f3"></circle> <text x="50%" y="54%" text-anchor="middle" fill="white" font-size="25px" font-family="Arial" dy=".3em">'+customer_email.slice(0,1).toUpperCase()+'</text></svg>';
     $('.detail_img').html(img);
     $('.detail_mobile').html(customer_mobile);
     $('.detail_ip').html(customer_ip);
     var customer_regioncode='('+customer_regioncode+')';
     $('.detail_regioncode').html(customer_regioncode);
     $('.detail_city').html(customer_city);
     $('.detail_country').html(customer_country);
});





function pullData()
{
    
    livechating_agent();
    setTimeout(pullData,3000);
}



 


