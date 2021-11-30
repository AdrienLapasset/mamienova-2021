<?php include 'partials/header.php'; ?>

<div class="layout question-1">
  <img class="brand-logo" src="assets/imgs/logo.png" alt="">
  <div class="container d-flex flex-column">

    <?php
    function includeFormProgress($step)
    {
      include("partials/form-progress.php");
    }
    includeFormProgress(1)
    ?>

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
          <input type="radio" id="code" name="code" value="code" checked>
          <label for="code" class="mx-3">
            J’ai 2 codes<br />uniques
            <?php include 'partials/modal-codes.php'; ?>
          </label>
          <img class="w-50" src="assets/imgs/pots-avec-code.png" alt="">
        </div>
        <div class="d-flex align-items-center">
          <input type="radio" id="no-code" name="code" value="code" checked>
          <label for="no-code" class="mx-3">
            je n’ai pas de<br />code unique
            <?php include 'partials/modal-packs.php'; ?>
          </label>
          <img class="no-code-img" src="assets/imgs/pots-sans-code.png" alt="">
        </div>
      </div>
    </div>
    <a href="question-2.php" class="btn btn-red my-5 align-self-center">suivant</a>
  </div>

</div>

<?php include 'partials/footer.php'; ?>
