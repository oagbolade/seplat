<?php
	//Get required files
	require_once 'db-config.php'; 
	
	//Turn off magic quotes
	Functions::magicQuotesOff();
	
	//Get validator to validate data sent to this script
	$FormValidator = new Validator();
	
	//Prepare form data for Validator
	$data[] = ['validationString' => 'email', 'dataName' => 'email', 'dataValue' => $_POST['loginEmail']];
	$data[] = ['validationString' => 'non empty', 'dataName' => 'password', 'dataValue' => $_POST['loginPassword']];
	
	//Validate sent data
	$validationResult = $FormValidator->formValidation($data);
	if($validationResult['error']){
		$_SESSION['dataError'] = ['form' => 'login', 'message' => ['Login failed']];
  	header("Location: ".URL);
  	exit();
	}
	
	$DbHandle = new DBHandler($PDO, "login", __FILE__);
	$Authenicator = new Authentication($DbHandle);
	$constant = ['salt' => SALT,' url' => URL, 'urlemail' => URLEMAIL, 'contactemail' => CONTACTEMAIL, 'development' => DEVELOPMENT];
	$Authenicator->setConstants($constant);
	if($Authenicator->loginUser($validationResult['data']['email'], $validationResult['data']['password'])){
		$User = new Users($DbHandle);
		$userDetails = $User->userDetails($validationResult['data']['email']);
		if($userDetails['default_password'] == 'yes'){
			$_SESSION['nimLogin'] = [];
			header("Location: ".URL."password-change/?email=". urlencode($userDetails['email']) ."&token=". urlencode($userDetails['token']));
		}
		else {
			header("Location: home");				
		}
	}
	else {
		$_SESSION['dataError'] = ['form' => 'login', 'message' => ['Login failed']];
		header("Location: ".URL);
	}
  exit();