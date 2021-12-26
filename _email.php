<?php

echo $con = mysqli_connect("localhost", "root", "", "nft") or die("Query Failed!!!");
//Checking if connection is stablishing....

       echo  $email = $_POST['email'];
        
        
//Checking if type field is empty...
        if (!empty($email)) {

    //Insert Query For Mysql...
        echo $query = "INSERT INTO `email`(`email`) VALUES ('{$email}')";
        $res = mysqli_query($con, $query);

    //Redirection To Another Page...
        header("Location: index.php");
        
    //Connection Close...
        mysqli_close($con);
    } else {
        Session_start();
        $_SESSION["error"] = "Error";
    }

?>