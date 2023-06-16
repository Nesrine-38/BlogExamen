<?php

use App\Entity\Article;
use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use App\Repository\CommentaireRepository;

require '../vendor/autoload.php';

$instance = new ArticleRepository();
// $Article = $instance->findAll();
$Article = $instance->findById($_GET["id"]);

$categories = new CategoryRepository();
$category = $categories->findById($_GET["id"])
  ?>
<!DOCTYPE html>
<html lang="Fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste d'article</title>
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
          <a class="p-4 fw-bold text-decoration-none text-center " href="Article.php"
            style="color:#C71585; ">Articles</a></li>
          <a class="p-4 fw-bold text-decoration-none text-center" href="category.php"
            style="color:#C71585;">Categories</a>
        </nav>
      </div>
    </div>
  </header>

  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
          <div class="card text-center shadow p-3 mb-5 bg-body rounded ">
            <img src="<?= $Article->getImage() ?>" alt="">

            <div class="card-body">
              <h3 class="card-title" style="color:#D3D3D3;">
                <?= $Article->getTitre() ?>
              </h3>
              <p class="card-text" style="color:#C71585">
                <?= htmlspecialchars($Article->getAuteur()) ?>
              </p>
              <p class="card-text" style="text-align: justify;">
                <?= htmlspecialchars($Article->getContenu()) ?>
              </p>
              <div style="color:	#FFA500;">
                <?=
                  $categories->findById($Article->getId_category())->getNamecategory()

                  ?>
              </div>
              <p class="card-text text-end" style="text-align: justify;">
                <?= $Article->getId_category() ?>
              </p>
            </div>

          </div>
        </div>
      </div>
  </section>
  <footer class="FooterContent">
    <p class="p-4 fw-bold text-center" style="background-color: #EEEEEE;">&copy; 2023 The fragrance foundation France
    </p>

  </footer>
</body>
<html>