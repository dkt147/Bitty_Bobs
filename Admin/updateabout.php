<?php include 'session.php';?>
<?php

//Checking if button is clicked or not...
if (isset($_POST['Update'])) {


//Getting data from Form...
    echo $d1 = $_POST['d1'];
    echo $d2 = $_POST['d2'];
    echo $d3 = $_POST['d3'];
    echo $eid = $_POST['id'];

       //Stablishing Connection...
       include 'connection.php';    
//Update Query For Mysql...
        echo $query = "UPDATE `about` SET `detail1`='$d1',`detail2`='$d2',`detail3`='$d3' WHERE id = $eid";
        $res = mysqli_query($con, $query);

        if($res){
//Redirection to another page...
header("Location: edit_about.php");
        }

//Connection Close...
        mysqli_close($con);
   
}
