<?php

use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use App\Repository\CommentaireRepository;

require '../vendor/autoload.php';

$instance = new ArticleRepository();
$categories = new CategoryRepository();
$commentaires = new CommentaireRepository();

$Article = $instance->findAll();
//$result = $instance->search("Le top 8 des parfums hespéridés");
//var_dump($result);
?>
<!DOCTYPE html>
<html lang="Fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste d'article</title>
    <link rel="stylesheet" href="CSS/home.css">
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
    <img src="https://images-platform.99static.com/LT2Jox3I82gOEYD2KYSFLSau2gk=/475x23:1235x783/500x500/top/smart/99designs-contests-attachments/99/99151/attachment_99151638" alt="" id="logo" class="col-lg-1 img-fluid " alt="Logo"
        style="width: 90px; height: 80px;">
      <H1 class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-5 col-xxl-5 text-center p-4" style="font-family: 'Dancing Script', cursive; color: #FFC0CB;">
      The fragrance foundation France </H1>

      <div class="nav-scroller py-3 mb-4  col-xs-5 col-sm-12 col-md-12 col-lg-12 col-xl-5 col-xxl-5">
        <nav class="nav d-flex justify-content-between justify-content-end ">

          <a class="p-4 fw-bold text-decoration-none text-center " href="index.php" style="color:#C71585 ;">Accueil</a></li>
          <a class="p-4 fw-bold text-decoration-none text-center " href="commentaire.php" style="color:#C71585; ">Commentaire</a></li>
          <a class="p-4 fw-bold text-decoration-none text-center" href="category.php" style="color:#C71585;">Categories</a>
        </nav>
      </div>
    </div>
  </header>

<section>
<div class="container-fluid">
        <h1 class="text-center" style="color:#D3D3D3;">Listes d'articles</h1>
        

        <div class="input-container">
        <input type="search" name="search" class="input" placeholder="search...">

        <span class="icon"> 
            <svg width="19px" height="19px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="1" d="M14 5H20" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="1" d="M14 8H17" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M21 11.5C21 16.75 16.75 21 11.5 21C6.25 21 2 16.75 2 11.5C2 6.25 6.25 2 11.5 2" stroke="#000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="1" d="M22 22L20 20" stroke="#000" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
        </span>
        </div>

        <div class="row g-3 ">
            <?php foreach ($Article as $item) { ?>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4 text-center ">
                    <div class="card h-100 text-center shadow p-3 mb-5 bg-body rounded">
                            <img src="<?= $item->getImage() ?>" alt="">

                            <div class="card-body ">
                            <h3 class="card-title" style="color:#D3D3D3;text-align: justify;">
                                <?= $item->getTitre() ?>
                            </h3>
                            <p class="card-text" style="color:#C71585">
                                <?= htmlspecialchars($item->getAuteur()) ?>
                            </p>
                            <p class="card-text" style="text-align: justify;">
                                <?= htmlspecialchars($item->getContenu()) ?>
                            </p>
                            <p class="card-text text-end" style="text-align: justify;">
                                <?= $item->getId_category() ?>
                            </p>
                            <a href="article.php?id=<?= $item->getId() ?>" class="card-link fw-bold text-left">Afficher plus ...</a>
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
    <p class="p-4 fw-bold text-center" style="background-color: #EEEEEE;">&copy; 2023 The fragrance foundation France</p>

  </footer>
</body>

</html>