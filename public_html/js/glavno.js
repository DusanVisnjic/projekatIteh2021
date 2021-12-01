$(document).ready(function(){
    
    $("#register_form").on("submit",function(){
      
       var status=false;
       var name=$("#username");
       var email=$("#email");
       var pass1=$("#password1");
       var pass2=$("#password2");
       var type=$("#usertype");
      
       var e_patt=new RegExp(/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9_-]+(\.[a-z0-9_-])*(\.[a-z]{2,4})$/);
       if(name.val()=="" || name.val().length<6 )
       {
         name.addClass("border-danger");
         $("#u_error").html("<span class='text-danger'>Molim vas unesite ime duze od 6 karaktera</span>");
         status=false;
       }else
       {
        name.removeClass("border-danger");
        $("#u_error").html("");
        status=true;
       }
       return status;
     })
    })