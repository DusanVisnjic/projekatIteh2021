$(document).ready(function(){
  
    var DOMAIN="http://localhost/iteh/projekatIteh/public_html/";
    //registracija
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
            data: $("#register_form").serialize(),
           success: registracija,
         })
         function registracija(response){
          
          if(response.includes("EMAIL")){
            alert("Email koj ste uneli je vec iskoriscen");
          }else if(response.includes("SOME")){
              alert("Nesto nije proslo kako treba, pokusajte ponovo:)");
          }else{
            window.location.href=encodeURI(DOMAIN+"/index.php?msg=Reistovani ste, sada mozete da se ulogujete");
          }
        }
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
                  data: $("#login_form").serialize(),
                  success: logovanje,   
              });
              function logovanje(response){
                  if(response.includes("REGISTERED")){
                    email.addClass("border-danger");
                    $("#e_error").html("<span class='text-danger'>Ne postoji korisnik registrovan na ovaj email</span>");
                }else if(response.includes("PASSWORD")){
                      pass.addClass("border-danger");
                      $("#p_error").html("<span class='text-danger'>Unesite odgovarajuci password</span>");
                }else{
                      window.location.href=DOMAIN+"/dashboard.php";
              }
            }
      }
    })
      
     
     //Kategorije
     //uzmi kategorije
      function fetch_category()  {
      $.ajax({
        url: DOMAIN + "/includes/process.php",
        method: "POST",
      data: { getCategory: 1 },
        success: signaliraj,
      });
      function signaliraj(data) {
        var root = "<option value='0'>Koren</option>";
        var choose = "<option value='0'>Izaberi</option>";
        $("#parent_cat").html(root+data);
        $("#select_cat").html(choose+data);
      }
    }
      fetch_category(); 

      //Brend
     //brendovi
     
      function fetch_brand()  {
        $.ajax({
          url: DOMAIN + "/includes/process.php",
          method: "POST",
        data: { getBrand: 1 },
          success: signal,
        });
        function signal(data) {
         
          var choose = "<option value='0'>Izaberi</option>";
          
          $("#select_brand").html(choose+data);
        }
      }
        fetch_brand();

  //nova kategorija
 $("#category_form").on("submit",function(){
        if($("#category_name").val()==""){
          $("#category_name").addClass("border-danger");
          $("#cat_error").html("<span class='text-danger'>Molim vas unesite ime</span>");
        }else{
          $.ajax({
            url : DOMAIN+"/includes/process.php",
            method:"POST",
            data: $("#category_form").serialize(),
            success: uspeh,   
        });
        function uspeh(data){
          if(data.includes("ADDED")){
            $("#category_name").removeClass("border-danger");
            $("#cat_error").html("<span class='text-success'>Uspesno uneta nova kategorija</span>");
            $("#category_name").val("");
            fetch_category(); 
        }else{
          alert(data);
        }
      }
    }
 })
   //novi brend
 $("#brand_form").on("submit",function(){
  if($("#brand_name").val()==""){
    $("#brand_name").addClass("border-danger");
    $("#brand_error").html("<span class='text-danger'>Molim vas unesite ime</span>");
  }else{
    $.ajax({
      url : DOMAIN+"/includes/process.php",
      method:"POST",
      data: $("#brand_form").serialize(),
      success: uspelo,   
  });
  function uspelo(data){
    if(data.includes("ADDED")){
      $("#brand_name").removeClass("border-danger");
      $("#brand_error").html("<span class='text-success'>Uspesno unet nov brend</span>");
      $("#brand_name").val("");
      fetch_brand();
  }else{
    alert(data);
  }
}
}
})
   //novi proizvod
   $("#product_form").on("submit",function(){
   // if($("#brand_name").val()==""){
    //  $("#brand_name").addClass("border-danger");
    //  $("#brand_error").html("<span class='text-danger'>Molim vas unesite ime</span>");
   // }else{
      $.ajax({
        url : DOMAIN+"/includes/process.php",
        method:"POST",
        data: $("#product_form").serialize(),
        success: uspelo,   
    });
    function uspelo(data){
      if(data.includes("ADDED")){
        //$("#brand_name").removeClass("border-danger");
        $("#product_error").html("<span class='text-success'>Uspesno unet nov proizvod</span>");
        $("#product_name").val("");
        $("#product_price").val("");
        $("#product_qty").val("");
    }else{
      alert(data+"nije uspelo");
    }
 // }
  }
  })
  //pretraga reffresh
  $("#live-search").dblclick(function(){
    var input=$(this).val();
    if(input==""){
      window.location.href="";
    }
  })
 //pretraga
 $("#live-search").keyup(function(){
      var input=$(this).val();
      
      if(input !=""){
        $.ajax({
          url : DOMAIN+"/includes/process.php",
          method:"POST",
          data: {input:input},
          success: uspelo,   
      });
      function uspelo(data){
        $("#searchresult").html(data);
   // }
    }
  }else{
    $("#searchresult").css("display","none");
  }

 })
    
})