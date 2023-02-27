<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo Router::webroot('css/view/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo Router::webroot('css/root/root.css'); ?>">
</head>
<body>
   


<?php

    $title_for_layout = $post->name;

?>
    <div class="contenu-affiche">
        <div id="wrapper">
            <div id="allPlan">
        <?php for($i = 1; $i <= 3; $i++):?>
            <img src="<?php echo Router::webroot('img/'."$post->id".'/img-'."$i".'.jpg')?>" alt="" width="auto" height="300px" class="plan p<?php echo $i?>">
        <?php endfor;?>
            </div>
        </div>
        <div class="barre barre-<?php echo $post->type?>">
            <div class="contenu-title">
                <h2><?php echo $post->name .'&ensp;|&ensp;'. $post->dateText. '&ensp;|&ensp;' .$post->heure.'&ensp;|&ensp;'. $post->prix;?></h2>  
            </div>
        </div>
        <div class="content-text">
            <h3 class="content-affiche"><?php echo $post->content;?><h3>
        </div>
    </div>

<div class="lien-youtube"><?php echo $post->youtube?></div>


</body>
</html>




