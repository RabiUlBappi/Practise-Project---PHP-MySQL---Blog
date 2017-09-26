<?php 

	require 'functions.php';
	require 'db.php';

	$conn=Blog\DB\connect($config);
	if(!$conn) die('Problem connecting to the db.');
