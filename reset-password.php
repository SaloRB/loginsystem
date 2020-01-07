<?php require 'header.php' ?>

<div class="container d-flex justify-content-center" style="margin-top: 20px;">
    <main>
        <h1 class="text-center">Reset your password</h1>
        <p>An e-mail will be sent to you with instructions on how to reset your password.</p>

        <form action="includes/reset-request.inc.php" method="post">
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Enter your e-mail address...">
            </div>
            <div class="form-group">
                <button type="submit" name="reset-request-submit" class="btn btn-dark btn-block">Receive new password by e-mail</button>
            </div>
        </form>

        <?php
        if (isset($_GET["reset"])) {
            if ($_GET["reset"] == "success") {
                echo '<p class="signupsuccess text-center">Check your e-mail!</p>';
            }
        }
        ?>

    </main>
</div>

<?php require 'footer.php' ?>