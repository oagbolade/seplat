<?php
	require '../db-config.php';
	
	$DbHandle = new DBHandler($PDO, "student", __FILE__);
	$UserTest = new Users($DbHandle, __FILE__);
	$UserTest->setSalt(SALT);
	$Functions = new Functions();
	$parameter =['url'=>URL, 'urlemail'=>URLEMAIL, 'sitename'=>SITENAME, 'contactemail'=>CONTACTEMAIL, 'development'=>DEVELOPMENT];
	$UserTest->setEmailParameter($parameter);
	$data=[
		'email' => 'benedict@alabiansolutions.com', 
		'password' => 'benedict1',
		'name' => 'Uwazie Benedict', 
		'gender' => 'male',
	];
	if($response = $UserTest->createUser($Functions, $data, __LINE__)){
		echo $response;
	}
	else {
		echo "Could not create user";
	}
	
	
	
