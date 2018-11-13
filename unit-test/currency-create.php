<?php
	require '../db-config.php';
	
	$DbHandle = new DBHandler($PDO, "tdollar_rate", __FILE__);
	$Currency = new Currencies($DbHandle);
	$data = ['currency'=>'rand', 'country'=>'South Africa', 'amount'=>300, 'date'=>'NOW()'];
	$naira = $Currency->createdCurrency(__LINE__, $data);
	var_dump($naira);
	