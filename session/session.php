<?php ob_start(); ?>
<?php session_start();
if(empty($_GET['valid'])){
    echo "<div class=\"container d-flex bg-danger fw-bold flex-row py-2 mt-5\">Tous les champs doivent être renseigner ...</div>";
}

?>

<div class="d-flex flex-row mt-5">
    <form action="./homeSession.php" class="justify-content-center text-center w-25">
        <button type="submit" class="btn btn-secondary text-secondary bg-white px-5">Home</button>
    </form>
    <form action="./traitement.php" method="POST" class="d-flex flex-column align-items-center mt-5 w-75">
        <h1 class="mb-5">Ajouter des données</h1>
        <input class="form-control rounded-2 my-2 py-3 w-75" type="text" id="prenom" name="prenom" placeholder="Prénom">
        <input class="form-control rounded-2 my-2 py-3 w-75" type="text" id="nom" name="nom" placeholder="Nom">
        <p class="container w-75 mt-3">Age (18 à 70 ans)</p>
        <input class="form-control rounded-2 mb-2 py-1 w-75" type="number" id="age" name="age" placeholder="Age" min="17" max="70">
        <div class="form-group d-flex my-4 w-75">
            <div class="input-group">
            <span class="input-group-text">Taille (1,26m à 3m)</span>
            <input type="number" class="form-control" id="taille" name="taille" aria-label="amount" min="1.26" max="3" step="0.01">
            <span class="input-group-text">m</span>
            </div>
        </div>
        <fieldset class="form-group container d-flex flex-row w-75">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="optionsRadios" id="optionsRadios1" value="Femme" checked="">
                <label class="form-check-label me-3" for="optionsRadios1">
                Femme
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="optionsRadios" id="optionsRadios2" value="Homme">
                <label class="form-check-label" for="optionsRadios2">
                Homme
                </label>
            </div>
        </fieldset>
        <div class="container d-flex justify-content-end w-75">
            <input type="submit" class="btn btn-white text-white bg-info px-5" value="Enregistrer les données"></input>
        </div>
    </form>
</div>

<?php 
$content = ob_get_clean();
require "../template.php"; 
?>