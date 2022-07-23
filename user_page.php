<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:index.php');
}
?>
<?php
include 'action.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
   table, th, td {
  border:1px solid black;
}

</style>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="groupof.php">Group Project of:</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="About.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user_page.php">IM's</a>       
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Exercise.php">Exercise</a>       
      </li>
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
  
</nav>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h3 class="text-center text-light mt-2">DICT 2 PROJECT</h3>
          <hr>
          
          <div><img src="pup.png" alt="" width="150" height="150"><h3 class="text-center text-light mt-2">POLYTECHNIC UNIVERSITY OF THE PHILIPPINES</h3></div>
            <div class="col-md-15">
          <?php if(isset($_SESSION['response'])) { ?>

          <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <b><?=$_SESSION['response']; ?></b>
          </div>
            <?php } unset($_SESSION['response']);?>
            
        </div>
    </div>

    <div class="row">
    <div>
      <a href="BSIT.php">
         <img alt="Website Development" src="https://th.bing.com/th/id/OIP.H5afBDwlDOveNpZi5XKcjwHaF7?w=226&h=181&c=7&r=0&o=5&dpr=1.25&pid=1.7"
         width="256" height="256"><h3 class="text-center text-light mt-2"><p>BSIT</p></h3></div>
    <hr>
    <hr>
    <hr>
<div><a href="DICT.php">
         <img alt="DICT" src="https://th.bing.com/th/id/OIP.1jh0YfB-ARCbLnCfxUnVlQHaE7?w=226&h=180&c=7&r=0&o=5&dpr=1.25&pid=1.7"
         width="256" height="256"><h3 class="text-center text-light mt-2"><p>DICT</p></h3></div>


        <div class="col-md-8">

        <?php
          $query = "Select * from d_user";
          $stmt = $con->prepare($query);
          $stmt->execute();
          $result = $stmt->get_result();
        ?>   
 
        </div>

    </div>

</div>

</body>
</html>