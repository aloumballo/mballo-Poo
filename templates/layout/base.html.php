<?php

use App\Core\Constantes;
use App\Model\Professeur;
use App\Model\Etudiant;
use App\Model\Classe;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="<?= Constantes::WEB_ROOT . 'css/styleAccueil.css' ?>">

    <link rel="stylesheet" href="<?= Constantes::WEB_ROOT . 'bootstrap/css/bootstrap.css' ?>">
    <link rel="stylesheet"
        href="<?= Constantes::WEB_ROOT . 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' ?>">
    <link rel="stylesheet"
        href="<?= Constantes::WEB_ROOT . 'https://use.fontawesome.com/releases/v5.7.2/css/all.css' ?>">
</head>

<body>


    <?php
    if (isset($_SESSION['user-connect'])) {

        require_once $Constantes::ROOT() . "templates/layout/nav.html.php";
    }
    ?>

















    <div class="container">

        <?= $content_for_views ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>

</html>