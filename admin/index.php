<?php
require_once 'inc/functions.php';
require_once 'inc/login.php';
include_once 'inc/header.php';


$mdp = true;
?>

<h1 class="text-center">Connexion</h1>
<br>
<?php if(count($error) > 0): // Si il y a des erreurs ?>
    <?php $mdp = false; ?>
    <div class="alert alert-danger">
        <?=implode('<br>', $error); ?>
    </div>
<?php endif; ?>

<form class="form-horizontal well well-sm" method="post">

<?php if(isset($_SESSION['user'])): ?>
<?php header('Location: admin.php');?>    
<?php else: ?>


    <div class="form-group">
        <label class="col-md-4 control-label" for="email">Email</label>
        <div class="col-md-4">
            <input id="email" type="email" name="email" placeholder="votre@email.fr" class="form-control input-md" required>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label" for="password">Mot de passe</label>
        <div class="col-md-4">
            <input id="password" name="password" type="password" placeholder="" class="form-control input-md" required>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-4 col-md-offset-4">
            <button type="submit" class="btn btn-primary">Se connecter</button>
        </div>
    </div>
    <?php endif; ?>

    <?php if($mdp == false): ?>
        <div class="form-group">
            <div class="col-md-4 col-md-offset-4">
                <a href="getNewPassword.php" class="btn btn-primary">Mot de passe oublié ?</a>
            </div>
        </div>

    <?php endif; ?>
</form>



<?php
if($showErrors) {
    var_dump($errors);
}

include_once 'inc/footer.php';
?>
