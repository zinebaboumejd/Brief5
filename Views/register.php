<?php
if(isset($_POST['submit'])){
    $createUser = new userController();
    $createUser->register();
   }
?>

<div class="container">
    <div class="row my-4">
        <div class="col-md-6 mx-auto">
            <?php require_once 'Views/includes/alert.php' ; ?>
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Inscription</h3>
                </div>
                <div class="card-body bg-light">
                <form method="post" class="mr-4">

                    <div class="input-group mb-2">
                        <input type="text" class="form-control" name="fullname" placeholder="Nom et prenom">
                    </div>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" name="username" placeholder="Pseudo">
                    </div>
                    <div class="input-group mb-2">
                        <input type="password" name="password" placeholder="Mot de passe" class="form-control">
                    </div>
                    <button class="btn btn-info btn-sm btn-primary" name="submit" type="submit">Inscription</button>
            </div>
            </form>
            </div>
            <div class="card-footer">
                <a href="<?php echo BASE_URL?>login" class="btn btn-link">Connexion</a>
            </div>
        </div>
    </div>
</div>
</div>