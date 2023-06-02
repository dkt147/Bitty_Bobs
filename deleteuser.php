<?php include 'session.php';?>
<?php


//Checking If button is clicked or not..
if (isset($_GET['id'])) {


  //Getting id from Url...
    $did = $_GET['id'];

  
       //Stablishing Connection...
       include 'connection.php';  
  //Delete Query For Mysql...
    $query = "DELETE FROM `o_users` WHERE id = $did";
    $res = mysqli_query($con, $query);

  //Delete and Redirect to same page...
    header("Location: dashboard.php");

    //Connection Close...
    	mysqli_close($con);
}
