$(document).ready(function(){
  
    var DOMAIN="http://localhost/iteh/projekatIteh/public_html/";
     //upravljaj kategorijama
  manageCategory();
  function manageCategory()  {
    $.ajax({
      url: DOMAIN + "/includes/process.php",
      method: "POST",
    data: { manageCategory: 1 },
      success: signal,
    });
    function signal(data) {
     
     $("#get_category").html(data);
    }
  }
  $("body").delegate(".del_cat","click",function(){
      var did = $(this).attr("did");
     
      if(confirm("Da li ste sigurni da zelite da obrisete?")){
            $.ajax({
              url: DOMAIN + "/includes/process.php",
              method: "POST",
              data: { deleteCategory: 1,id:did },
              success: brisi,
            });
            function brisi(data) {
              
            if(data.includes("DEPENDENT")){
              alert("Ne mozete obrisati ovu kategoriju, druge zavise od nje");
            }else if(data.includes("DELETED")){

             
              fetch_category();
            }else
            alert("Ne mozete obrisati, neki proizvod zavisi od ovoga");
            }
      }else{
        
      }
      manageCategory();
  })
  //fetch cat

  function fetch_category()  {
    $.ajax({
      url: DOMAIN + "/includes/process.php",
      method: "POST",
    data: { getCategory: 1 },
      success: signaliraj,
    });
    function signaliraj(data) {
      var root = "<option value='0'>Koren</option>";
      var choose = "<option value=''>Izaberi</option>";
      $("#parent_cat").html(root+data);
      $("#select_cat").html(choose+data);
    
    }
  }
    fetch_category(); 
  //Promeni kategoriku
  $("body").delegate(".edit_cat","click",function(){
    var eid = $(this).attr("eid");
    $.ajax({
      url: DOMAIN + "/includes/process.php",
      method: "POST",
      dataType : "json",
      data: { updateCategory: 1,id:eid },
      success: promeni,
    });
    function promeni(data){
        $("#cid").val(data["cid"]);
        $("#update_category").val(data["category_name"]);
        $("#parent_cat").val(data["parent_cat"]);
    }
    })
    $("#update_category_form").on("submit",function(){
              if($("#update_category").val()==""){
                $("#update_category").addClass("border-danger");
                $("#cat_error").html("<span class='text-danger'>Molim vas unesite ime</span>");
              }else{
                $.ajax({
                  url : DOMAIN+"/includes/process.php",
                  method:"POST",
                  data: $("#update_category_form").serialize(),
                  success: uspeh,   
              });
              function uspeh(data){
                if(data.includes("UPDATED")){
                  alert(data);
                  fetch_category(); 
                  window.location.href="";
              }else{
                alert(data);
              }
            }
          }
    })
      //brend
      manageBrand();
      function manageBrand()  {
        $.ajax({
          url: DOMAIN + "/includes/process.php",
          method: "POST",
        data: { manageBrand: 1 },
          success: signal,
        });
        function signal(data) {
         
         $("#get_brand").html(data);
        }
      }
      //fetch brand
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

      //brisi brend
      $("body").delegate(".del_brand","click",function(){
        var did = $(this).attr("did");
       
        if(confirm("Da li ste sigurni da zelite da obrisete?")){
              $.ajax({
                url: DOMAIN + "/includes/process.php",
                method: "POST",
                data: { deleteBrand: 1,id:did },
                success: brisi,
              });
              function brisi(data) {
              if(data.includes("DEPENDENT")){
                alert("Ne mozete obrisati ovu kategoriju, druge zavise od nje");
              }else if(data.includes("DELETED")){
  
               
                fetch_brand();
              }else
              alert("Ne mozete obrisati, neki proizvod zavisi od ovoga");
              }
        }else{
          
        }
        manageBrand();
    })
    //promeni brend forma
    $("#update_brand_form").on("submit",function(){
      if($("#update_brand").val()==""){
        $("#update_brand").addClass("border-danger");
        $("#brand_error").html("<span class='text-danger'>Molim vas unesite ime</span>");
      }else{
        $.ajax({
          url : DOMAIN+"/includes/process.php",
          method:"POST",
          data: $("#update_brand_form").serialize(),
          success: uspeh,   
      });
      function uspeh(data){
        if(data.includes("UPDATED")){
          alert(data);
          fetch_brand(); 
          window.location.href="";
      }else{
        alert(data);
      }
    }
  }
})
$("body").delegate(".edit_brand","click",function(){
  var eid = $(this).attr("eid");
  $.ajax({
    url: DOMAIN + "/includes/process.php",
    method: "POST",
    dataType : "json",
    data: { updateBrand: 1,id:eid },
    success: promeni,
  });
  function promeni(data){
      $("#bid").val(data["bid"]);
      $("#update_brand").val(data["brand_name"]);
      
  }
  })
   //proizvod
   manageProduct();
   function manageProduct()  {
     $.ajax({
       url: DOMAIN + "/includes/process.php",
       method: "POST",
     data: { manageProduct: 1 },
       success: signal,
     });
     function signal(data) {
      
      $("#get_product").html(data);
     }
   }
   //brisi proizvod
   $("body").delegate(".del_product","click",function(){
    var did = $(this).attr("did");
   
    if(confirm("Da li ste sigurni da zelite da obrisete?")){
          $.ajax({
            url: DOMAIN + "/includes/process.php",
            method: "POST",
            data: { deleteProduct: 1,id:did },
            success: brisi,
          });
          function brisi(data) {
          if(data.includes("DEPENDENT")){
            alert("Ne mozete obrisati ovu kategoriju, druge zavise od nje");
          }else if(data.includes("DELETED")){

           
          
          }else
          alert("Ne mozete obrisati, neki proizvod zavisi od ovoga");
          }
    }else{
      
    }
    manageProduct();
})
//promeni proizvod
$("body").delegate(".edit_product","click",function(){
  
  var eid = $(this).attr("eid");

  $.ajax({
    url: DOMAIN + "/includes/process.php",
    method: "POST",
    dataType : "json",
    data: { updateProduct: 1,id:eid },
    success: menjaj,
  });
  function menjaj(data){
    console.log(data);
      $("#pid").val(data["pid"]);
      $("#update_product").val(data["product_name"]);
      $("#select_cat").val(data["cid"]);
      $("#select_brand").val(data["bid"]);
      $("#product_price").val(data["product_price"]);
      $("#product_qty").val(data["product_stock"]);
     
      
    }
  })
  //promeni proizvod
  $("#update_product_form").on("submit",function(){
    // if($("#brand_name").val()==""){
     //  $("#brand_name").addClass("border-danger");
     //  $("#brand_error").html("<span class='text-danger'>Molim vas unesite ime</span>");
    // }else{
       $.ajax({
         url : DOMAIN+"/includes/process.php",
         method:"POST",
         data: $("#update_product_form").serialize(),
         success: uspelo,   
     });
     function uspelo(data){
       if(data.includes("UPDATED")){
        alert(data);
        manageProduct();
          window.location.href="";
     }else{
       alert(data+"nije uspelo");
     }
  // }
   }
   })
//promeni proizvod

  })