<?php include 'session.php';?>
<?php

//Checking if button is clicked or not...
if (isset($_POST['updateTest'])) {

	 echo $id = $_POST['test_Id'];
     echo $pId = $_POST['p_Name'];
     echo $bId = $_POST['b_Name'];
     echo $tId = $_POST['testing_type'];
     echo $uId = $_POST['u_Name'];
     echo $tDate = $_POST['testDate'];
     echo $res = $_POST['testRes'];
     echo $att = $_POST['testAtt'];
     echo $remarks = $_POST['remarks'];
     
    //Connection Stablishing...    
    $con = mysqli_connect("localhost", "root", "", "lab_automation") or die("Query Failed!!!");

//Update Query For Mysql...
    echo $query = "UPDATE tests SET p_id_FK = '$pId' , b_id_FK = '$bId', testing_Id_FK = '$tId' , 	u_Id_FK = '$uId' , t_Date = '$tDate' , t_Result = '$res' , t_attempt = '$att' , Remarks = '$remarks' WHERE test_Id = $id";
    $res = mysqli_query($con, $query);

    //Redirection to another page...
    header("Location: http://localhost/LAB/Views/testing.php");

//Connection Close...
    mysqli_close($con);
}

?>