<?php include 'session.php';?>
<?php

//Checking if button is clicked or not...
if (isset($_POST['updateTest'])) {

	  $id = $_POST['test_Id'];
      $pId = $_POST['p_Name'];
      $bId = $_POST['b_Name'];
      $tId = $_POST['testing_type'];
      $uId = $_POST['u_Name'];
      $tDate = $_POST['testDate'];
      $res = $_POST['testRes'];
      $att = $_POST['testAtt'];
      $remarks = $_POST['remarks'];
     
    
       //Stablishing Connection...
       include 'connection.php';  
//Update Query For Mysql...
     $query = "UPDATE tests SET p_id_FK = '$pId' , b_id_FK = '$bId', testing_Id_FK = '$tId' , 	u_Id_FK = '$uId' , t_Date = '$tDate' , t_Result = '$res' , t_attempt = '$att' , Remarks = '$remarks' WHERE test_Id = $id";
    $res = mysqli_query($con, $query);

    //Redirection to another page...
    header("Location: http://localhost/LAB/Views/testing.php");

//Connection Close...
    mysqli_close($con);
}

?>