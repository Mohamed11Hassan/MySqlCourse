<?php

	$dns = 'mysql:host=localhost;dbname=products';
	$username = 'root';
	$password = '';
	$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

	try{
		$dbname = new PDO($dns, $username, $password, $options);

		echo "connectd";
	}

	catch(PDOException $error) {

		echo "faild{$error->getMessage()}";

	}	

?>