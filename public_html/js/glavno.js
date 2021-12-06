$(document).ready(function(){
    var DOMAIN="http://localhost/iteh/projekatIteh/public_html/";
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
       if(!e_patt.test(email.val()))
       {
         email.addClass("border-danger");
         $("#e_error").html("<span class='text-danger'>Molim vas unesite validan email</span>");
         status=false;
       }else
       {
        email.removeClass("border-danger");
        $("#e_error").html("");
        status=true;
       }
       if(pass1==""||pass1.val().length<9)
       {
         pass1.addClass("border-danger");
         $("#p1_error").html("<span class='text-danger'>Molim vas unesite password duzi od 9 karaktera</span>");
         status=false;
       }else
       {
       pass1.removeClass("border-danger");
        $("#p1_error").html("");
        status=true;
       }
       if(pass2.val()!=pass1.val())
       {
         pass2.addClass("border-danger");
         $("#p2_error").html("<span class='text-danger'>Ne poklapaju se password-i</span>");
         status=false;
       }else
       {
       pass2.removeClass("border-danger");
        $("#p2_error").html("");
        status=true;
       }
       if(type.val()=="")
       {
        type.addClass("border-danger");
         $("#t_error").html("<span class='text-danger'>Izaberite tip</span>");
         status=false;
       }else
       {
        type.removeClass("border-danger");
        $("#t_error").html("");
        status=true;
       }
       if(status==true){
    
         $.ajax({
            url : DOMAIN+"/includes/process.php",
            method:"POST",
            data: $("register_form").serialize(),
            success:function(data){
              if(data=="EMAIL_ALREADY_EXISTS"){
                alert("Vas email se je vec iskoriscen");
              }else if(data=="SOME_ERROR"){
                  alert("Nesto nije pRoslo kako treba");
              }else{
                
                
                window.location.href=encodeURI(DOMAIN+"/index.php?msg=Reistovani ste, sada mozete da se ulogujete");
              }
            }
         })
       }
     })
     //za login deo
     $("#login_form").on("submit",function(){
       var status= false;
       var email=$("#log_email");
       var pass=$("#log_password");
       if(email.val()=="")
       {
        email.addClass("border-danger");
         $("#e_error").html("<span class='text-danger'>Unesite email adresu</span>");
         status=false;
       }else
       {
        email.removeClass("border-danger");
        $("#e_error").html("");
        status=true;
       }
        if(pass.val()=="")
       {
        pass.addClass("border-danger");
         $("#p_error").html("<span class='text-danger'>Unesite password</span>");
         status=false;
       }else
       {
        pass.removeClass("border-danger");
        $("#p_error").html("");
        status=true;
       } 
       if(status==true){
                $.ajax({
                  url : DOMAIN+"/includes/process.php",
                  method:"POST",
                  data: $("login_form").serialize(),
                  success:function(data){
                    data="NOT_REGISTERED";
                    if(data=="NOT_REGISTERED"){
                        email.addClass("border-danger");
                        $("#e_error").html("<span class='text-danger'>Ne postoji korisnik registrovan na ovaj email</span>");
                    }else if(data=="PASSWORD_NOT_MATCHED"){
                          pass.addClass("border-danger");
                          $("#p_error").html("<span class='text-danger'>Unesite odgovarajuci password</span>");
                    }else{
                  
                     window.location.href=DOMAIN+"/dashboard.php";
                    }
                  }
              })
        }
       
     })
    })