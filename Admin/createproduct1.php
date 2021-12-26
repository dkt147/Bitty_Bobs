<?php include 'session.php';?>
<?php

    //Stablishing Connection..
        $conn = mysqli_connect("localhost", "root", "", "nft") or die("Query Failed!!!");
    
    //Checking if button is clicked or not...
        if (isset($_POST['createproduct'])) {

    //Getting Image Path...
            $target_dir = "";
        echo $temp = $_FILES['myFile']['tmp_name'];

        echo $target_file = $target_dir . basename($_FILES["myFile"]["name"]);

    //Moving into a folder...
        //move_uploaded_file($temp, "" . $target_file);

        $upload_folder = "uploads/";
$file_location = $upload_folder . basename($_FILES["myFile"]["name"]);

     if(isset($_FILES['myFile'])){ 

        if(move_uploaded_file($_FILES['myFile']['tmp_name'], $file_location)){
            
            echo 'Files has uploaded'; 
        };

     } 
    //Getting values from a form...
        echo $name = $_POST['name'];
        echo $detail = $_POST['detail'];
        echo $category = $_POST['catagory'];
        echo $artist = $_POST['artist'];
        echo $size = $_POST['size'];
        echo $created = $_POST['created'];
        echo $collection = $_POST['collection'];

         




    //Insert Query for Mysql...
        echo $sql = "INSERT INTO `product`(`c_id`, `name`, `image`, `detail`, `artist`, `size`, `created`, `collection`) VALUES ('$category','$name','$target_file','$detail','$artist','$size','$created','$collection')";
        

       echo $res = mysqli_query($conn, $sql);

    //Resdirection To Another Page...
        if ($res == TRUE) {
            session_start();
            $_SESSION['msg'] = "Added Successfully";
            header("Location: product.php");
        } else {

           header("Location: createproduct.php");
        }
    }
    ?>