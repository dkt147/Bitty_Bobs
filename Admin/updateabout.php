<?php include 'session.php';?>
<?php

//Checking if button is clicked or not...
if (isset($_POST['Update'])) {

include 'connection.php';
//Getting data from Form...
    $d1 = $_POST['d1'];
    $d2 = $_POST['d2'];
    $d3 = $_POST['d3'];
    $eid = $_POST['id'];

    $query1 = $con->prepare("UPDATE about SET detail1=?, detail2=?,detail3=? WHERE id = ?");
        $query1->bind_param('sssi',$d1, $d2,$d3,$eid); 
        $query1->execute();
        $query1->close();
    
    
    header("Location: edit_about.php");

//Connection Close...
        mysqli_close($con);
   
}

?>