<?php
    /* establish session data*/
    $page = basename($_SERVER['PHP_SELF']);
    ini_set("session.save_path", "/VPN-CTF/sessionData");
    session_start();
    /* check user is logged in*/
    if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    }
    ?>
<!-- Defines doctype as html for web browser to interpret !-->
<!doctype html>
<!-- Defines language as English !-->
<html lang="en">
    <!-- Start of Head !-->
    <head>
        <!-- Defines charset !-->
        <meta charset="UTF-8" />
        <!-- Defines viewport to ensure fluid design !-->
        <meta name ="viewport" content="width=device-width, maximum-scale=1.0" />
        <!-- Defines author !-->
        <meta name="author" content="Kenneth McGarry and Joshua Turner" />
        <!-- Links to CSS stylesheet !-->
        <link href="style.css" rel="stylesheet" type="text/css" />
        <!-- Links to CSS overide stylesheet !-->
        <link href="style1.css" rel="stylesheet" type="text/css" />
        <!-- Defines page title dynamically with PHP !-->
        <title><?php echo" $pageTitle" ; ?></title>
        <!-- End of head !-->
    </head>
    <!-- Start of body !-->
    <body>
        <!-- Start of header !-->
        <header>
            <!-- Top header, includes page title !-->
            <div class="top-header">
                <!-- Heading 1, occurs only once in document !-->
                <h1>VPN-CTF</h1>
            </div>
            <!-- Start of nav !-->
            <nav>
                <!-- Unordered list !-->
                <ul>
                    <!-- Navigation link !-->
                    <li class="<?php if($page == 'index.php'){ echo ' active';}?>"><a href="index.php" tabindex="1">Home</a> </li>
                    <!-- Navigation link !-->
                    <li class="<?php if($page == 'viewDocker.php'){ echo ' active';}?>"><a href="viewDocker.php" tabindex="2">CTFs</a> </li>
                    <!-- Navigation link !-->
                    <li class="<?php if($page == 'documentation.php'){ echo ' active';}?>"><a href="documentation.php" tabindex="3">Documentation</a> </li>
                    <?php if (isset($_SESSION["username"]))
                        {
                        echo' <li class=""><a href="logout.php" tabindex="4">';echo "<p>$username (Logout)</p>";echo'</a></li>';
                        }
                        else {
                            echo' <li class=""><a href="loginForm.php" tabindex="5">';echo "<p>Login</p>";echo'</a></li>';
                        }?>
                </ul>
                <!-- End of nav !-->
            </nav>
            <!-- End of header !-->
        </header>