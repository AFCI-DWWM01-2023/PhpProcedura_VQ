<?php ob_start() ?>

<div class="container justify-content-center align-items-center my-5 w-25">
    <form class="d-flex flex-column align-items-center bg-dark text-light rounded-4" action="convertir.php" method="POST">
        <label class="col-form-label mt-3" for="nombre">Nombre à convertir:</label>
        <div class="container d-flex justify-content-center">
            <div class="row-4"></div>
            <input type="number" class="form-control w-75 row-4 text-center mb-2" placeholder="Entre 1 et 3999..." id="nombre" name="Nombre" min="1" max="3999">
            <div class="row-4"></div>
        </div>
        <input type="submit" class="my-2 bg-info text-light rounded-2 border-0 mb-3" name="Convertir" value="Convertir">
    </form>
</div>

<?php
$content = ob_get_clean();
require "../template.php";
?> 