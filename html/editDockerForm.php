<?php
	/* Defines page title*/
	$pageTitle = 'Edit CTF Details';
	/* Include header file to handle sessions and create nav bar efficently */
	include ('header.php');
	/* Checks if user is logged in*/
	if (isset($_SESSION['username'])) {
		$username = $_SESSION['username'];
	} else
			/* else statemnt so if user is not logged in they will be redirected to the login form to ensure admin functionality is secure*/
	{
		header("Location: loginForm.php");
		die();
	}
	?>
<?php
	/* data validation */
	$dockerID = filter_has_var(INPUT_GET, 'dockerID') ? $_GET['dockerID'] : null;
	
	
	/* error handling */
	
	$errors = false;
	
	if (empty($dockerID)) {
		echo "<p>You need to have selected a id.</p>\n";
		$errors = true;
	}
	
	
	if ($errors === true) {
		echo "<p>Please try <a href='viewDocker.php'>again</a>.</p>\n";
	}
	else {
		try {
				/* establish DB connection */
			require_once("functions.php");
			$dbConn = getConnection();
		/* SQL query to get required fislds from DB tables*/
        $sqlQuery = "SELECT dockerID, dockerString, dockerNotes
        FROM vpnctf_docker
        WHERE dockerID = $dockerID";
			$queryResult = $dbConn->query($sqlQuery);
			$rowObj = $queryResult->fetchObject();

				/* echo record details */
			echo "
			<h1>Edit '{$rowObj->dockerString}'</h1>
			<form id='updateDocker' action='updateDocker.php' method='get'>
				<p>ID:<input type='text' name='dockerID' value='$dockerID' readonly /></p>
				<p>Docker file:<input type='text' name='dockerString' size='50' value='{$rowObj->dockerString}' /></p>
				<p>Notes:<input type='text' name='dockerNotes' value='{$rowObj->dockerNotes}' /></p>";
	
	      echo"
				<input class='button' type='submit' name='submit' value='Update'>
				<input class='button' type='reset' name='reset' value='Reset'>
				</form>
			";
	
		}
			/* Error handling*/
		catch (Exception $e){
			echo "<p>Record details not found: ".$e->getMessage()."</p>\n";
		}
	}
	
		/* include footer*/
	include ('footer.php');
	?>