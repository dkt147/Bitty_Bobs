<?php include 'session.php';?>
<?php

//Checking if button is clicked or not...
if (isset($_POST['Update'])) {


//Getting data from Form...
     $title = $_POST['title'];
     $r1 = $_POST['r1'];
     $r2 = $_POST['r2'];
     $r3 = $_POST['r3'];
     $r4 = $_POST['r4'];
     $r5 = $_POST['r5'];
     $r6 = $_POST['r6'];
     $r7 = $_POST['r7'];
     $eid = $_POST['id'];

       //Stablishing Connection...
       include 'connection.php';    
//Update Query For Mysql...
         $query = "UPDATE `roadmap` SET `title`='$title',`r1`='$r1',`r2`='$r2',`r3`='$r3',`r4`='$r4',`r5`='$r5',`r6`='$r6',`r7`='$r7' WHERE id = $eid";
        $res = mysqli_query($con, $query);

        if($res){
//Redirection to another page...
header("Location: edit_roadmap.php");
        }

//Connection Close...
        mysqli_close($con);
   
}
