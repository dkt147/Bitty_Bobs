<?php include 'session.php';?>
<?php

//Checking If button is clicked or not..
if (isset($_GET['id'])) {

  //Getting id from Url...
    $did = $_GET['id'];

  //Connection Stablishing...
    $con = mysqli_connect("localhost", "root", "", "nft") or die("Query Failed!!!");

  //Delete Query For Mysql...
    $query = "DELETE FROM `contact` WHERE id = $did";
    $res = mysqli_query($con, $query);

  //Delete and Redirect to same page...
    header("Location: testing_batch.php");

  //Connection Close...
    mysqli_close($con);
}
?>
