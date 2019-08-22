<?php
    /* Defines page title*/
    $pageTitle = 'Login Form';
    /* Include header file to handle sessions and create nav bar efficently */
    include ('header.php');
    ?>
<div class="section-form">
    <!-- Heading 2 !-->
    <h2>Login Form</h2>
    <p>Please complete the fields below and click 'Submit' in order to login. Required fields and marked with an asterix (<span class="asterix">*</span>).</p>
    <!-- Start of Form !-->
    <form id="Login" method="post" action="loginProcess.php">
        <!-- Fieldset to contain relevent fields !-->
        <fieldset>
            <legend>Login:</legend>
            <!-- Input fields - Makes use of validation e.g. maxlength and required fields for validation and also tabindex and access keys to ensure usibility!-->
            <div><label>Username:</label><span class="asterix">*</span> <input type="text" maxlength="20" tabindex="1" accesskey="t" name="username" required></div>
            <div><label>Password:</label><span class="asterix">*</span> <input type="password" maxlength="20" tabindex="2" accesskey="d" name="password" required></div>
            <div>
                <!-- Form submit and clear buttons !-->
                <input class="button" type="submit" tabindex="3" value="Submit" />
                <input class="button" type="reset" tabindex="4" value="Reset">
            </div>
        </fieldset>
        <!-- End of form !-->
    </form>
</div>
<?php
    include ('footer.php');
    ?>