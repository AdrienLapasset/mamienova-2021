<?php include 'partials/header.php'; ?>

<div class="layout question-1">
  <img class="brand-logo" src="assets/imgs/logo.png" alt="">
  <div class="container d-flex flex-column">
    <?php include 'partials/form-progress.php'; ?>
    <div class="form-block d-flex flex-column align-items-center">
      <h1>Vive les Mamies ! Pour leur fête,
        Mamie Nova présente « Dis, Mamie ? »</h1>
      <p>Au programme : une délicieuse complicité, des moments savoureux,<br class="d-none d-xxl-block" />
        et des anecdotes inédites !<br class="d-none d-xxl-block" />
        <b>Vous allez prendre plaisir à re-découvrir Mamie Nova...</b>
      </p>
      <p class="red mb-4">
        <b>Pour commencer, sélectionnez le(s) produit(s) que vous avez acheté(s)</b>
      </p>
      <div class="d-flex flex-column flex-xxl-row">
        <div class="d-flex align-items-center mb-4 mb-xxl-0 me-xxl-4">
          <input type="radio" id="#" name="#" value="#" checked>
          <label class="mx-3">J’ai 2 codes<br />uniques</label>
          <img src="assets/imgs/pots-avec-code.png" alt="">
        </div>
        <div class="d-flex align-items-center">
          <input type="radio" id="#" name="#" value="#" checked>
          <label class="mx-3">je n’ai pas de<br />code unique</label>
          <img src="assets/imgs/pots-sans-code.png" alt="">
        </div>
      </div>
    </div>
    <a href="" class="btn btn-red my-5 align-self-center">suivant</a>
  </div>
</div>

<?php include 'partials/footer.php'; ?>
