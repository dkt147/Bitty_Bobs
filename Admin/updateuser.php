<?php include 'session.php';?>
<?php

//Checking if button is clicked or not...
if (isset($_POST['updateuser'])) {


//Getting data from Form...
    echo $name = $_POST['name'];
    echo $pass = $_POST['pass'];
    echo $eid = $_POST['id'];

       //Stablishing Connection...
       include 'connection.php';    
//Update Query For Mysql...
        echo $query = "UPDATE `users` SET `name`='$name',`password`='$pass' WHERE id = $eid";
        $res = mysqli_query($con, $query);

//Redirection to another page...
        header("Location: dashboard.php");

//Connection Close...
        mysqli_close($con);
   
}
