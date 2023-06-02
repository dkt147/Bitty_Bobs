<?php include 'session.php';?>
<?php

//Checking if button is clicked or not...
if (isset($_POST['update'])) {


//Getting data from Form...

    $date = $_POST['day'];
    $dayNumber = date('z', strtotime($date));
    $day = $dayNumber + 1;
    $main_heading = $_POST['main_heading'];
    $sub_heading = $_POST['sub_heading'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $eid = $_POST['id'];


       //Stablishing Connection...
       include 'connection.php';     
//Update Query For Mysql...
        $query = "UPDATE `o_daily_data` SET `main_heading`='$main_heading',`sub_heading`='$sub_heading',`title`='$title',`content`='$content',`day`='$day',`date`='$date' WHERE id = $eid";
        $res = mysqli_query($con, $query);

//Redirection to another page...
        header("Location: daily_data.php");

//Connection Close...
        mysqli_close($con);
   
}
