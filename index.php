<?php require 'header.php' ?>

<div class="container d-flex justify-content-center" style="margin-top: 20px;">
    <main>
        <?php
        if (isset($_SESSION['userId'])) {
            echo '<p class="lead"><strong>You are logged in!</strong></p>';
        } else {
            echo '<p class="lead"><strong>You are logged out!</strong></p>';
        }
        ?>
    </main>
</div>

<?php require 'footer.php' ?>