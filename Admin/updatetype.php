<?php include 'session.php';?>
<?php

//Checking if button is clicked or not...
if (isset($_POST['updatetype'])) {

//Connection Stablishing...    
     $name = $_POST['name'];
     $eid = $_POST['id'];


       //Stablishing Connection...
       include 'connection.php';  
//Update Query for Mysql...
     $query = "UPDATE `testing_type` SET `testing_type`='$name' WHERE testing_Id = $eid";
    $res = mysqli_query($con, $query);

//Redirection to another page...
    header("Location: http://localhost/LAB/Views/testing_type.php");

//Connection Close...
    mysqli_close($con);
}
