<?php

    //Stablishing Connection...
        include 'connection.php';
    

        //Getting values from a form...
        $name1= $_POST['name1'];
        $role1 = $_POST['role1'];
        $description1 = $_POST['description1'];
        $name2= $_POST['name2'];
        $role2 = $_POST['role2'];
        $description2 = $_POST['description2'];

        $name3= $_POST['name3'];
        $role3 = $_POST['role3'];
        $description3 = $_POST['description3'];
        $name4= $_POST['name4'];
        $role4 = $_POST['role4'];
        $description4 = $_POST['description4'];


        $name5= $_POST['name5'];
        $role5 = $_POST['role5'];
        $description5 = $_POST['description5'];
        $name6= $_POST['name6'];
        $role6 = $_POST['role6'];
        $description6 = $_POST['description6'];


        $name7= $_POST['name7'];
        $role7 = $_POST['role7'];
        $description7 = $_POST['description7'];
        $name8= $_POST['name8'];
        $role8 = $_POST['role8'];
        $description8 = $_POST['description8'];

        $eid = $_POST['id'];

$query1 = $con->prepare("UPDATE `my_team` SET `name1`=?,`name2`=?,`name3`=?,`name4`=?,`name5`=?,`name6`=?,`name7`=?,`name8`=?,`role1`=?,`role2`=?,`role3`=?,`role4`=?,`role5`=?,`role6`=?,`role7`=?,`role8`=?,`description1`=?,`description2`=?,`description3`=?,`description4`=?,`description5`=?,`description6`=?,`description7`=?,`description8`=? WHERE id = ?");
$query1->bind_param('ssssssssssssssssssssssssi',$name1,$name2,$name3,$name4,$name5,$name6,$name7,$name8,$role1,$role2,$role3,$role4,$role5,$role6,$role7,$role8,$description1,$description2,$description3,$description4,$description5,$description6,$description7,$description8,$eid);
$query1->execute();
$query1->close();

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
    echo $query = "UPDATE `my_team` SET `image1`='$target_file' WHERE id = $eid";
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
                $query = "UPDATE `my_team` SET `image2`='$target_file' WHERE id = $eid";
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
                            $query = "UPDATE `my_team` SET `image3`='$target_file' WHERE id = $eid";
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
                                        $query = "UPDATE `my_team` SET `image4`='$target_file' WHERE id = $eid";
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
                                                    $query = "UPDATE `my_team` SET `image5`='$target_file' WHERE id = $eid";
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
                                                                $query = "UPDATE `my_team` SET `image6`='$target_file' WHERE id = $eid";
                                                                $res = mysqli_query($con, $query);
                                                            };
                                                            
                                                            }





//Getting Image Path...
$target_dir = "";
$upload_folder = "uploads/";

$temp = $_FILES['myFile7']['tmp_name'];

$target_file = $target_dir . basename($_FILES["myFile7"]["name"]);

//Moving into a folder...
//move_uploaded_file($temp, "" . $target_file);

$file_location = $upload_folder . basename($_FILES["myFile7"]["name"]);

if(isset($_FILES['myFile7'])){

    if(move_uploaded_file($_FILES['myFile7']['tmp_name'], $file_location)){

        echo 'Files has uploaded';
        echo $query = "UPDATE `my_team` SET `image7`='$target_file' WHERE id = $eid";
        $res = mysqli_query($con, $query);

    };

}



//Getting Image Path...
$target_dir = "";
$upload_folder = "uploads/";

$temp = $_FILES['myFile8']['tmp_name'];

$target_file = $target_dir . basename($_FILES["myFile8"]["name"]);

//Moving into a folder...
//move_uploaded_file($temp, "" . $target_file);

$file_location = $upload_folder . basename($_FILES["myFile8"]["name"]);

if(isset($_FILES['myFile8'])){

    if(move_uploaded_file($_FILES['myFile8']['tmp_name'], $file_location)){

        echo 'Files has uploaded';
        echo $query = "UPDATE `my_team` SET `image8`='$target_file' WHERE id = $eid";
        $res = mysqli_query($con, $query);

    };

}


//Resdirection To Another Page...
            header("Location: edit_myteam.php");

//           header("Location: edit_myteam.php");

    ?>