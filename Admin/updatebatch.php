<?php include 'session.php';?>
<?php
//Checking if button is clicked or not...
if (isset($_POST['updatebatch'])) {

//Getting data from Form...
    echo $cat = $_POST['name'];
    echo $eid = $_POST['b_Id'];
//Connection Stablishing...
    $con = mysqli_connect("localhost", "root", "", "lab_automation") or die("Query Failed!!!");

//Update Query For Mysql...
    echo $query = "UPDATE `product_batch` SET `cat_Id_FK`=$cat WHERE b_Id = $eid";
    $res = mysqli_query($con, $query);
//Redirection to another page...
    header("Location: http://localhost/LAB/Views/testing_batch.php");

//Connection Close...
    mysqli_close($con);
}
