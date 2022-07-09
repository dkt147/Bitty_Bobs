<?php include 'session.php';?>
<?php
//Checking if button is clicked or not...
if (isset($_POST['updatebatch'])) {

//Getting data from Form...
    $cat = $_POST['name'];
    $eid = $_POST['b_Id'];

       //Stablishing Connection...
       include 'connection.php';  
//Update Query For Mysql...
    $query = "UPDATE `product_batch` SET `cat_Id_FK`=$cat WHERE b_Id = $eid";
    $res = mysqli_query($con, $query);
//Redirection to another page...
    header("Location: http://localhost/LAB/Views/testing_batch.php");

//Connection Close...
    mysqli_close($con);
}
