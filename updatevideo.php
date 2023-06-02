<?php include 'session.php';?>
<?php

//Checking if button is clicked or not...
if (isset($_POST['update'])) {


//Getting data from Form...
    $main_heading = $_POST['main_heading'];
    $sub_heading = $_POST['sub_heading'];
    $content = $_POST['content'];
    $eid = $_POST['id'];


    //Stablishing Connection...
    include 'connection.php';
//Update Query For Mysql...
    $query = "UPDATE `o_exercise` SET `main_heading`='$main_heading',`sub_heading`='$sub_heading',`content`='$content' WHERE id = $eid";
    $res = mysqli_query($con, $query);

//Redirection to another page...
    header("Location: exercise.php");

//Connection Close...
    mysqli_close($con);

}
