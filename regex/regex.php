<?php ob_start() ?>

<div class="container justify-content-center align-items-center my-5 w-25">
    <form class="d-flex flex-column align-items-center bg-dark text-light rounded-4" action="account.php" method="POST">
        <label class="col-form-label mt-3" for="nombre">Login:</label>
        <div class="container d-flex flex-column justify-content-center">
            <input type="email" class="form-control w-100 col-4 text-center mb-2" placeholder="Email..." id="email" name="Email">
            <input type="password" class="form-control w-100 col-4 text-center mb-2" placeholder="password..." id="password" name="Password">
        </div>
        <input type="submit" class="my-2 bg-info text-light rounded-2 border-0 mb-3 w-25" name="Login" value="Login">
    </form>
</div>

<?php $content = ob_get_clean();
require "../template.php"; ?>