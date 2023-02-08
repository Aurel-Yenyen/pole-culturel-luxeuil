<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title_for_layout) ? $title_for_layout: 'Mon Site'; ?></title>

</head>
<body>

    <ul>
        <?php $pagesMenu = $this->request('Pages', 'getMenu');?>
        <?php foreach($pagesMenu as $p): ?>
                <li><a href="<?php echo BASE_URL. '/pages/view/'. $p->id;?>" title="<?php echo $p->$name;?>"><?php echo $p->name;?></a></li>
        <?php endforeach;?>
        <li><a href="<?php echo BASE_URL. '/posts/index'; ?>">Actualité</a></li>
    </ul>

    <div class="container">
        <style></style>
            <?php echo $content_for_laytout; ?>

    </div>
</body>
</html>