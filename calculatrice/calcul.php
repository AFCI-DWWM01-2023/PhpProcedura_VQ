<?php ob_start() ?>
<?php require "function.php";?>

<div class="container d-flex flex-column justify-content-center align-items-center">
    <h3 class="ms-2 mt-2 d-flex justify-content-center">Je suis sur la page convertir.</h3>
    <form class="container d-flex flex-column align-items-center justify-content-center w-25 bg-dark text-center text-light rounded-2 py-3 m-4" action="calculatrice.php">
        <?php
        if($_POST["Nombre1"]==true && $_POST["Nombre2"]==true){
            $entry = $_POST["op"];
            switch($entry){
                case "+":
                    $result = $_POST["Nombre1"] + $_POST["Nombre2"];
                    echo "Votre résultat est : ".$result;
                    break;
                case "-":
                    $result = $_POST["Nombre1"] - $_POST["Nombre2"];
                    echo "Votre résultat est : ".$result;
                    break;
                case "x":
                    $result = $_POST["Nombre1"] * $_POST["Nombre2"];
                    echo "Votre résultat est : ".$result;
                    break;
                case "÷":
                    $result = $_POST["Nombre1"] / $_POST["Nombre2"];
                    echo "Votre résultat est : ".$result;
                    break;
            }           
        }
        else echo "Entrez des valeurs..."
        ?>
        <input type="submit" class="my-2 bg-info text-light rounded-2 border-0 mb-3 w-25" name="close" value="Close">
    </form>
</div>

<?php
$content = ob_get_clean();
require "../template.php";
?> 