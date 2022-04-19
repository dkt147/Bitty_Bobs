<?php include 'session.php';?>
<?php

//Checking if button is clicked or not...
if (isset($_POST['Update'])) {


//Getting data from Form...
    echo $name = $_POST['detail'];
    echo $eid = $_POST['id'];

       //Stablishing Connection...
       include 'connection.php';    
//Update Query For Mysql...
        echo $query = "UPDATE `team` SET `detail`='$name' WHERE id = $eid";
        $res = mysqli_query($con, $query);

        if($res){
//Redirection to another page...
header("Location: edit_team.php");
        }

//Connection Close...
        mysqli_close($con);
   
}
