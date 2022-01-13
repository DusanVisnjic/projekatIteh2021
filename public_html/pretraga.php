<?php



?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem za rentiranje filmova</title>
   
    
<script type="text/javascript" src="./js/main.js"></script>   

</head>
<body>

<!--//navigacioni meni-->
<?php include_once("./templates/header.php");?>
<br></br>
<div class="container">
    <div class="text-center mt-5 mb-4">
        <h2>Pretraga korisnika</h2>
</div>
<input type="text" class="form-control" id="live-search" autocomplete="off" placeholder="Pretrazi...">


</div>
<table class="table table-hover table-bordered table-striped">
    
<thead>
    <tr>
                <th>#</th>
                <th>username</th>
                <th>email</th>
                <th>registracija</th>
                <th>poslednji login</th>
                
          </tr>
          <tbody id="searchresult">
         
          <tbody>
</table>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="text/javascript" src="./js/glavno.js"> </script>
</body>   
</html>