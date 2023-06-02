<?php include 'session.php';?>
<?php

//Checking if button is clicked or not...
if (isset($_POST['update'])) {


//Getting data from Form...
    $sub_heading = $_POST['type'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $eid = $_POST['id'];


    //Stablishing Connection...
    include 'connection.php';
//Update Query For Mysql...
    $query = "UPDATE `o_blessings` SET `type`='$sub_heading',`title`='$title',`content`='$content' WHERE id = $eid";
    $res = mysqli_query($con, $query);

//Redirection to another page...
    header("Location: blessing.php");

//Connection Close...
    mysqli_close($con);

}
