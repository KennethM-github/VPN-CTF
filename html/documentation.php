<?php
    /* Defines page title*/
    $pageTitle = 'Documentation';
    /* Include header file to handle sessions and create nav bar efficently */
    include ('header.php');
        /* Checks if user is logged in*/
        
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
    }
    ?>
<main>
    <!-- Section !-->
    <section>
        <!-- Section top !-->
        <div class="section-top">
            <!-- Heading 2 !-->
            <h2>Documentation:</h2>
            <h3>Lorem ipsum</h3>
            <ul>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <li>Donec vestibulum consequat quam eget cursus.</li>
                <li>Class aptent taciti sociosqu ad litora torquent per conubia nostra</li>
            </ul>
            <h3>Lorem ipsum</h3>
            <ul>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vestibulum consequat quam eget cursus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean efficitur dapibus sem, eget facilisis ante rutrum id. Curabitur finibus tellus purus, sit amet sodales ex tempor vel. Aenean eu faucibus ligula, ut pulvinar leo. Quisque lacus tellus, interdum ac pharetra at, feugiat quis mi. Aenean hendrerit porta dui, id aliquam risus. Pellentesque non diam feugiat, dictum leo et, pharetra lorem. In sit amet nisl dolor. </p>
<p>Nullam aliquet lobortis sem suscipit scelerisque. Proin faucibus id erat in elementum. Aliquam tellus metus, accumsan ut laoreet nec, consequat sed metus. Ut iaculis, tortor ac euismod egestas, ligula eros suscipit augue, quis convallis ipsum diam sit amet erat. Etiam vehicula accumsan lorem ut egestas. Nulla ut consectetur est. Nulla viverra tempus libero ac facilisis. Nullam in libero vel magna mollis accumsan. Quisque vel ligula enim. Aliquam dolor arcu, lacinia in arcu id, porttitor tempor diam. Donec tincidunt sagittis felis eget facilisis. Nunc pellentesque tortor vel interdum pulvinar. Ut sit amet blandit sapien, eu fermentum massa. Integer varius mauris pretium sem facilisis sollicitudin. Fusce hendrerit libero a odio rutrum scelerisque. Integer in auctor massa. </p>
<p>Integer sem nunc, placerat eu ante sit amet, rhoncus cursus ante. Mauris ut bibendum diam. Fusce est lectus, cursus nec facilisis eu, finibus sed sem. Curabitur aliquet eu velit lacinia bibendum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae nisl et enim dignissim auctor. Curabitur vulputate fringilla tellus, sit amet elementum purus. Proin aliquet, orci volutpat accumsan sodales, erat dui feugiat tortor, nec pulvinar nibh urna at metus. </p>
        </div>
    </section>
    <!-- End of main !-->
</main>
<?php
    include ('footer.php');
    ?>