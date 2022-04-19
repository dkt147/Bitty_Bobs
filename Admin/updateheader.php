<?php include 'session.php';?>
<?php

//Checking if button is clicked or not...
if (isset($_POST['Update'])) {


//Getting data from Form...
    echo $name = $_POST['h1'];
    echo $pass = $_POST['h2'];
    echo $eid = $_POST['id'];

       //Stablishing Connection...
       include 'connection.php';    
//Update Query For Mysql...
        echo $query = "UPDATE `header` SET `h1`='$name',`h2`='$pass' WHERE id = $eid";
        $res = mysqli_query($con, $query);

        if($res){
//Redirection to another page...
header("Location: edit_header.php");
        }

//Connection Close...
        mysqli_close($con);
   
}
