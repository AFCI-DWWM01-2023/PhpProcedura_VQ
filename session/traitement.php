<?php ob_start(); ?>
<?php session_start();
if($_POST['prenom'] != "" && $_POST['nom']!= "" && $_POST['age']!= "" && $_POST['taille']!= "" && $_POST['optionsRadios']!= ""){
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $age = $_POST['age'];
    $taille = $_POST['taille'];
    $sexe = $_POST['optionsRadios'];

    $utilisateur = array("utilisateur" => array($nom,$prenom ,$age ,$taille ,$sexe));

    $_SESSION['utilisateur'] = $utilisateur;
    //Création des variables de session
    $_SESSION['prenom'] = $prenom;
    $_SESSION['nom'] = $nom;
    $_SESSION['age'] = $age;
    $_SESSION['taille'] = $taille;
    $_SESSION['sexe'] = $sexe;

    header("location:./compte.php");
    exit();
}
else{
    // $valid = false;
    $_GET['valid'] = false;
    header("location:./session.php?valid=".$_GET['valid']);
    exit();
}
?>
<div class="d-flex flex-row mt-5">
    <form action="./session.php" class="justify-content-center text-center w-25">
        <button type="submit" class="btn btn-secondary text-secondary bg-white px-5">Home</button>
    </form>
    <div  class="rounded-2 d-flex justify-content-center align-items-center bg-success w-25 py-3">
        Données sauvegardées
    </div>
</div>
<?php 
$content = ob_get_clean();
require "../template.php"; 
?>