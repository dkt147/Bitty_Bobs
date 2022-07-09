<?php include 'session.php';?>
<?php

//Checking if button is clicked or not...
if (isset($_POST['update'])) {


//Getting data from Form...
    $catagory = $_POST['catagory'];
    $eid = $_POST['id'];


       //Stablishing Connection...
       include 'connection.php';     
//Update Query For Mysql...
        $query = "UPDATE `catagory` SET `catagory`='$catagory' WHERE id = $eid";
        $res = mysqli_query($con, $query);

//Redirection to another page...
        header("Location: product_category.php");

//Connection Close...
        mysqli_close($con);
   
}
