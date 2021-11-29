<?php
function includeHeader($page)
{
  include("partials/header.php");
}
includeHeader('ishome')
?>

<div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
  <div class=" w-100">
    <h1>Pages :</h1>
    <div class="list-group">
      <a class="list-group-item list-group-item-action" href="home.php">Home</a>
      <a class="list-group-item list-group-item-action" href="question-1.php">question-1</a>
      <a class="list-group-item list-group-item-action" href="question-2.php">question-2</a>
      <a class="list-group-item list-group-item-action" href="reponse-1.php">reponse-1</a>
      <a class="list-group-item list-group-item-action" href="reponse-2.php">reponse-2</a>
      <a class="list-group-item list-group-item-action" href="reponse-3.php">reponse-3</a>
      <a class="list-group-item list-group-item-action" href="inscription-a.php">inscription-a</a>
      <a class="list-group-item list-group-item-action" href="inscription-b.php">inscription-b</a>
      <a class="list-group-item list-group-item-action" href="gagne-tas.php">gagne-tas</a>
      <a class="list-group-item list-group-item-action" href="gagne-ig.php">gagne-ig</a>
      <a class="list-group-item list-group-item-action" href="perdu.php">perdu</a>
      <a class="list-group-item list-group-item-action" href="a-gagner.php">a gagner</a>
      <a class="list-group-item list-group-item-action" href="participer.php">participer</a>
    </div>
  </div>
</div>

</html>


<?php include 'partials/footer.php'; ?>
