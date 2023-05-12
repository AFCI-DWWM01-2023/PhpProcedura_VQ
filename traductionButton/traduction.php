<?php ob_start() ?>
   <div class="d-flex justify-content-center mt-5"> 
       <?php
       if(isset($_COOKIE['lang'])){
            if(isset($_POST['lang'])){
                if($_POST['lang'] != "Langues"){
                   setcookie('lang', $_POST['lang'], time()+60*60*24*30, '/traductionButton', '', false, true);
                include "./".$_POST['lang']."/".$_POST['lang']."Index.php"; 
                }
                else echo "Select language ...";     
            }
            else{
                if($_COOKIE['lang'] != "Langues"){
                    include "./".$_COOKIE['lang']."/".$_COOKIE['lang']."Index.php";
                 }
                 else echo "Select language ..."; 
            }
       }
       else{
        setcookie('lang', 'fr', time()+60*60*24*30, '/traductionButton', '', false, true);
        include "./fr/frIndex.php";
       }
       ?>
   </div>
   <div class="d-flex flex-column align-items-center mt-5 gap-5">
       <form class="d-flex flex-row justify-content-center gap-2 w-25" action="./traduction.php" method="POST">
           <select class="form_select rounded-3 bg-light border-5 border-success" name="lang">  
                <option >Langues</option>
                <option name="fr" value="fr">Français</option>
                <option name="uk" value="uk">Anglais</option>
                <option name="esp" value="esp">Espagnol</option>
                <option name="jap" value="jap">Japonais</option>
                <option name="pl" value="pl">Polonais</option>
           </select>
           <input class="btn btn-success" type="submit" value="Enregistrer"></input>
       </form>
   </div>
<?php
$content = ob_get_clean();
require "../template.php";
?> 