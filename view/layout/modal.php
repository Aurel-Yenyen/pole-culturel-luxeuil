<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo Router::webroot('css/admin/admin_index/style.css')?>">
</head>
<body>
    <div class="container">
        <?php echo $this->Session->flash();?>
        <?php echo $content_for_laytout; ?>
    </div>
</body>
</html>