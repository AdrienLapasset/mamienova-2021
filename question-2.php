<?php include 'partials/header.php'; ?>

<div class="layout question-2">
  <img class="brand-logo" src="assets/imgs/logo.png" alt="">
  <div class="container d-flex flex-column">

    <?php
    function includeFormProgress($step)
    {
      include("partials/form-progress.php");
    }
    includeFormProgress(2)
    ?>

    <h1 class="mb-5">choisissez une question que vous<br class="d-none d-xl-block" />
      n’avez jamais osé poser à Mamie Nova !</h1>
    <div class="questions-container align-self-center d-flex flex-column flex-md-row">
      <a href="reponse-1.php">
        <img class="img-fluid" src="assets/imgs/question-1.png" alt="">
      </a>
      <a href="reponse-2.php">
        <img class="img-fluid" src="assets/imgs/question-2.png" alt="">
      </a>
      <a href="reponse-3.php">
        <img class="img-fluid" src="assets/imgs/question-3.png" alt="">
      </a>
    </div>
  </div>
  <img class="mamie" src="assets/imgs/mamie-question-2.png" alt="">
</div>

<?php include 'partials/footer.php'; ?>
