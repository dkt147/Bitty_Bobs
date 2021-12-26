<?php include 'session.php';?>
<?php

    //Stablishing Connection..
        $conn = mysqli_connect("localhost", "root", "", "lab_automation") or die("Query Failed!!!");
    
    //Checking if button is clicked or not...
        if (isset($_POST['createproduct'])) {

    //Getting Image Path...
            $target_dir = "";
        echo $temp = $_FILES['myFile']['tmp_name'];

        echo $target_file = $target_dir . basename($_FILES["myFile"]["name"]);
       echo "<br>";
    //Moving into a folder...
        move_uploaded_file($temp, "" . $target_file);
    //Getting values from a form...
        echo $name = $_POST['p_name'];
        echo $detail = $_POST['p_detail'];
        echo $category = $_POST['p_category'];
        echo $batch = $_POST['p_batch'];

         




    //Insert Query for Mysql...
        echo $sql = "INSERT INTO `products`(`c_Id_FK`, `p_Name`, `p_Image`, `p_Details`) VALUES ('$category','$name','$target_file','$detail')";
        

        echo $res = mysqli_query($conn, $sql);

    //Resdirection To Another Page...
        if ($res == TRUE) {
            session_start();
            $_SESSION['msg'] = "Added Successfully";
            header("Location: http://localhost/LAB/Views/product.php");
        } else {

            header("Location: http://localhost/LAB/Views/createproduct.php");
        }
    }
    ?>