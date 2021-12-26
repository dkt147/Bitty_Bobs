<?php

//Checking if user is login or not...
if (isset($_SESSION['id'])) {
	
    header("Location: http://localhost/LAB/Views/login.php");
}
else{
	
}

?>

