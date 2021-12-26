<?php include 'session.php';?>
<?php
//Checking if button is clicked or not...
if (isset($_POST['updateproduct'])) {

//Getting data from Form...
    echo $p_name = $_POST['p_name'];
    echo $eid = $_POST['id'];
    echo $p_detail = $_POST['p_detail'];
    echo $cat = $_POST['cat_Name'];
    


    //Connection Stablishing...
    $con = mysqli_connect("localhost", "root", "", "lab_automation") or die("Query Failed!!!");

//Update Query For Mysql...
    echo $query = "UPDATE `products` SET `p_Name`='$p_name',`p_Details`='$p_detail',`c_Id_FK`='$cat' WHERE p_Id = $eid";
    $res = mysqli_query($con, $query);

//Redirection to another page...
    header("Location: http://localhost/LAB/Views/product.php");
    
//Connection Close...
    mysqli_close($con);
}
