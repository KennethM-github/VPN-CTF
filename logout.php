<?php
    /* session handling */
    ini_set("session.save_path", "/VPN-CTF/sessionData");
    session_start();
    
    $_SESSION = array();
    
    /* destroy the users session in order to logout*/
    session_destroy();
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
    } else
    {
        /* redirect user to login form*/
        header("Location: loginForm.php");
        die();
    }
    /* notify user that they have now logged out*/
    echo"<p>You are now logged out.</p>";
    ?>