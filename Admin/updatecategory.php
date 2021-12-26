<?php
//Checking if button is clicked or not...
if (isset($_POST['updatecategory'])) {

//Getting data from Form...
    echo $cat = $_POST['name'];
    echo $eid = $_POST['id'];

    //Connection Stablishing...
    $con = mysqli_connect("localhost", "root", "", "lab_automation") or die("Query Failed!!!");

//Update Query For Mysql...
    echo $query = "UPDATE `products_catagory` SET `cat_Name`='$cat' WHERE cat_Id = $eid";
    $res = mysqli_query($con, $query);

//Redirection to another page...
    header("Location: http://localhost/LAB/Views/product_category.php");
    
//Connection Close...
    mysqli_close($con);
}
?>