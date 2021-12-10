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
    ?> <form action="gagne-tas.php">
      <div class="form-block mx-auto">
        <h1>
          remplissez le formulaire
          pour participer au tirage au sort
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
            Votre Magasin
          </h2>
          <div class="row g-1">
            <div class="col-12">
              <select name="" id="">
                <option class="placeholder" value="">Enseignes</option>
                <option value="">Auchan</option>
                <option value="">Carrefour</option>
                <option value="">E.Leclerc</option>
              </select>
            </div>
            <div class="col-6">
              <input type="text" id="" name="" placeholder="Ville*">
            </div>
            <div class="col-6">
              <input type="text" id="" name="" placeholder="Code postal*">
            </div>
          </div>
          <h2 class="mt-4">
            vos preuves d’achat
          </h2>
          <p class="mentions text-start">Téléchargez votre ticket de caisse en entourant la date et le produit Mamie Nova acheté</p>
          <div class="row g-1">
            <div class="col-6">
              <input type="text" id="" name="" placeholder="Ticket de caisse">
            </div>
            <div class="col-6">
              <input class="inputfile" type="file" id="file" name="file" accept="">
              <label for="file">Télécharger</label>
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
        <label class="form-check-label mt-2">
          Vos données personnelles sont traitées conformément à la réglementation en vigueur de manière licite, loyale et proportionnée. Pour en savoir plus sur les traitements mis en œuvre et sur vos droits, vous pouvez consulter notre Politique de vie privée <a href="#">ici</a>, et notre règlement de jeu <a href="#">ici</a>
        </label>
      </div>
      <input class="btn btn-red mx-auto d-block my-4" type="submit" value="valider"></input>
    </form>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <svg class="close-btn" data-bs-dismiss="modal" aria-label="Close" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="38px" height="38px">
        <path fill-rule="evenodd" fill="rgb(255, 77, 3)" d="M19.408,0.804 C29.618,0.804 37.895,9.081 37.895,19.291 C37.895,29.500 29.618,37.777 19.408,37.777 C9.199,37.777 0.922,29.500 0.922,19.291 C0.922,9.081 9.199,0.804 19.408,0.804 Z" />
        <path fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M15.847,11.220 L27.953,23.327 C29.067,24.440 29.067,26.247 27.953,27.362 C26.839,28.476 25.032,28.476 23.917,27.362 L11.812,15.256 C10.697,14.141 10.697,12.335 11.812,11.220 C12.926,10.106 14.733,10.106 15.847,11.220 Z" />
        <path fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M27.953,11.220 C29.067,12.335 29.067,14.141 27.953,15.256 L15.847,27.362 C14.733,28.476 12.926,28.476 11.812,27.362 C10.697,26.247 10.697,24.440 11.812,23.327 L23.917,11.220 C25.032,10.106 26.839,10.106 27.953,11.220 Z" />
      </svg>
      <h2 class="mb-4" id="exampleModalLabel">OÙ TROUVER MES CODES ?</h2>
      <img class="m-auto img-fluid" width="300" src="assets/imgs/modal-ou-trouver-codes.jpg" alt="">
    </div>
  </div>
</div>

<?php include 'partials/footer.php'; ?>
