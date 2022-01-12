<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BUZZ</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><i class="fa fa-home">&nbsp;</i>Početna</a>
        </li>
        
          <?php
          if(isset($_SESSION["userid"])){
            ?> 
            <li class="nav-item active">
         
            <a class="nav-link" href="http://localhost/iteh/projekatIteh/public_html/templates/logout.php"  ><i class="fa fa-user">&nbsp;</i>Logout</a>
       
            <?php
           
        }
          ?>
          
          </li>
      </ul>
    </div>
  </div>
</nav>