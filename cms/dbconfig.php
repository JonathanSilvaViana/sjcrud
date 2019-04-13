<?php

	$DB_HOST = 'localhost';
	$DB_USER = 'maxdesign3_ap';
	$DB_PASS = 'm4xd3s1gn';
	$DB_NAME = 'maxdesign3_priest';
	
	try{
		$DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
	
