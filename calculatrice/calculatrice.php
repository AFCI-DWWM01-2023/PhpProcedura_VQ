<?php ob_start() ?>

<div class="container justify-content-center align-items-center my-5 w-25">
    <form class="d-flex flex-column align-items-center bg-dark text-light rounded-4" action="calcul.php" method="POST">
        <div class="container d-flex justify-content-center">
            <label class="row-form-label mt-3 me-5" for="nombre1">Nombre 1:</label>
            <label class="row-form-label mt-3 ms-3" for="nombre2">Nombre 2:</label>
        </div>
        
        <div class="container d-flex justify-content-center">
            <input type="number" class="form-control w-75 row-4 text-center mb-2 me-2" placeholder="..." id="nombre1" name="Nombre1">
            <input type="number" class="form-control w-75 row-4 text-center mb-2 ms-2" placeholder="..." id="nombre2" name="Nombre2">

        </div>
        <div class="container d-flex justify-content-center" aria-labelledby="dropdownMenuButton">
            <input type="submit" class="row-3 mx-2 px-3 bg-success text-light rounded-2 border-0 mb-3" name="op" value="+">
            <input type="submit" class="row-3 mx-2 px-3 bg-success text-light rounded-2 border-0 mb-3" name="op" value="-">
            <input type="submit" class="row-3 mx-2 px-3 bg-success text-light rounded-2 border-0 mb-3" name="op" value="x">
            <input type="submit" class="row-3 mx-2 px-3 bg-success text-light rounded-2 border-0 mb-3" name="op" value="÷">
        </div> 
    </form>
</div>

<?php
$content = ob_get_clean();
require "../template.php";
?> 