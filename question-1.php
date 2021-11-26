<?php include 'partials/header.php'; ?>

<div class="layout question-1">
  <img class="brand-logo" src="assets/imgs/logo.png" alt="">
  <div class="container d-flex flex-column">
    <?php include 'partials/form-progress.php'; ?>
    <div class="form-block d-flex flex-column align-items-center mx-auto">
      <h1 class="mb-4">Vive les Mamies ! Pour leur fête,
        Mamie Nova présente « Dis, Mamie ? »</h1>
      <p>Au programme : une délicieuse complicité, des moments savoureux,<br class="d-none d-xl-block" />
        et des anecdotes inédites !<br class="d-none d-xl-block" />
        <b>Vous allez prendre plaisir à re-découvrir Mamie Nova...</b>
      </p>
      <p class="red mb-4">
        <b>Pour commencer, sélectionnez le(s) produit(s) que vous avez acheté(s)</b>
      </p>
      <div class="d-flex flex-column flex-xl-row">
        <div class="d-flex align-items-center mb-4 mb-xl-0 me-xl-2">
          <input type="radio" id="#" name="#" value="#" checked>
          <label class="mx-3">J’ai 2 codes<br />uniques
            <span type="button" data-bs-toggle="modal" data-bs-target="#modal">
              <div class="modal-btn">?</div>
            </span>
          </label>
          <img class="w-50" src="assets/imgs/pots-avec-code.png" alt="">
        </div>
        <div class="d-flex align-items-center">
          <input type="radio" id="#" name="#" value="#" checked>
          <label class="mx-3">je n’ai pas de<br />code unique
            <span type="button" data-bs-toggle="modal" data-bs-target="#modal">
              <div class="modal-btn">?</div>
            </span>
          </label>
          <img class="w-50" src="assets/imgs/pots-sans-code.png" alt="">
        </div>
      </div>
    </div>
    <a href="question-2.php" class="btn btn-red my-5 align-self-center">suivant</a>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <svg type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="38px" height="38px">
          <path fill-rule="evenodd" fill="rgb(255, 77, 3)" d="M19.408,0.804 C29.618,0.804 37.895,9.081 37.895,19.291 C37.895,29.500 29.618,37.777 19.408,37.777 C9.199,37.777 0.922,29.500 0.922,19.291 C0.922,9.081 9.199,0.804 19.408,0.804 Z" />
          <path fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M15.847,11.220 L27.953,23.327 C29.067,24.440 29.067,26.247 27.953,27.362 C26.839,28.476 25.032,28.476 23.917,27.362 L11.812,15.256 C10.697,14.141 10.697,12.335 11.812,11.220 C12.926,10.106 14.733,10.106 15.847,11.220 Z" />
          <path fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M27.953,11.220 C29.067,12.335 29.067,14.141 27.953,15.256 L15.847,27.362 C14.733,28.476 12.926,28.476 11.812,27.362 C10.697,26.247 10.697,24.440 11.812,23.327 L23.917,11.220 C25.032,10.106 26.839,10.106 27.953,11.220 Z" />
        </svg>
        <h2 class="mb-4" id="exampleModalLabel">OÙ TROUVER LES PACKS PROMOTIONNELS ?</h2>
        <p class="mb-5">Retrouvez les packs promotionnels Mamie Nova dans ce bac frais, présent dans les enseignes participantes.</p>
        <img class="m-auto img-fluid" width="400" src="assets/imgs/modal-code.png" alt="">
      </div>
    </div>
  </div>

</div>

<?php include 'partials/footer.php'; ?>
