<?php
	/* Defines page title*/
			$pageTitle = 'CTF Details Updated';
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
<main>
	<section>
		<?php
			/* data validation */
			$dockerID = filter_has_var(INPUT_GET, 'dockerID') ? $_GET['dockerID'] : null;
			$dockerString = filter_has_var(INPUT_GET, 'dockerString') ? $_GET['dockerString'] : null;
			$dockerNotes = filter_has_var(INPUT_GET, 'dockerNotes') ? $_GET['dockerNotes'] : null;
			
			/* error handling */
			
			$errors = false;
			
			if (empty($dockerID)) {
				echo "<p>You need to have selected a id.</p>\n";
				$errors = true;
			}
			if (empty($dockerString)) {
				echo "<p>You need to choose a Docker string.</p>\n";
				$errors = true;
			}
			if (empty($dockerNotes)) {
				echo "<p>You need to choose notes</p>\n";
				$errors = true;
			}
			
			if ($errors === true) {
				echo "<p>Please try <a href='viewDocker.php'>again</a>.</p>\n";
			}
			else {
				/* establish db connection */
				try {
					require_once("functions.php");
					$dbConn = getConnection();
			/* SQL to update DB with user input */
					$updateSQL = "UPDATE vpnctf_docker SET dockerString='$dockerString', dockerNotes='$dockerNotes' WHERE dockerID=$dockerID";
					$dbConn->exec($updateSQL);
					echo "<p>Details sucessfully updated! Click <a href='viewDocker.php'>here</a> to return to the CTF page.</p>\n";
				} 
				/* error handling */
				catch (Exception $e) {
					 echo "<p>Record not updated: " . $e->getMessage() . "</p>\n";
				}
			}
			?>
	</section>
</main>
<?php
	/* include footer*/
	include ('footer.php');
	?>