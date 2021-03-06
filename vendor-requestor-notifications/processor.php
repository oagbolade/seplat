<?php
	//Get required files
	require_once '../db-config.php';

	//Turn off magic quotes
	Functions::magicQuotesOff();

	//Perform page action
	$DbHandle = new DBHandler($PDO, "requests", __FILE__);
	$where = [
		'status' => 'more_info'
	];

	$order = ['id' => 'DESC'];

	$queries = $DbHandle->iRetrieveData(__LINE__, $where, $fields=FALSE, $order);
