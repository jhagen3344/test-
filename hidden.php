<?php

//CHECK IF THE GET REQUEST IS EMPTY
if (empty($_GET['password'])){
	
	// IF EMPTY ECHO OUT NO PASSWORD
    echo 'No Password Detected';
	
//ELSE IF GET IS NOT EMPTY
}else{
	// SET VERIABLE $PASSWORD TO THE CONTENTS OF GET
	$Password = $_GET['password'];
	
	// IF THE VERIABLE PASSWORD = DEFAULT PASSWORD 
	if($password == '3263'){
		// ECHO OUT CORRECT AS PASSWORD MATCH
		echo 'correct';
	}else{
		// IF PASSWORDS DONT MATCH THEN ECHO OUT WRONG
		echo 'Wrong';
	}
	
}
?>
