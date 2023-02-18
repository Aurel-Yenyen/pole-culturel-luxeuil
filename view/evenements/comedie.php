<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo Router::webroot('css/evenements/comedie/style.css'); ?>">
    <title>Document</title>
</head>
<body>
    

<div class="page-header">
    <h1>Le blog</h1>
</div>

<?php foreach ($posts as $k => $v): ?>
        <h2><?php echo $v->name;?></h2>
        <<?php echo $v->content;?>
        <p><a href="<?php echo Router::url("evenements/view/id:{$v->id}/slug:$v->slug");?>">Lire la suite &rarr;</a></p>

<?php endforeach;?>




</body>
</html>

