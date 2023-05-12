<?php ob_start(); ?>
<div class="row justify-content-center text-center gy-3 gx-0 mb-5">
        <h3 class="display-4">Exercices PHP</h3>
        <p class="lead">Select One:</p>
        <div class="row justify-content-center">
            <div class="card bg-dark text-white text-start mx-3 my-3" style="width: 25rem;">
                <div class="card-body">
                    <p class="lead fw-bold fs-2 text-white">Nombres Romain &#127942;</p>
                    <form action="./romain/romain.php">
                        <button class="btn btn-sm border-white text-white mt-auto" >Look at the Exercice</button>
                    </form>
                </div>
            </div>
            <div class="card bg-warning text-dark text-start mx-3 my-3" style="width: 25rem;">
                <div class="card-body">
                    <p class="lead fw-bold fs-2 text-black">REGEX &#128168;</p>
                    <form action="./regex/regex.php">
                        <button class="btn btn-sm border-dark text-dark mt-auto" >Look at the Exercice</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="card bg-primary text-white text-start mx-3 my-3" style="width: 25rem;">
                <div class="card-body">
                    <p class="lead fw-bold fs-2 text-white">Session ☎️</p>
                    <form action="./session/homeSession.php">
                        <button class="btn btn-sm border-light text-white mt-auto">Look at the exercice</button>
                    </form>
                </div>
            </div>
            <div class="card bg-light shadow text-dark text-start mx-3 my-3" style="width: 25rem;">
                <div class="card-body">
                    <p class="lead fw-bold fs-2 text-black text-break">Calculatrice 💸</p>
                    <form action="./calculatrice/calculatrice.php">
                        <button class="btn btn-sm border-dark text-dark mt-auto">Look at the exercice</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="card bg-info text-white text-start mx-3 my-3" style="width: 25rem;">
                <div class="card-body">
                    <p class="lead fw-bold fs-2 text-white">TraductionButton ☎️</p>
                    <form action="./traductionButton/traduction.php">
                        <button class="btn btn-sm border-light text-white mt-auto">Look at the exercice</button>
                    </form>
                </div>
            </div>
            <div class="card bg-success shadow text-dark text-start mx-3 my-3" style="width: 25rem;">
                <div class="card-body">
                    <p class="lead fw-bold fs-2 text-black text-break">Acceuil Traduction 💸</p>
                    <form action="./acceuil/acceuil.php">
                        <button class="btn btn-sm border-dark text-dark mt-auto">Look at the exercice</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php 
$content = ob_get_clean();
require "template.php"; 
?>