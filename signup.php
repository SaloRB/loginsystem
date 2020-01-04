<?php require 'header.php' ?>

<div class="container d-flex justify-content-center" style="margin-top: 20px;">
    <main>
        <h1 class="text-center">Sign Up</h1>
        <?php
        if (isset($_GET['error'])) {
            if ($_GET['error'] == 'emptyfields') {
                echo '<p class="signuperror text-center">Fill in all fields!</p>';
            } else if ($_GET['error'] == 'invalidmailuid') {
                echo '<p class="signuperror text-center">Invalid username and email!</p>';
            } else if ($_GET['error'] == 'invaliduid') {
                echo '<p class="signuperror text-center">Invalid username!</p>';
            } else if ($_GET['error'] == 'invalidmail') {
                echo '<p class="signuperror text-center">Invalid email!</p>';
            } else if ($_GET['error'] == 'passwordcheck') {
                echo '<p class="signuperror text-center">Your passwords do not match!</p>';
            } else if ($_GET['error'] == 'usertaken') {
                echo '<p class="signuperror text-center">Username is already taken!</p>';
            }
        } elseif (isset($_GET['signup'])) {
            if ($_GET['signup'] == 'success') {
                echo '<p class="signupsuccess text-center">Signup successful!</p>';
            }
        }
        ?>
        <form action="includes/signup.inc.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control text-center" name="uid" placeholder="Username" value="<?php if (isset($_GET['uid'])) echo $_GET['uid']; ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control text-center" name="mail" placeholder="Email" value="<?php if (isset($_GET['mail'])) echo $_GET['mail']; ?>">
            </div>
            <div class="form-group">
                <input type="password" class="form-control text-center" name="pwd" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control text-center" name="pwd-repeat" placeholder="Repeat Password">
            </div>
            <div class="form-group text-center">
                <button type="submit" name="signup-submit" class="btn btn-dark">Sign Up</button>
            </div>
        </form>
    </main>
</div>

<?php require 'footer.php' ?>