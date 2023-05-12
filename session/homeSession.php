<?php ob_start(); ?>
<?php session_start();?>

<div class="d-flex flex-row mt-5">
    <form action="./session.php?add" method="POST" class="d-flex flex-column align-items-center mt-5 w-100">
        <input type="submit" class="btn btn-white text-white bg-info px-5" value="Enregistrer les données"></input>
    </form>

</div>
<?php 
$content = ob_get_clean();
require "../template.php"; 
?>