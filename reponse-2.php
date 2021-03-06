<?php include 'partials/header.php'; ?>

<div class="layout reponse reponse-2">
  <img class="brand-logo" src="assets/imgs/logo.png" alt="">
  <div class="container d-flex flex-column flex-grow-1 justify-content-center">
    <?php
    function includeFormProgress($step)
    {
      include("partials/form-progress.php");
    }
    includeFormProgress(2)
    ?>
    <h1 class="mb-5">
      Dis Mamie Nova,<br class="d-none d-xl-block" />
      As-tu déjà été amoureuse ?
    </h1>
    <div class="form-block mx-auto">
      <p>
        Des tas de fois… je suis <b>une poly-amoureuse de gourmandises</b> !
      </p>
      <p class="mb-0">
        Fruits ou Chocolat ? Yaourts ou Desserts ? Pourquoi choisir ? Je multiplie les expériences gustatives sans suivre les codes. Je suis une mamie audacieuse !
      </p>
    </div>
    <a class="btn btn-red mx-auto my-5" href="inscription.php">suivant</a>
  </div>
</div>

<?php include 'partials/footer.php'; ?>
