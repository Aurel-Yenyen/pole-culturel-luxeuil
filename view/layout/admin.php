<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title_for_layout) ? $title_for_layout: 'Administration'; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <ul>
        <li><a href="<?php echo Router::url('admin/evenements/index');?>">Articles</a></li>
    </ul>

    <div class="container">
            <?php echo $this->Session->flash();?>
            <?php echo $content_for_laytout; ?>

    </div>
    <a href="<?php echo Router::url('')?>">Voir le site</a>
</body>
</html>