<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem za upravljanje zalihama</title>
   
    
<script type="text/javascript" src="./js/main.js"></script>   

</head>
<body>

<!--//navigacioni meni-->
<?php include_once("../templates/header.php");?>
<br></br>
<div class="container">
<div class="card mx-auto" style="width:18rem;">
  <img src="./images/login.png" class="card-img-top mx-auto" alt="Login icon" style="width:60%;">
  <div class="card-body">
    
            <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email adresa</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Nikada necemo podeliti vasu email adresu</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <button type="submit" class="btn btn-primary"><i class="fa fa-key">&nbsp;</i>Login</button>
          <span><a href="#">Registruj se</a></span>
        </form>
  </div>
  <div class="card-footer"><a href="#">Zaboravio password?</a></div>
</div>
</div>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>   
</html>
