<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem za rentiranje filmova</title>
   

  

</head>
<body>


<!--//navigacioni meni-->
<?php include_once("./templates/header.php");?>
<br></br>
<div class="container">
    <div class="card mx-auto" style="width:30rem;">
        <div class="card-header">Registruj se</div>
            <div class="card-body">
                <form  id="register_form" onsubmit="return false" autocomplete="off">
                        <div class="form-group">
                            <label for="username">Korisnicko ime</label>
                            <input type="text" name="username" class="form-control" id="username"  placeholder="Unesite korisnicko ime">
                            <small id="u_error" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" class="form-control" id="email"  placeholder="Unesite email">
                            <small id="e_error" class="form-text text-muted">Vas email nece biti deljen</small>
                        </div>
                        <div class="form-group">
                            <label for="password1">Password</label>
                            <input type="password" name="password1" class="form-control" id="password1"  placeholder="Password">
                            <small id="p1_error" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="password2">Ponovite password</label>
                            <input type="password" name="password2" class="form-control" id="password2"  placeholder="Password">
                            <small id="p2_error" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="usertype">tip korisnika</label>
                            <select  name="usertype" class="form-control" id="usertype"  >
                                <option value="">Izaberite tip korisnika</option>
                                <option value="Admin">Admin</option>
                                <option value="Other">Ostalo</option>
                            </select>
                            <small id="t_error" class="form-text text-muted"></small>
                        </div>
                        <br></br>
                        <button type="submit" name="user_register" class="btn btn-primary"><span class="fa fa-user"></span>&nbsp;Registruj se</button>
                        <span><a href="index.php">Login</a></span>
                        
                </form>
            </div>
        
    </div>
</div>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script type="text/javascript" src="./js/glavno.js"> </script>
</body>   
</html>
