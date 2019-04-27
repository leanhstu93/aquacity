<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database

	'connectionString' => 'mysql:host=localhost;dbname=mexitaco_main',
	'emulatePrepare' => true,
	'username' => 'mexitaco_main',
	'password' => 'Ta123123',
	'charset' => 'utf8',
	
);