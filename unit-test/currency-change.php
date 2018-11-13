<?php
	require '../db-config.php';
	
	$DbHandle = new DBHandler($PDO, "tdollar_rate", __FILE__);
	$Currency = new Currencies($DbHandle);
	$data = ['currency'=>'rand', 'country'=>'South Africa'];
	var_dump($Currency->modifyCountryCurrency(__LINE__, $data, 'South'));