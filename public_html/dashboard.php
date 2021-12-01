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
    <div class="row">
        <div class="col-md-4"> 
            <div class="card mx-auto" >
                <img src="./images/user.png" class="card-img-top mx-auto" alt="..." style="width:60%;">
                <div class="card-body">
                    <h5 class="card-title"><i class="fa fa-info">&nbsp;</i>Informacije profila</h5>
                    <p class="card-text"><i class="fa fa-user">&nbsp;</i>Dusan Visnjic</p>
                    <p class="card-text"><i class="fa fa-user">&nbsp;</i>Admin</p>
                    <p class="card-text">Poslednje ulogovan: xxxx-xx-xx</p>
                    <a href="#" class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>Izmeni profil</a>
                </div>
            </div>
        </div>
        <div class="col-md-8"> 
            <div class="jumbotron" style="width: 100%;height:100%;">
                <h1>Dobrodosli,</h1>
                <div class="row">
                    <div class="col-sm-6">
                        <br></br>
                        
                        <iframe src="https://free.timeanddate.com/clock/i835da65/n35/szw110/szh110/hoc222/hbw6/cf100/hgr0/hcw2/hcd88/fan2/fas20/fdi70/mqc000/mqs3/mql13/mqw4/mqd94/mhc000/mhs3/mhl13/mhw4/mhd94/mmc000/mml5/mmw1/mmd94/hwm2/hhs2/hhb18/hms2/hml80/hmb18/hmr7/hscf09/hss1/hsl90/hsr5" frameborder="0" width="110" height="110"></iframe>
                    </div>
                    <div class="col-sm-6"> 
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Narudzbine</h5>
                                <p class="card-text">Kreiraj nove narudzbine</p>
                                <a href="#" class="btn btn-primary"><i class="fa fa-plus">&nbsp;</i>Nova narudzbina</a>
                            </div>
                        </div>
                    </div>   
                </div> 
            </div> 
        </div>
    </div>
</div>
<br></br>
<div class="container">
  <div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body" >
                <h5 class="card-title">Filmski zanrovi</h5>
                <p class="card-text">Kreiraj novi zanr</p>
                <a href="#" data-bs-toggle="modal" data-bs-target="#modal1" class="btn btn-primary"><i class="fa fa-plus">&nbsp;</i>Novi</a>
                <a href="#" class="btn btn-primary"><i class="fa fa-tasks">&nbsp;</i>Upravljaj</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Medijum pakovanja</h5>
                    <p class="card-text">Kreiraj novi medijum pakovanja</p>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal2" class="btn btn-primary"><i class="fa fa-plus">&nbsp;</i>Novi</a>
                    <a href="#" class="btn btn-primary"><i class="fa fa-tasks">&nbsp;</i>Upravljaj</a>        
                </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Filmovi</h5>
                    <p class="card-text">Kreiraj novi film</p>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal3" class="btn btn-primary"><i class="fa fa-plus">&nbsp;</i>Novi</a>
                    <a href="#" class="btn btn-primary"><i class="fa fa-tasks">&nbsp;</i>Upravljaj</a>
                </div>
        </div>
    </div>
  </div>
</div>
<?php
include_once("./templates/modal1.php")

?>
<?php
include_once("./templates/modal2.php")

?>
 <?php
include_once("./templates/modal3.php")

?>









<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<!--script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>   
</html>
