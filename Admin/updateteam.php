<?php include 'session.php';?>
<?php

//Checking if button is clicked or not...
if (isset($_POST['Update'])) {


//Getting data from Form...
     $name = $_POST['detail'];
     $eid = $_POST['id'];

       //Stablishing Connection...
       include 'connection.php';    
//Update Query For Mysql...
         $query = "UPDATE `team` SET `detail`='$name' WHERE id = $eid";
        $res = mysqli_query($con, $query);


    //Getting Image Path...
    $target_dir = "";
    $upload_folder = "uploads/";

    $temp = $_FILES['file']['tmp_name'];

    $target_file = $target_dir . basename($_FILES["file"]["name"]);

//Moving into a folder...
//move_uploaded_file($temp, "" . $target_file);

    $file_location = $upload_folder . basename($_FILES["file"]["name"]);

    if(isset($_FILES['file'])){

        if(move_uploaded_file($_FILES['file']['tmp_name'], $file_location)){

            echo 'Files has uploaded';
            echo $query = "UPDATE `team` SET `image`='$target_file' WHERE id = $eid";
            $res = mysqli_query($con, $query);

        };

    }

    if($res){
//Redirection to another page...
header("Location: edit_team.php");
        }

//Connection Close...
        mysqli_close($con);
   
}
