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
	
	$data = [
		'name'=>$_POST[''], 
		'sex'=>$_POST[''], 
		'dob'=>$_POST[''], 
		'phone'=>$_POST[''], 
		'nationality'=>$_POST[''], 
		'state_of_origin'=>$_POST[''], 
		'language'=>$_POST[''], 
		'experience'=>$_POST[''], 
		'next_of_kin'=>$_POST[''], 
		'referee'=>$_POST[''], 
		'signed'=>$_POST[''], 
		'passport'=>$_POST[''], 
		'date'=>'NOW()'
	];
	$DbHandle->updateData(__LINE__, $data, ['reference'=>$_POST['Reference']]);
