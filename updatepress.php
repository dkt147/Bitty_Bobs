<?php

    //Stablishing Connection...
        include 'connection.php';
    

        //Getting values from a form...
        $link1 = $_POST['link1'];
        $link2 = $_POST['link2'];
        $link3 = $_POST['link3'];
        $link4 = $_POST['link4'];
        $link5 = $_POST['link5'];
        $link6 = $_POST['link6'];
        $eid = $_POST['id'];




    //Insert Query for Mysql...
    $query = "UPDATE `press` SET `link1`='$link1',`link2`='$link2',`link3`='$link3',`link4`='$link4',`link5`='$link5',`link6`='$link6' WHERE id = $eid";
       $res = mysqli_query($con, $query);


    //Checking if button is clicked or not...

    //Getting Image Path...
    $target_dir = "";
    $upload_folder = "uploads/";

    $temp = $_FILES['myFile1']['tmp_name'];

    $target_file = $target_dir . basename($_FILES["myFile1"]["name"]);

//Moving into a folder...
//move_uploaded_file($temp, "" . $target_file);

$file_location = $upload_folder . basename($_FILES["myFile1"]["name"]);

if(isset($_FILES['myFile1'])){ 

if(move_uploaded_file($_FILES['myFile1']['tmp_name'], $file_location)){
    
    echo 'Files has uploaded'; 
    echo $query = "UPDATE `press` SET `image1`='$target_file' WHERE id = $eid";
    $res = mysqli_query($con, $query);

};

} 




                //Getting Image Path...
                $target_dir = "";
                $upload_folder = "uploads/";
            
                $temp = $_FILES['myFile2']['tmp_name'];
            
                $target_file = $target_dir . basename($_FILES["myFile2"]["name"]);
            
            //Moving into a folder...
            //move_uploaded_file($temp, "" . $target_file);
            
            $file_location = $upload_folder . basename($_FILES["myFile2"]["name"]);
            
            if(isset($_FILES['myFile2'])){ 
            
            if(move_uploaded_file($_FILES['myFile2']['tmp_name'], $file_location)){
                
                echo 'Files has uploaded'; 
                $query = "UPDATE `press` SET `image2`='$target_file' WHERE id = $eid";
                $res = mysqli_query($con, $query);
            };
            
            } 



                            //Getting Image Path...
                            $target_dir = "";
                            $upload_folder = "uploads/";
                        
                            $temp = $_FILES['myFile3']['tmp_name'];
                        
                            $target_file = $target_dir . basename($_FILES["myFile3"]["name"]);
                        
                        //Moving into a folder...
                        //move_uploaded_file($temp, "" . $target_file);
                        
                        $file_location = $upload_folder . basename($_FILES["myFile3"]["name"]);
                        
                        if(isset($_FILES['myFile3'])){ 
                        
                        if(move_uploaded_file($_FILES['myFile3']['tmp_name'], $file_location)){
                            
                            echo 'Files has uploaded'; 
                            $query = "UPDATE `press` SET `image3`='$target_file' WHERE id = $eid";
                            $res = mysqli_query($con, $query);
                        };
                        
                        } 




                                        //Getting Image Path...
                                        $target_dir = "";
                                        $upload_folder = "uploads/";
                                    
                                        $temp = $_FILES['myFile4']['tmp_name'];
                                    
                                        $target_file = $target_dir . basename($_FILES["myFile4"]["name"]);
                                    
                                    //Moving into a folder...
                                    //move_uploaded_file($temp, "" . $target_file);
                                    
                                    $file_location = $upload_folder . basename($_FILES["myFile4"]["name"]);
                                    
                                    if(isset($_FILES['myFile4'])){ 
                                    
                                    if(move_uploaded_file($_FILES['myFile4']['tmp_name'], $file_location)){
                                        
                                        echo 'Files has uploaded'; 
                                        $query = "UPDATE `press` SET `image4`='$target_file' WHERE id = $eid";
                                        $res = mysqli_query($con, $query);
                                    };
                                    
                                    } 



                                                    //Getting Image Path...
                                                    $target_dir = "";
                                                    $upload_folder = "uploads/";
                                                
                                                    $temp = $_FILES['myFile5']['tmp_name'];
                                                
                                                    $target_file = $target_dir . basename($_FILES["myFile5"]["name"]);
                                                
                                                //Moving into a folder...
                                                //move_uploaded_file($temp, "" . $target_file);
                                                
                                                $file_location = $upload_folder . basename($_FILES["myFile5"]["name"]);
                                                
                                                if(isset($_FILES['myFile5'])){ 
                                                
                                                if(move_uploaded_file($_FILES['myFile5']['tmp_name'], $file_location)){
                                                    
                                                    echo 'Files has uploaded'; 
                                                    $query = "UPDATE `press` SET `image5`='$target_file' WHERE id = $eid";
                                                    $res = mysqli_query($con, $query);
                                                };
                                                
                                                } 




                                                                //Getting Image Path...
                                                                $target_dir = "";
                                                                $upload_folder = "uploads/";
                                                            
                                                                $temp = $_FILES['myFile6']['tmp_name'];
                                                            
                                                                $target_file = $target_dir . basename($_FILES["myFile6"]["name"]);
                                                            
                                                            //Moving into a folder...
                                                            //move_uploaded_file($temp, "" . $target_file);
                                                            
                                                            $file_location = $upload_folder . basename($_FILES["myFile6"]["name"]);
                                                            
                                                            if(isset($_FILES['myFile6'])){ 
                                                            
                                                            if(move_uploaded_file($_FILES['myFile6']['tmp_name'], $file_location)){
                                                                
                                                                echo 'Files has uploaded'; 
                                                                $query = "UPDATE `press` SET `image6`='$target_file' WHERE id = $eid";
                                                                $res = mysqli_query($con, $query);
                                                            };
                                                            
                                                            } 
    
    //Resdirection To Another Page...
        if ($res == TRUE) {
            header("Location: edit_press.php");
        } else {

           header("Location: edit_press.php");
        }

    ?>