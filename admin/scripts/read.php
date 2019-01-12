<?php

function getAll($tbl){
	include('connect.php');
	//todo: fill the following variable with SQL query
	//so that it can fetch all columns
	//from the given table $tbl

	$queryAll = 'SELECT * FROM '.$tbl;

	$runAll = $pdo->query($queryAll);

	if($runAll){
		return $runAll;
	}else{
		$error = 'There was a problem accessing this info';
		return $error;
	}
}

