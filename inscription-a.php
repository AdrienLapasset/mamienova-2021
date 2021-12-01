<?php include 'partials/header.php'; ?>

<div class="layout inscription">
  <img class="brand-logo" src="assets/imgs/logo.png" alt="">
  <div class="container d-flex flex-column">
    <?php
    function includeFormProgress($step)
    {
      include("partials/form-progress.php");
    }
    includeFormProgress(3)
    ?>
    <form action="gagne-tas.php">
      <div class="form-block mx-auto">
        <h1>
          remplissez le formulaire
          et découvrez si vous avez gagné !
        </h1>
        <p class="mentions">*mentions obligatoires</p>
        <h2>Vos coordonnées</h2>
        <div class="inputs-container">
          <div class="row g-1">
            <div class="col-4 d-flex align-items-center">
              <label class="me-1" for="">Mr.</label>
              <input class="me-1 me-md-3" type="radio" id="gender" name="gender" value="male">
              <label class="me-1" for="">Mme.</label>
              <input type="radio" id="gender" name="gender" value="female">
            </div>
            <div class="col-8">
              <input type="text" id="" name="" placeholder="Nom*">
            </div>
            <div class="col-6">
              <input type="text" id="" name="" placeholder="Prénom*">
            </div>
            <div class="col-6">
              <input type="text" id="" name="" placeholder="Téléphone*">
            </div>
            <div class="col-12">
              <input type="text" id="" name="" placeholder="Adresse postale*">
            </div>
            <div class="col-6">
              <input type="text" id="" name="" placeholder="Code postal*">
            </div>
            <div class="col-6">
              <input type="text" id="" name="" placeholder="Ville*">
            </div>
            <div class="col-12">
              <input type="text" id="" name="" placeholder="Adresse email*">
            </div>
          </div>
          <h2 class="mt-4">
            Quels sont les codes inscrits<br class="d-none d-sm-block" />
            aux versos de vos packs ?*
            <?php include 'partials/modal-codes.php'; ?>
          </h2>
          <div class="d-flex flex-column align-items-center">
            <input class="code" type="text" id="" name="">
            <div class="dotted-line">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>
            <input class="code mt-1" type="text" id="" name="">
            <div class="dotted-line">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            En cochant cette case, vous acceptez la <a href="#">politique de protections des données personnelles</a>
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            En cochant cette case, vous acceptez le <a href="#">règlement</a> du jeu. </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            Je souhaite recevoir des offres et être abonné(e) aux dernières nouveautés Mamie Nova </label>
        </div>
      </div>
      <input class="btn btn-red mx-auto d-block my-4" type="submit" value="valider"></input>
    </form>
  </div>
</div>

<?php include 'partials/footer.php'; ?>
