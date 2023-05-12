<?php ob_start(); ?>
<?php session_start();
$utilisateur = $_SESSION['utilisateur'];
require "function.php";
?>
<div class="d-flex flex-row mt-5">
    <div class="d-flex flex-column justify-content-center text-center w-25">
        <form action="./session.php" class="justify-content-center text-center w-75">
            <button type="submit" class="btn btn-secondary text-secondary bg-white px-5 w-100">Home</button>
        </form>
        <form class="justify-content-center text-center mt-5 w-75" method="POST">
            <div class="text-secondary bg-white px-5 w-100">--option--</div>
            <input class="btn btn-secondary text-secondary my-1 bg-white px-5 w-100" type="submit" name="1" value="Débogage"></input>
            <input class="btn btn-secondary text-secondary my-1 bg-white px-5 w-100" type="submit" name="2" value="Concaténation"></input>
            <input class="btn btn-secondary text-secondary my-1 bg-white px-5 w-100" type="submit" name="3" value="Boucle"></input>
            <input class="btn btn-secondary text-secondary my-1 bg-white px-5 w-100" type="submit" name="4" value="Fonction"></input>
            <input class="btn btn-secondary text-secondary my-1 bg-white px-5 w-100" type="submit" name="5" value="Supprimer"></input>
        </form>
    </div>
    <div  class="rounded-2 d-flex justify-content-center align-items-center w-50 py-3">
        <?php
        
        if((array_key_exists('1', $_POST)) or (array_key_exists('2', $_POST)) or (array_key_exists('3', $_POST)) or (array_key_exists('4', $_POST))or (array_key_exists('5', $_POST))){
            switch($_POST){
                case array_key_exists('1',$_POST):
                    echo "<div class=\"d-flex flex-column w-100 ms-5 \"><h2 class=\" text-center\">Débogage</h2><br>";
                    echo "<pre>";
                    print_r($utilisateur);
                    echo "</pre>";
                    break;
                case array_key_exists(2,$_POST):
                    echo "
                    <div class=\"d-flex flex-column w-100 ms-5 \"><h2 class=\" text-center mb-4\">Concaténation</h2><br>";
                    if($utilisateur['utilisateur'][4]=="Femme"){
                        echo "<p class=\"text-start \">Mme ". $utilisateur['utilisateur'][0]." ".$utilisateur['utilisateur'][1]."<br>J'ai ".$utilisateur['utilisateur'][2]."ans et je mesure ".$utilisateur['utilisateur'][3]."m.</p>";
                        $nomUppercase = strtoupper($utilisateur['utilisateur'][0]);
                        $prenomUppercase = ucfirst($utilisateur['utilisateur'][1]);
                        echo "<p class=\"text-start \">Mme ". $nomUppercase." ".$prenomUppercase."<br>J'ai ".$utilisateur['utilisateur'][2]."ans et je mesure ".$utilisateur['utilisateur'][3]."m.</p>";
                        $nombre_format_francais = number_format($utilisateur['utilisateur'][3], 2, ',', ',');
                        echo "<p class=\"text-start \">Mme ". $nomUppercase." ".$prenomUppercase."<br>J'ai ".$utilisateur['utilisateur'][2]."ans et je mesure ".$nombre_format_francais."m.</p></div>";
                    }
                    else{
                        echo "<p class=\"text-start \">Mr ". $utilisateur['utilisateur'][0]." ".$utilisateur['utilisateur'][1]."<br>J'ai ".$utilisateur['utilisateur'][2]."ans et je mesure ".$utilisateur['utilisateur'][3]."m.</p>";
                        $nomUppercase = strtoupper($utilisateur['utilisateur'][0]);
                        $prenomUppercase = ucfirst($utilisateur['utilisateur'][1]);
                        echo "<p class=\"text-start \">Mr ". $nomUppercase." ".$prenomUppercase."<br>J'ai ".$utilisateur['utilisateur'][2]."ans et je mesure ".$utilisateur['utilisateur'][3]."m.</p>";
                        $nombre_format_francais = number_format($utilisateur['utilisateur'][3], 2, ',', ',');
                        echo "<p class=\"text-start \">Mr ". $nomUppercase." ".$prenomUppercase."<br>J'ai ".$utilisateur['utilisateur'][2]."ans et je mesure ".$nombre_format_francais."m.</p></div>";
                    } 
                    break;
                case array_key_exists(3,$_POST):
                    echo "<div class=\"d-flex flex-column w-100 ms-5 \"><h2 class=\" text-center mb-4\">Loop</h2><br>";
                    foreach($utilisateur as $key => $tab){
                        foreach($tab as $key => $value){
                            echo "A la ligne n° $key correspond $value.<br>";
                        }
                    }
                    echo "</div>";
                    break;
                case array_key_exists(4,$_POST):
                    header("./compte.php?fonction");
                    fonction($utilisateur);
                    break;
                case array_key_exists(5,$_POST):
                    session_destroy();
                    header("location:./homeSession.php?del");
                    exit();
                    break;
                default:
                    break;
            }
        }
        else echo "Bienvenue sur votre compte,<b>".$utilisateur['utilisateur'][1]."</b>.";
            
        ?>
    </div>
</div>
<?php 
$content = ob_get_clean();
require "../template.php"; 
?>