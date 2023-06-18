<?php

use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use App\Repository\CommentaireRepository;

require '../vendor/autoload.php';

$instance = new ArticleRepository();
$categories = new CategoryRepository();
$commentaires = new CommentaireRepository();

$category = $categories->findAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Category</title>
  <link rel="stylesheet" href="CSS/category.css">
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
  <div class="container-fluid">
    <h1 class="text-center" style="color:#C71585;">Categories</h1>
    <div class="row g-3">
      <?php foreach ($category as $item) { ?>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9"
                  style="font-family: 'Dancing Script', cursive;">
                      <h3 class="card-title text-right">
                        <?= $item->getNamecategory() ?>
                      </h3>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
                  <button class="cta">
                    <span class="hover-underline-animation"> voir plus </span>
                    <svg viewBox="0 0 46 16" height="10" width="30" xmlns="http://www.w3.org/2000/svg"
                      id="arrow-horizontal">
                      <path transform="translate(30)"
                        d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" data-name="Path 10"
                        id="Path_10"></path>
                    </svg>
                  </button>
                </div>

              </div>
            </div>
          </div>
        </div>
        <?php
      }
      ?>
    </div>
  </div>
  <footer class="FooterContent">
    <p class="p-4 fw-bold text-center" style="background-color: #EEEEEE;">&copy; 2023 The fragrance foundation France
    </p>

  </footer>
</body>

</html>