<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Raynal et Roquelaure</title>
  <meta name="description" content="">
  <link rel="stylesheet" href="modules/bootstrap-4.5.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body class="formulaire">
  <div class="layout">
    <?php include 'partials/logos.php'; ?>
    <div class="content">
      <img class="img-fluid mt-4 mb-3" src="assets/imgs/des-milliers-de-cadeaux.png" alt="">

      <form action="gagne-bon.php">
        <div class="input-container">
          <input type="text" placeholder="Nom*" required>
          <input type="text" placeholder="Prénom*" required>
          <input type="text" placeholder="Adresse*" required>
          <input type="text" placeholder="CP*" required>
          <input type="text" placeholder="Ville*" required>
          <input type="email" placeholder="Adresse email*" required>
          <label for="preuve">Téléchargez la preuve d'achat*</label>
          <input type="file" id="preuve" required>
          <p>*Mentions obligatoires. Ces informations permettront de vous
            contacter en cas de gain.</p>
          <p>Conservez vos preuves d’achats, elles vous seront demandées en cas de gain </p>
        </div>

        <div class="checkbox">
          <input type="checkbox" required>
          <label>En participant, j’accepte le règlement du Jeu et le traitement
            de mes données personnelles dans le cadre de la gestion du Jeu*.
          </label>
        </div>
        <div class="checkbox">
          <input type="checkbox" required>
          <label>J’accepte que mes coordonnées soient utilisées par Raynal & Roquelaure
            et ses prestataires pour les besoins du Jeu et pour me contacter
            dans le cadre du Jeu. En cas de refus à collecte et au traitement
            de mes coordonnées personnelles par Raynal & Roquelaure et ses
            prestataires, je ne peux pas participer au Jeu.*
          </label>
        </div>
        <button type="submit" class="bouton mb-2" href="">DÉCOUVRIR SI J’AI GAGNÉ</button>
        <p>*Les données à caractère personnel à renseigner sur le formulaire du Jeu sont nécessaires pour participer au Jeu et font l’objet d’un traitement à des fins légitimes de gestion du Jeu et de validation des participations au Jeu. Ces données sont destinées à la Société Organisatrice du Jeu et ses sous-traitants aux fins de bonne conduite du Jeu, et sont conservées dans un fichier informatisé pour la durée n’excédant pas les délais de prescriptions légale applicables. Pour plus d’informations, nous vous invitons à lire attentivement la Politique de Confidentialité prévue au Règlement du Jeu. Conformément à la règlementation applicable sur la protection des données, vous bénéficiez d’un droit d’accès, rectification, modification et suppression des données vous concernant, d’un droit d’opposition au traitement de vos données pour des motifs légitimes, du droit à la portabilité de vos données, à la limitation du traitement et du droit de définir des directives relatives au sort de vos données après la mort, en adressant un email à tgiry@lesenvahisseurs.com Ou par courrier simple à l’adresse: Les Envahisseurs, Jeu Raynal & Roquelaure, 13bis place Jules Ferry 69006 Lyon. Vous pouvez également exercer à tout moment vos droits auprès de l’Autorité compétente en matière de protection des données personnels (CNIL) </p>
      </form>
    </div>
  </div>
  <?php include 'partials/footer.php'; ?>
</body>

</html>
