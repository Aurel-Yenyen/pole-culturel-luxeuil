<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo Router::webroot('css/evenements/view/style.css'); ?>">
</head>
<body>
   


<?php

    $title_for_layout = $post->name;

?>

<h1><?php echo $post->name;?></h1>
<h3><?php echo $post->content;?></h1>



</body>
</html>




