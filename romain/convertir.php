<?php ob_start() ?>
<?php require "function.php";?>

<div class="container d-flex flex-column justify-content-center align-items-center">
    <h3 class="ms-2 mt-2 d-flex justify-content-center">Je suis sur la page convertir.</h3>
    <div class="container d-flex align-items-center justify-content-center w-25 bg-dark text-center text-light rounded-2 py-3 m-4">
        <?php
        if($_POST["Nombre"]==true){
            echo "Nombre Romain :<br>"; 
            convertir($_POST["Nombre"]);
        }
        else{
            echo "Veuillez remplir le champs...";
        }
        ?>
    </div>
</div>

<?php
$content = ob_get_clean();
require "../template.php";
?> 