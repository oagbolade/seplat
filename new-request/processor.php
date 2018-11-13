<?php
	//Get required files
	require_once '../db-config.php';

	//Turn off magic quotes
	Functions::magicQuotesOff();

	//Perform page action
	$DbHandle = new DBHandler($PDO, "requests", __FILE__);
	if(isset($_POST['submit'])){
		$company_name = $_POST['company_name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$category = $_POST['category'];
		$about = $_POST['about'];
		$logo = $_POST['company_logo'];
		$created_at = time();

		$data = [
			'company_name' => $company_name,
			'email' => $email,
			'phone' => $phone,
			'address' => $address,
			'category' => $category,
			'about' => $about,
			'logo' => $logo,
			'created_at' => $created_at
		];

		if ($DbHandle->createData(__Line__, $data)) {
			$_SESSION['response'] = "New request created successfully";
			header("Location: .");
		} else {
		    echo 'Failed to insert';
		}
	}

	//Generate response to be sent back
	//$_SESSION['response'] = "the response";
	//header("Location: .");
  exit();
