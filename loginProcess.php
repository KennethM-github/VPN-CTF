<?php
	/* establish session */
	ini_set("session.save_path", "/home/VPN-CTF/sessionData");
	session_start();
	?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>Login Failed</title>
	</head>
	<body>
		<?php
			/* validation */
			// trim() used to strip whitespace from the beginning and end of username and password fields
			// filter_has_var() used to check if variable of specified type exists
			// filter_var used to filter a variable with filter to sanitize input

			strlen($username); // return string legnth
			$username = filter_has_var(INPUT_POST, 'username') ? $_POST['username']: null;
			$username = trim($username);
			$username = filter_var($username, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES, FILTER_SANITIZE_SPECIAL_CHARS);
			$password = filter_has_var(INPUT_POST, 'password') ? $_POST['password']: null;
			$password = trim($password);
			$password = filter_var($password, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES, FILTER_SANITIZE_SPECIAL_CHARS);
	
			if (empty($username) || empty($password)) {
			    echo "<p>You need to provide a username and password. Please try <a href='loginForm.html'>again</a></p>\n";
			}
						else {
			    try {
			        // clear any session setting that might be left from a previous session
			        unset($_SESSION['username']);
			        unset($_SESSION['logged-in']);
			
			        require_once("functions.php");
			        $dbConn = getConnection();
			
			        $querySQL = "SELECT passwordHash FROM vpnctf_users WHERE username = :username";
			        $stmt = $dbConn->prepare($querySQL);
			        $stmt->execute(array(':username' => $username));
			        $user = $stmt->fetchObject();
			
			        //If there is a record returned
			        if ($user) {
			            if (password_verify($password, $user->passwordHash)) {
			                /*set a session variable called logged-in and give it the value true to indicate a sucessful login */
			                $_SESSION['logged-in'] = true;
			                /* Set a session variable called username and add the users username as its value*/
			                $_SESSION['username'] = $username;
			                header("Location: index.php");
			                die();
			            } else {
							/* echo error */
			                echo "<p>The username or password was incorrect. Please try <a href='loginForm.php'>again</a>.</p>\n";
			            }
			        } else {
						/* echo error */
			            echo "<p>The username or password was incorrect. Please try <a href='loginForm.php'>again</a>.</p>\n";
			        }
					/* error handling*/
			    }  catch (Exception $e) {
			        echo "Record not found: " . $e->getMessage();
			    }
			}
			?>
	</body>
</html>