<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title_for_layout) ? $title_for_layout: 'Pôle Culturel de Luxeuil'; ?></title>
    <link rel="stylesheet" href="">
        <link rel="stylesheet" href="<?php echo Router::webroot('css/accueil/landscape.css'); ?>">
    <link rel="stylesheet" href="<?php echo Router::webroot('css/accueil/portrait.css'); ?>">
    <link rel="stylesheet" href="<?php echo Router::webroot('css/root/root.css'); ?>">
    <link rel="stylesheet" href="<?php echo Router::webroot('css/accueil/style.css'); ?>">
    <script src="<?php echo Router::webroot('js/script.js');?>" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Moon+Dance&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Sofia+Sans+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>



    <div class="container">
            <?php echo $this->Session->flash();?>
            <?php echo $content_for_laytout; ?>

    </div>
</body>
</html>