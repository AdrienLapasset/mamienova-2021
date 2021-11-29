<?php include 'partials/header.php'; ?>

<div class="layout reponse reponse-1">
  <img class="brand-logo" src="assets/imgs/logo.png" alt="">
  <div class="container d-flex flex-column">
    <?php
    function includeFormProgress($step)
    {
      include("partials/form-progress.php");
    }
    includeFormProgress(2)
    ?>
    <h1 class="mb-5">
      Dis Mamie Nova,
      Quel âge as-tu ?
    </h1>
    <div class="form-block mx-auto">
      <p>
        On dit que l’âge d’une dame ne se demande pas…
        Et puis, je suis toujours aussi irrésistible !
      </p>
      <p class="mb-0">
        Mes petits secrets pour rester dans le coup (de cuillère) : <b>du plaisir, de la gourmandise, sans jamais culpabiliser !</b>
      </p>
    </div>
    <a class="btn btn-red mx-auto mt-5" href="inscription-a.php">suivant</a>
  </div>
</div>

<?php include 'partials/footer.php'; ?>
