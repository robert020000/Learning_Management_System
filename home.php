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
body {
    margin: 0;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #93abc4;
    text-align: left;
    background-color: #fff;
}
</style>

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
        <div class="col-md-10"><marquee behavior="scroll" direction="left"><h3 class="text-center text-light mt-2"><img src="pup.png" alt="" width="150" height="150">POLYTECHNIC UNIVERSITY OF THE PHILIPPINES</h3></marquee>
            
          <hr>

          <?php if(isset($_SESSION['response'])) { ?>

          <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <b><?=$_SESSION['response']; ?></b>
          </div>
            <?php } unset($_SESSION['response']);?>
            
        </div>
    </div>
</div>


    

</body>
<body>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
          
            <h3 class="text-center text-light mt-2">STATE UNIVERSITIES AND COLLEGES (SUCs)</h3>

          <hr>
          <div></div>
            <h4 class="col-md-50"><p>STRATEGIC OBJECTIVES</p></h4>
          <div class="col-md-15">



          <p><b><h2 class="text-center text-light mt-2">Mandate</h2></b></p>
                <h6><p><tr> The Polytechnic University of the Philippines is mandated to primarily
                            provide higher occupational, technical and professional instruction and
                            training in the applied arts and sciences and to promote applied
                            research, advance studies, and progressive leadership in the stated
                            fields; to offer programs in other polytechnic areas in addition to its
                            present offering of ladder-type higher vocational, technical and
                            professional programs in the areas of business and distributive arts,
                            education and the social sciences related to the fields of commerce and
                            business administration; and to enrich the academic program in other
                            fields of study such as agriculture, arts and trades, and fisheries by
                            integrating such courses as are necessary to produce individuals with
                            highly-technical and managerial skills.
                            </p></h6>
                        </tr>


                <p><b><h2 class="text-center text-light mt-2">Mission</h2></b></p>
                <h6><p><tr> The Polytechnic University of the Philippines shall commit its academic
                            resources and manpower to achieve its goal through the following:
                            provision of undergraduate and graduate education which meet
                            International standards of quality and excellence; generation and
                            transmission of knowledge in the broad range of disciplines relevant and
                            responsive to the dynamically changing domestic and international
                            environment; provision of more equitable access to higher education
                            opportunities to deserving and qualified Filipinos; and optimization,
                            through efficiency and effectiveness, of social, institutional, and
                            individual returns and benefits derived from the utilization of higher
                            education resources.</p></h6>
                        </tr>

                    </div>

                    <div>
                        <tr>
                        <p><b><h2 class="text-center text-light mt-2">Vision</h2></b></p>
                        <h6><p><tr> The Polytechnic University of the Philippines, envisions to transform
                        the University into an epistemic community.</p></h6> </tr>
                     </div>

                     <div>
                        <tr>
                        <p><b><h2 class="text-center text-light mt-2">SECTOR OUTCOME</h2></b></p>
                        <h6><p><tr> Lifelong learning opportunities for all ensured.</p></h6> </tr>
                     </div>

                     <div>
                        <tr>
                        <p><b><h2 class="text-center text-light mt-2">ORGANIZATIONAL OUTCOME</h2></b></p>
                        <h6><p><tr>OO : Relevant and quality tertiary education ensured to achieve
                            inclusive growth and access of deserving but poor students to quality
                            tertiary education increased
                            OO : Higher education research improved to promote economic productivity
                            and innovation
                            OO : Community engagement increased</p></h6> </tr>
                     </div>

                     
                     

                     
</body>
</html>