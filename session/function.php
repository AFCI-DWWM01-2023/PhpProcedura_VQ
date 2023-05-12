<?php

function Fonction($utilisateur){
    echo "<div class=\"d-flex flex-column w-100 ms-5 \"><h2 class=\" text-center mb-4\">Fonction</h2><br>";
                    foreach($utilisateur as $key => $tab){
                        foreach($tab as $key => $value){
                            echo "A la ligne n° $key correspond $value.<br>";
                        }
                    }
                    echo "</div>";
}

?>