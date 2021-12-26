<?php include 'session.php';?>
<?php

//Checking if button is clicked or not...
if (isset($_POST['updatetype'])) {

//Connection Stablishing...    
    echo $name = $_POST['name'];
    echo $eid = $_POST['id'];

//Update Query For Mysql...
    $con = mysqli_connect("localhost", "root", "", "lab_automation") or die("Query Failed!!!");

//Update Query for Mysql...
    echo $query = "UPDATE `testing_type` SET `testing_type`='$name' WHERE testing_Id = $eid";
    $res = mysqli_query($con, $query);

//Redirection to another page...
    header("Location: http://localhost/LAB/Views/testing_type.php");

//Connection Close...
    mysqli_close($con);
}
