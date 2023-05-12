<?php ob_start() ?>
<?php 
function account(){
    $emailPattern = "#^[a-zA-Z-_.\d]+@[a-z]+.(fr|com|net|org)$#";
    // $emailPattern = "#^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$#/g";
    $mdpPattern = "+^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$+";
    if($_POST["Email"]==true && $_POST["Password"]==true){
        if(preg_match($emailPattern,$_POST["Email"])&&preg_match($mdpPattern,$_POST["Password"])){
            $login = $_POST["Email"];
            echo  "You are connected at $login.";
        }
        else echo "Error Login or Password...";
        
    }
    else{
        echo "Empty entry...";
    }
}
?>
<div class="container justify-content-center align-items-center my-5 w-25">
    <form class="d-flex flex-column align-items-center bg-dark text-light rounded-4" action="regex.php" method="POST">
        <label class="col-form-label mt-3" for="login">Login:</label>
        <div class="container d-flex flex-column justify-content-center">
            <p class="text-center mb-2"><?php account();?></p>
        </div>
        <input type="submit" class="my-2 bg-info text-light rounded-2 border-0 mb-3 w-25" name="Close" value="Close">
    </form>
</div>
<?php $content = ob_get_clean();
require "template.php"; ?>