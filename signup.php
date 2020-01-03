<?php require 'header.php' ?>

<div class="container d-flex justify-content-center" style="margin-top: 20px;">
    <main>
        <h1>Sign Up</h1>
        <form action="includes/signup.inc.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="uid" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="mail" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="pwd" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="pwd-repeat" placeholder="Repeat Password">
            </div>
            <button type="submit" name="signup-submit" class="btn btn-dark">Sign Up</button>
        </form>
    </main>
</div>

<?php require 'footer.php' ?>