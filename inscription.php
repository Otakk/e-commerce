<?php
require_once('inc/inc_front/header.inc.php');
require_once('inc/inc_front/nav.inc.php');
?>


            <h1 class="text-center my-5">Créer votre compte</h1>

            <form class="row g-3 mb-5">
                <div class="col-md-12">
                    <label for="pseudo" class="form-label">Nom d'utilisateur</label>
                    <input type="text" class="form-control" id="pseudo" name="pseudo">
                </div>
                <div class="col-md-6">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="col-md-6">
                    <label for="confirm_password" class="form-label">Confirmer votre mot de passe</label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                </div>
                <div class="col-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Saisir votre adresse email">
                </div>
                <div class="col-6">
                    <label for="telephone" class="form-label">Téléphone</label>
                    <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Saisir votre adresse téléphone">
                </div>
                <div class="col-6">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Saisir votre prénom">
                </div>
                <div class="col-md-6">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Saisir votre nom">
                </div>
                <div class="col-md-6">
                    <label for="adresse" class="form-label">Adresse</label>
                    <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Saisir votre adresse">
                </div>
                <div class="col-md-4">
                    <label for="ville" class="form-label">Ville</label>
                    <input type="text" class="form-control" id="ville" name="ville" placeholder="Saisir votre ville">
                </div>
                <div class="col-md-2">
                    <label for="code_postal" class="form-label">Code postal</label>
                    <input type="text" class="form-control" id="code_postal" name="code_postal">
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                        Accepter les <a href="" class="alert-link text-dark">politiques de confidentialité</a>  
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-dark">Continuer</button>
                </div>
            </form>

<?php
require_once('inc/inc_front/footer.inc.php');
?>