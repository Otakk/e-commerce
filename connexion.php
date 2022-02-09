<?php
require_once('inc/inc_front/header.inc.php');
require_once('inc/inc_front/nav.inc.php');
?>

        <main class="container zone-main">

            <h1 class="text-center my-5">Identifiez-vous</h1>

            <form action="" method="post" class="col-12 col-sm-10 col-md-7 col-lg-5 col-xl-4 mx-auto">
                <div class="mb-3">
                    <label for="pseudo_email" class="form-label">Nom d'utilisateur / Email</label>
                    <input type="text" class="form-control" id="pseudo_email" name="pseudo_email" placeholder="Saisir votre Email ou votre nom d'utilisateur">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Saisir votre mot de passe">
                </div>
                <div>
                    <p class="text-end mb-0"><a href="" class="alert-link text-dark">Pas encore de compte ? Cliquez ici</a></p>
                    <p class="text-end m-0 p-0"><a href="" class="alert-link text-dark">Mot de passe oublié ?</a></p>
                </div>
                <input type="submit" name="submit" value="Continuer" class="btn btn-dark">
            </form>

        </main>

<?php
require_once('inc/inc_front/footer.inc.php');
?>