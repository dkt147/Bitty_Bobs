<?php include 'session.php';?>
<?php

//Checking If button is clicked or not..
if (isset($_GET['id'])) {


  //Getting id from Url...
    $did = $_GET['id'];


  //Connection Stablishing...
    $con = mysqli_connect("localhost", "root", "", "lab_automation") or die("Query Failed!!!");

  //Delete Query For Mysql...
    $query = "DELETE FROM `products` WHERE p_Id = $did";
    $res = mysqli_query($con, $query);

  //Delete and Redirect to same page...
    header("Location: http://localhost/LAB/Views/product.php");

  //Connection Close...
    mysqli_close($con);
}
