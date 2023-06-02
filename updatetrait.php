<?php include 'session.php';?>
<?php

//Checking if button is clicked or not...
if (isset($_POST['Update'])) {


//Getting data from Form...
    $s1 = $_POST['s1'];
    $t1 = $_POST['t1'];
    $t1_1 = $_POST['t1_1'];
    $t1_2 = $_POST['t1_2'];
    $t1_3 = $_POST['t1_3'];
    $t1_4 = $_POST['t1_4'];
    $t1_5 = $_POST['t1_5'];

    $t2 = $_POST['t2'];
    $t2_1 = $_POST['t2_1'];
    $t2_2 = $_POST['t2_2'];
    $t2_3 = $_POST['t2_3'];

    
    $t3 = $_POST['t3'];
    $c3 = $_POST['c3'];
    $t4 = $_POST['t4'];
    $c4 = $_POST['c4'];
    $t5 = $_POST['t5'];
    $c5 = $_POST['c5'];
    $t6 = $_POST['t6'];
    $c6 = $_POST['c6'];
    $t7 = $_POST['t7'];
    $c7 = $_POST['c7'];
    $t8 = $_POST['t8'];
    $c8 = $_POST['c8'];
    $t9 = $_POST['t9'];
    $c9 = $_POST['c9'];
    $t10 = $_POST['t10'];
    $c10 = $_POST['c10'];
    $t11 = $_POST['t11'];
    $c11 = $_POST['c11'];
    $t12 = $_POST['t12'];
    $c12 = $_POST['c12'];
    $t13 = $_POST['t13'];
    $c13 = $_POST['c13'];

    $eid = $_POST['id'];

       //Stablishing Connection...
       include 'connection.php';    
//Update Query For Mysql...
        $query = "UPDATE `traits` SET `s1`='$s1',`t1`='$t1',`t2`='$t2',`t1_1`='$t1_1',`t1_2`='$t1_2',`t1_3`='$t1_3',`t1_4`='$t1_4',`t1_5`='$t1_5',`t2_1`='$t2_1',`t2_2`='$t2_2',`t2_3`='$t2_3',`t3`='$t3',`c3`='$c3',`t4`='$t4',`c4`='$c4',`t5`='$t5',`c5`='$c5',`t6`='$t6',`c6`='$c6',`t7`='$t7',`c7`='$c7',`t8`='$t8',`c8`='$c8',`t9`='$t9',`c9`='$c9',`t10`='$t10',`c10`='$c10',`t11`='$t11',`c11`='$c11',`t12`='$t12',`c12`='$c12',`t13`='$t13',`c13`='$c13' WHERE id = $eid";
        $res = mysqli_query($con, $query);

        if($res){
//Redirection to another page...
header("Location: edit_trait.php");
        }

//Connection Close...
        mysqli_close($con);
   
}
