<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo Router::webroot('css/accueil/style.css'); ?>">
</head>
<body>
<div class="content">
    <h1>Bienvenue</h1>
    <p>Page d'accueil</p>
</div>

<a href="<?php echo Router::url('backoffice/admin_index');?>">Espace Administrateur</a>

</body>
</html>

