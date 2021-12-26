<?php include 'session.php';?>
<?php
//Checking if button is clicked or not...
if (isset($_POST['updateproduct'])) {

//Getting data from Form...
    echo $p_name = $_POST['name'];
    echo $eid = $_POST['id'];
    echo $p_detail = $_POST['detail'];
    echo $artist = $_POST['artist'];

    echo $size = $_POST['size'];
    echo $created = $_POST['created'];
    echo $collection = $_POST['collection'];
    


    //Connection Stablishing...
    $con = mysqli_connect("localhost", "root", "", "nft") or die("Query Failed!!!");

//Update Query For Mysql...
    echo $query = "UPDATE `product` SET `name`='$p_name',`detail`='$p_detail',`artist`='$artist',`size`='$size',`created`='$created',`collection`='$collection' WHERE id = $eid";
    $res = mysqli_query($con, $query);

//Redirection to another page...
    header("Location: product.php");
    
//Connection Close...
    mysqli_close($con);
}
