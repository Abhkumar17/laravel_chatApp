var username;

$(document).ready(function()
{
    username = $('#username').html();
    //alert(username);
    pullData();

    $(document).keyup(function(e) {
        if (e.keyCode == 13)
            sendMessage();
        else
            isTyping();
    });
});

function pullData()
{
   // retrieveChatMessages();
  //  retrieveTypingStatus();
    setTimeout(pullData,3000);
}

function retrieveChatMessages()
{
    $.post('http://localhost/chats/public/retrieveChatMessages', {username: username}, function(data)
    {
        if (data.length > 0)
            $('#chat-window').append('<br><div>'+data+'</div><br>');
    });
}

function retrieveTypingStatus()
{
    $.post('http://localhost/chats/public/retrieveTypingStatus', 
        {username: username}, function(username)
    {
        if (username.length > 0)
            $('#typingStatus').html(username+' is typing');
        else
            $('#typingStatus').html('');
    });
}

function sendMessage()
{
    var text = $('#text').val();
    alert(text);
    if (text.length > 0)
    {
      /*  $.post('http://localhost/chats/public/sendMessage', {text: text, username: username}, function()
        {
            $('#chat-window').append('<div style="text-align: right">'+text+'</div>');
            $('#text').val('');
            notTyping();
        });*/
        var data_html= {text:text, username:username};
        var url="/sendMessage";
        Ajax_call(data_html,url);
    }
}

function isTyping()
{
       
}

function notTyping()
{
      var data_html= {"action" : "Knowledge_Base", "colume_name_st":'id',"colume_name_mt":'id', "colume_value":id};
       var url="notTyping";
       Ajax_call(data_html,url);
       /*$.post('http://localhost/chats/public/notTyping)',
       {username: username});*/
}
function Ajax_call(data_html,url){
     $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
 var returnValue;

        $.ajax({
          url: "http://localhost/chats/public/sendMessage",
           type: 'POST',
           data: data_html,
            dataType: "json",
             encode:true,
             success: function(response){
                            
                           // json_data(response,prosecc_name);
               
                  }
                });
                  
}