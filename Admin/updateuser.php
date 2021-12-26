<?php include 'session.php';?>
<?php

//Checking if button is clicked or not...
if (isset($_POST['updateuser'])) {


//Getting data from Form...
    echo $name = $_POST['name'];
    echo $pass = $_POST['pass'];
    echo $eid = $_POST['id'];

//Connection stablishing...
    $con = mysqli_connect("localhost", "root", "", "nft") or die("Query Failed!!!");
    
//Update Query For Mysql...
        echo $query = "UPDATE `users` SET `name`='$name',`pass`='$pass' WHERE id = $eid";
        $res = mysqli_query($con, $query);

//Redirection to another page...
        header("Location: dashboard.php");

//Connection Close...
        mysqli_close($con);
   
}
