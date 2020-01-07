<?php require 'header.php' ?>

<div class="container d-flex justify-content-center" style="margin-top: 20px;">
    <main>

        <?php

        $selector = $_GET["selector"];
        $validator = $_GET["validator"];

        if (empty($selector) || empty($validator)) {
            echo "Could not validate your request!";
        } else {
            if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
        ?>

                <form action="includes/reset-password.inc.php" method="post">
                    <input type="hidden" name="selector" value="<?php echo $selector ?>">
                    <input type="hidden" name="validator" value="<?php echo $validator ?>">
                    <div class="form-group">
                        <input type="password" name="pwd" class="form-control" placeholder="Enter a new password...">
                    </div>
                    <div class="form-group">
                        <input type="password" name="pwd-repeat" class="form-control" placeholder="Repeat your new password...">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="reset-password-submit" class="btn btn-dark btn-block">Reset Password</button>
                    </div>
                </form>
        <?php
            }
        }

        ?>

    </main>
</div>

<?php require 'footer.php' ?>