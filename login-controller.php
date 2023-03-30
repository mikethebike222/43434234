<?php
include "includes/db.php";

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['age'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $age = $_POST['age'];
	
	if ($age < 18){
		echo "input age over 18";
		exit;
	}
	echo 'success';
	
    register($email, $password, $age, $username);

    $_SESSION['uid'] = true;

   
    exit();
}
?>
