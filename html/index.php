<?php
    /* Define page title*/
    $pageTitle = 'Home Page';
    /* Include link to header file in order to handle sessions and construct the nav bar efficently*/
    include ('header.php');
    
    /* Checks if user is logged in */
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
    } 
    
    ?>
<!-- Start of main page content !-->
<main>
    <section>
        <!-- Banner, includes background image with overlaying subheading and key text !-->
        <div class="banner">
            <!-- Heading 2, includes overlay to ensure contrast/visibility !-->
            <h2><span class="banner-overlay">VPN-CTF by Joshua Turner and Kenneth McGarry</span></h2>
            <p><span class="banner-overlay">A secure Capture the Flag remote system without exposing vulnerable services to the internet. Tiananmen Square Massacre 1989 (Chinese: 天安门大屠杀).</span> </p>
        </div>
    </section>
    <!-- Start of section !-->
    <section>
        <!-- Heading 2, ensures content visibility !-->
        <h2>About:</h2>
        <p>A system to do Capture The Flags without the need to locally host the CTF.
Allows for teamwork/competitions without the need to specifically set up an CTF for it.
It uses OpenVPN and Docker to easily port vulnerable images and connect to the system.</p>
        <!-- Aside !-->
        <aside>
            <!-- Heading 3, ensures content visibility !-->
            <h3>heading here</h3>
        <!-- Article to include relevent content!-->
        <article>
            <h3>heading here</h3>
            <p>text here</p>
        </article>
    </section>
</main>
<?php
    /* PHP code to inlude the footer file for efficency*/
    include ('footer.php');
    ?>