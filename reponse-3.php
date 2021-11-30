<?php include 'partials/header.php'; ?>

<div class="layout reponse reponse-3">
  <img class="brand-logo" src="assets/imgs/logo.png" alt="">
  <div class="container d-flex flex-column flex-grow-1 justify-content-center">
    <?php
    function includeFormProgress($step)
    {
      include("partials/form-progress.php");
    }
    includeFormProgress(2)
    ?> <h1 class="mb-5">
      Dis Mamie Nova, Quelle est la chose<br class="d-none d-xl-block" />
      la plus folle que tu aies faite ?
    </h1>
    <div class="form-block mx-auto">
      <p>
        J’hésite entre…
      </p>
      <p>
        Le jour où je suis partie en <b>fugue gourmande</b> dans les nuages chercher de l’onctuosité pour mes recettes
        <br>
        <b>ou</b>
        <br>
        Le jour où j’ai relevé un challenge (gourmand) pour faire <b>un marathon (de saveurs)</b>
      </p>
      <p class="mb-0">
        C’est fou d’être Mamie Nova !
      </p>
    </div>
    <a class="btn btn-red mx-auto my-5" href="inscription.php">suivant</a>
  </div>
</div>

<?php include 'partials/footer.php'; ?>
