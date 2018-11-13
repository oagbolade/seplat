<?php
	require '../db-config.php';
	
	$DbHandle = new DBHandler($PDO, "tdollar_rate", __FILE__);
	$Currency = new Currencies($DbHandle);
	var_dump($Currency->getCurrenciesInfo(__LINE__));
	
	var_dump($Currency->getCurrencyInfo(__LINE__, 'Nigeria'));
	
	var_dump($Currency->getCurrencyInfo(__LINE__, 'Gabon'));