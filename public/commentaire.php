<?php

use App\Entity\Commentaire;
use App\Repository\ArticleRepository;
use App\Repository\CommentaireRepository;

require '../vendor/autoload.php';

$instance = new ArticleRepository();

$comments = new CommentaireRepository();
$Commentaire = $comments->findAll();

//$comments->persist(new Commentaire("ugug", 1, 1));

?>

<!DOCTYPE html>
<html lang="Fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Comment</title>
  <link rel="stylesheet" href="CSS/commentaire.css">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

</head>

<body>
  <header class="headercontent">
    <div class="row">
      <img
        src="https://images-platform.99static.com/LT2Jox3I82gOEYD2KYSFLSau2gk=/475x23:1235x783/500x500/top/smart/99designs-contests-attachments/99/99151/attachment_99151638"
        alt="" id="logo" class="col-lg-1 img-fluid " alt="Logo" style="width: 90px; height: 80px;">
      <H1 class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-5 col-xxl-5 text-center p-4"
        style="font-family: 'Dancing Script', cursive; color: #FFC0CB;">
        The fragrance foundation France </H1>
      <div class="nav-scroller py-3 mb-4  col-xs-5 col-sm-12 col-md-12 col-lg-12 col-xl-5 col-xxl-5">
        <nav class="nav d-flex justify-content-between justify-content-end ">

          <a class="p-4 fw-bold text-decoration-none text-center " href="index.php" style="color:#C71585 ;">Accueil</a>
          </li>
          <a class="p-4 fw-bold text-decoration-none text-center " href="commentaire.php"
            style="color:#C71585; ">Commentaire</a></li>
          <a class="p-4 fw-bold text-decoration-none text-center" href="category.php"
            style="color:#C71585;">Categories</a>
        </nav>
      </div>
    </div>
  </header>
  <section>
    <MAIN class="MainContent">
      <form method="post" class="formContact shadow p-3 mb-5 bg-body rounded">

        <label for="commentaire" class="label">Votre Commentaire</label>
        <textarea id="commentaire" name="commentaire" placeholder="Entrez votre message" required></textarea>

        <label  class="label">Numero d'article</label>
        <input type="number" id="id-article" name="id-article" placeholder="veuillez mettre le numero d'article"
          required>

        <label  class="label">Identifiant commentaire</label>
        <input type="number" id="id-article" name="id-article" placeholder="veuillez mettre l'identifiant du commentaire"
          >

        <button type="submit" class="btn"> Ajouter votre commentaire</button>
      </form>
      <?php

      if (!empty($_POST['comment']) && !empty($_POST['id_article'])&& !empty($_POST['id']) ) {
        $comments->persist (new Commentaire($_POST['comment'], $_POST['id_article']));
        echo "<p class=\"text-success\">You successfully added a product with id {$rep->getId()}</p>";
      }

      ?>
      </div>

    </MAIN>


    <div class="fluid-container">
      <div class="row g-3 ">
        <?php foreach ($Commentaire as $item) { ?>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4 text-center ">
            <div class="card h-100 text-center shadow p-3 mb-5 bg-body rounded">

              <div class="card-body ">
                <p class="card-text">
                  <?= $item->getComment() ?>
                </p>
                <p class="card-text" style="text-align: right;color:#C71585;">
                  <?= $item->getId_article() ?>
                </p>

              </div>
            </div>
          </div>
          <?php
        }
        ?>
      </div>
    </div>
  </section>
  <footer class="FooterContent">
    <p class="p-4 fw-bold text-center" style="background-color: #EEEEEE;">&copy; 2023 The fragrance foundation France
    </p>
</body>

</html>