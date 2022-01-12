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
      
      $("#parent_cat").html(root+data);
    
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

  })