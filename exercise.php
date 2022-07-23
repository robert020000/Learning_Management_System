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

.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: orange;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

h6 {
  color: white;
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
      
    </ul>
    <div class="dropdown">
  <button class="dropbtn">Submit Answers</button>
  <div class="dropdown-content">
   <p><h6>robert.francia15@gmail.com</h6></p>
   <a class="nav-link" href="logout.php">Logout</a>
  </div>

</div>
  </div>
  
</nav>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h3 class="text-center text-dark mt-2">Learning Materials</h3>
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
    <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
          
       <hr>



          <p><b><h2 class="text-center text-light mt-2">Activities and Assessments</h2></b></p>
                <h6><p><tr> Answer Each and Every Activity/Assessment the IM's Have !.
                            </p></h6>
                            <h6><p>submit files in zip</p></h6>
                        </tr>
                        <hr><hr>
    <div class="row">
    <div>
      <a href="https://drive.google.com/file/d/1O_2B6mR4Yi7jPes90wFt6YV8WeDMTJ5m/view?usp=sharing">
         <img alt="Website Development" src="web.png"
         width="256" height="256"><h5 class="text-center text-light mt-2"><p>Web Development</p></h5></div>
<div><a href="https://drive.google.com/file/d/1KN4xHfe82m0HMzTyhraV3S8liZ-0Pv67/view?usp=sharing">
         <img alt="Human Computer Interaction" src="HCI.jpg"
         width="256" height="256"><h5 class="text-center text-light mt-2"><p>Human Computer Interaction</p></h5></div>
<div><a href="https://drive.google.com/file/d/1QPwMoTxG4rdz_D5Ib4IMrSne70ljLj3k/view?usp=drive_web&authuser=0">
         <img alt="Business Analytics" src="BA.png"
         width="256" height="256"><h5 class="text-center text-light mt-2"><p>Business Analytics</p></h5></div>
<div><a href="https://drive.google.com/file/d/1vN8GJu8RfPaKTqolYs6oxl336BryZ4tn/view?usp=sharing">
         <img alt="Information Technology" src="Infotech.jpg"
         width="256" height="256"><h5 class="text-center text-light mt-2"><p>Information Technology</p></h5></div>      
<div><a href="https://drive.google.com/file/d/1yixIMWIJMh4PnzxDGs_aW0a6DeFDnXM_/view?usp=sharing">
         <img alt="Object Oriented Programming" src="OOP.jfif"
         width="256" height="256"><h5 class="text-center text-light mt-2"><p>Object Oriented Programming</p></h5></div>      
<div><a href="https://drive.google.com/file/d/1P4Rvkh5R28Y-7vq6lUy9qQ7DPrezMDHL/view?usp=sharing">
         <img alt="Business Intelligence" src="BI.jfif"
         width="256" height="256"><h5 class="text-center text-light mt-2"><p>Business Intelligence</p></h5></div> 

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