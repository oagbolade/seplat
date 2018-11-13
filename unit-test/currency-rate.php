<?php
	require '../db-config.php';
	
	$DbHandle = new DBHandler($PDO, "tdollar_rate", __FILE__);
	$Currency = new Currencies($DbHandle);
	var_dump($Currency->exchangeRate(__LINE__, 200, 'naira'));