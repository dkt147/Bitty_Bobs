<?php

//Checking if user is login or not...
if (isset($_SESSION['id'])) {
	
    header("Location: login.php");
}
else{
	
}

?>

