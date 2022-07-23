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
            <h3 class="text-center text-dark mt-2">Simple Learning Management System</h3>
          <hr>
          <div><img src="pup.png" alt="" width="150" height="150"><h3 class="text-center text-light mt-2">POLYTECHNIC UNIVERSITY OF THE PHILIPPINES</h3></div>
            <div class="col-md-15">
                <h6><p><tr> A learning management system (LMS) is a software application or
                     Web-based technology that ranges from managing training and training records
                      to distributing courses to employees/students over the internet. Typically, LMS'
                       provide an employer/instructor with a way to create and deliver specialized content,
                        monitor employee/student participation, and assess their overall performance and completion 
                        of the required courses. A learning management system may also provide employees/students with
                         the ability to use interactive features such as managing courses, online assessment, threaded discussions,
                          video conferencing, and discussion forums to reach their full potential.

This software allows for the employee/student to take learning into their own hands while either staying current
 in their specific field or branch out and learning new skills.</p></h6>
</tr>

            </div>

            <div>
<tr>
    <p>Online learning environments are a fairly new and fast-growing 
        industry that is available to many individuals and companies around the world.
         It is important for the learning environment to offer a secure place where a large number
          of people can come to receive training and new skills so that they can grow and learn in their 
          fields. Many times it is no longer possible for managers and professors to get an entire group
           of people together for a course or mandatory training. Companies and institutes are finding it hard to keep track of paperwork proving training completion, forms, and evaluations. With LMS these problems are solved with everything now digital and available with just a few strokes on a keyboard. Some of the return that companies get back from investments in LMS’ are the ability to quickly train and track the learning of employees, and the ability to better train employees, avoid fines by being able to quickly showing compliance as well as giving employees room to grow and learn with a full scale of training. Because LMS is such an industry, the market is continuously growing and improving its services. Many of these companies encourage informational feedback from clients on what is working for them and what is not.</p>
</tr>
            </div>
          <?php if(isset($_SESSION['response'])) { ?>

          <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <b><?=$_SESSION['response']; ?></b>
          </div>
            <?php } unset($_SESSION['response']);?>
            
        </div>
    </div>
    
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