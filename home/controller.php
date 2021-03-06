<?php
	//Get required files
	require_once '../db-config.php';

	//Initialization
	$response = "";
	$constant = [
		'url' => URL, 'urlemail' => URLEMAIL, 'contactemail' => CONTACTEMAIL,
		'development' => DEVELOPMENT, 'directory' => ROOT.'error', 'sitename' => SITENAME];
	$pageName = "Vendor Requestor";

	//Lock up page
	$DbHandle = new DBHandler($PDO, "requests", __FILE__);
	$order = ['id' => 'DESC'];
	$queries = $DbHandle->iRetrieveData(__LINE__, $criteria=FALSE, $fields=FALSE, $order);
	$User = new Users($DbHandle);
	$userDetails = $User->userDetails($_SESSION['nimLogin']['email']);
	$Authenication = new Authentication($DbHandle);
	$Authenication->setConstants($constant);
	$Authenication->keyToPage();

	$_SESSION['token'] = md5(TOKEN);

	$Tag = new Tag(URL);
	$head = $Tag->createHead("Membership Application Portal | Home ", "nav-md home-page", ['css' => ['css/nprogress.css']]);

	$menu = $Tag->createSideBar($PDO, $userDetails['email'], ['parent'=>'Home', 'child'=>'']);
	$mastHead = $Tag->createMastHead($PDO);
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
			$response = $Tag->createAlert("", $content, 'danger', false);
		}
		else{
			$functions = new Functions();
			$ErrorAlerter = new ErrorAlert($_SESSION['spoofing'], $functions, $constant);
			$ErrorAlerter->sendAlerts();
			$response = $Tag->createAlert("System Error", "Ouch we are sorry something went wrong, we think your internet connection may be slow", 'danger', true);
			unset($_SESSION['spoofing']);
		}
		unset($_SESSION['dataError']);
	}

	//Response after data processing
	if(isset($_SESSION['response'])){
		$response = $Tag->createAlert("", $_SESSION['response'], 'success', false);
		unset($_SESSION['response']);
	}
