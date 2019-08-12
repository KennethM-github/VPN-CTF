<?php
	function getConnection() {
	    try {
			/* include host/DB details */
	        $connection = new PDO("mysql:host=localhost;dbname=database_name",
	            "username", "password");
	        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        return $connection;
	    } catch (Exception $e) {
	        /* add logging errors to file */
	        throw new Exception("Connection error ". $e->getMessage(), 0, $e);
	    }
	}
	?>