<?php include 'session.php';?>
<?php
//Checking if button is clicked or not...
if (isset($_POST['updateproduct'])) {

//Getting data from Form...
    $p_name = $_POST['name'];
    $eid = $_POST['id'];
    $p_detail = $_POST['detail'];
    $artist = $_POST['artist'];

    $size = $_POST['size'];
    $created = $_POST['created'];
    $collection = $_POST['collection'];
    


   
       //Stablishing Connection...
       include 'connection.php';  
//Update Query For Mysql...
    $query = "UPDATE `product` SET `name`='$p_name',`detail`='$p_detail',`artist`='$artist',`size`='$size',`created`='$created',`collection`='$collection' WHERE id = $eid";
    $res = mysqli_query($con, $query);

//Redirection to another page...
    header("Location: weekly_data.php");
    
//Connection Close...
    mysqli_close($con);
}
