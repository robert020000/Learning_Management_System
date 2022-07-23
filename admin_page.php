<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:admin_page.php');
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
   <title>admin page</title>

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
<body>
   

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">DICT2 Learning Manage System</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">

      <li class="nav-item">
        <a class="nav-link" href="logout.php">logout</a>
      </li>
    </ul>
  </div>

</nav>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h3 class="text-center text-dark mt-2">DICT2 Learning Management System</h3>
          <hr>

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
            <h3 class="text-center text-info">Record Present In The Database</h3>
            <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
      </tr>
    </thead>
    <tbody>

    <?php while($row = $result->fetch_assoc()){ ?>
      <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['name']; ?></td>
        <td><?= $row['email']; ?></td>
        <td><?= $row['phone']; ?></td>
        <td>
        
            <a href="action.php?delete=<?= $row['id'] ?>" class="badge badge-danger p-2" onclick = "return confirm ('Do you want to delete the record');";>Delete</a> |
            

        </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
        </div>

    </div>

</div>

</body>
</html>