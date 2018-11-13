<?php
	//Get required files
	require_once '../db-config.php';

	//Initialization
	$response = "";
	$pageName = "Pending Requests";

	//Lock up page
	$DbHandle = new DBHandler($PDO, "login", __FILE__);
	$User = new Users($DbHandle);
	$Authentication = new Authentication($DbHandle);
	//$Authentication->setConstants($constant);
	$Authentication->keyToPage();
	$userDetails = $User->userDetails($_SESSION['nimLogin']['email']);
	$Authentication->pageAccessor(Functions::userType(), $userDetails['user_type']);

	$_SESSION['token'] = md5(TOKEN);

	$Tag = new Tag(URL);
	$head = $Tag->createHead("Membership Application Portal | Pending Requests ", "nav-md home-page", ['css' => ['css/nprogress.css']]);

	$menu = $Tag->createSideBar($PDO, $userDetails['email'], ['parent'=>'Page', 'child'=>'']);
	$mastHead = $Tag->createMastHead($PDO, $userDetails['email']);
	$slogan = $Tag->createFooterSlogan();
	$footer = $Tag->createFooter(['js/custom.js']);

	//Error in data sent for processing
	if(isset($_SESSION['dataError'])){
		if(!isset($_SESSION['spoofing'])){
			$content = "<ul>";
			foreach ($_SESSION['dataError'] as $aMessage) {
				$content .= "<li class='text-left'>$aMessage</li>";
			}
			$content .= "</ul>";
			$response = $Tag->createAlert("", $content, 'danger', true);
		}
		else{
			$functions = new Functions();
			$ErrorAlerter = new ErrorAlert($_SESSION['spoofing'], $functions);
			$ErrorAlerter->sendAlerts();
			$response = $Tag->createAlert("System Error", "Ouch we are sorry something went wrong, we think your internet connection may be slow", 'danger', true);
			unset($_SESSION['spoofing']);
		}
		unset($_SESSION['dataError']);
	}

	//Response after data processing
	if(isset($_SESSION['response'])){
		$response = $Tag->createAlert("", $_SESSION['response'], 'success', true);
		unset($_SESSION['response']);
	}
