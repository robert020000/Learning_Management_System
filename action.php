<?php
session_start();
include 'config2.php';

if(isset($_POST['add'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];


    $query = "Insert into d_user(name,email,phone) values(?,?,?)";
    $stmt = $con->prepare($query);
    $stmt->bind_param("ssss", $name,$email,$phone);
    $stmt->execute();
    header('location:admin_page.php');
    
    $_SESSION['response'] = "Successfully Inserted to the Database";
    $_SESSION['res_type'] = "success";
}
    if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $query = "Delete from d_user where id = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    header("location:admin_page.php");
    $_SESSION['response'] = "Successfully Deleted";
    $_SESSION['res_type'] = "danger";
}

?>