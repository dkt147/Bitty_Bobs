<?php

echo $con = mysqli_connect("localhost", "root", "", "nft") or die("Query Failed!!!");
//Checking if connection is stablishing....

       echo  $name = $_POST['name']; 
       echo  $email = $_POST['email'];
       echo  $message = $_POST['message'];
        
        
//Checking if type field is empty...
        if (!empty($email)  && !empty($name)  && !empty($message)) {

    //Insert Query For Mysql...
        echo $query = "INSERT INTO `contact`(`name`,`email`,`message`) VALUES ('{$name}','{$email}','{$message}')";
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