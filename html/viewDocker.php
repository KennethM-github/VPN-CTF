<?php
	/* Defines page title*/
	$pageTitle = 'View CTFs';
	/* Include header file to handle sessions and create nav bar efficently */
	include ('header.php');
	
	/* Checks if user is logged in*/
	if (isset($_SESSION['username'])) {
		$username = $_SESSION['username'];
	} else
		/* else statemnt so if user is not logged in they will be redirected to the login form to ensure admin functionality is secure*/
	{
		$_SESSION['redirect_url'] = $_SERVER['PHP_SELF'];
		header("Location: loginForm.php");
		die();
	
	}
	?>
<section>
	<h2>View all Docker Files</h2>
</section>
<?php
	try {
		/* get DB connection */
		require_once("functions.php");
		$dbConn = getConnection();
	/* select required fields from db tables */
		$sqlQuery = 'SELECT dockerID, dockerString, dockerNotes
					 FROM vpnctf_docker
					 ORDER BY dockerID';
		$queryResult = $dbConn->query($sqlQuery);
	/* Create table headings to eacho result*/
	    echo"
							   <table>
							  <tr>
							 	<th>ID</th>
							    <th>Docker Image</th>
							    <th>Description</th>
							    <th>Start</th>
							    <th>Stop</th>
							  </tr>
							  ";
	/* Echo query result for each field */
			while($rowObj = $queryResult->fetchObject()){
			echo " <tr class='records'>
					<td class='dockerID'>{$rowObj->dockerID}</td>
					   <td class='dockerString'> <a href='editDockerForm.php?dockerID={$rowObj->dockerID}'>{$rowObj->dockerString}</a></td>
                       <td class='dockerNotes'>{$rowObj->dockerNotes}</td>
                       <td class='dockerStart'><input class='button' type='submit' name='submit' value='Start'></td>
                       <td class='dockerStop'><input class='button' type='submit' name='submit' value='Stop'></td>
				  </tr>\n";
		}
		echo"<input class='button' type='submit' name='submit' value='Add'>\n";
	}
	/* Error handling*/
	catch (Exception $e){
		echo "<p>Query failed: ".$e->getMessage()."</p>\n";
	}
	?>