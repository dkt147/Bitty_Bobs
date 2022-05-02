<?php include 'session.php';?>
<?php

//Checking if button is clicked or not...
if (isset($_POST['Update'])) {

include 'connection.php';
//Getting data from Form...
echo $name = $_POST['h1'];
echo $pass = $_POST['h2'];
echo $eid = $_POST['id'];

        $query1 = $con->prepare("UPDATE header SET h1=?, h2=? WHERE id = ?");
        $query1->bind_param('ssi',$name, $pass,$eid); 
        $query1->execute();
        $query1->close();
    
    
    header("Location: edit_header.php");
    
//Connection Close...
        mysqli_close($con);
   
}

?>