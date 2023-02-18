<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo Router::webroot('css/admin/admin_edit/style.css');?>">
</head>
<body>
    

<h1>Editer un article</h1>

<form action="<?php echo Router::url('admin/backoffice/editMagie/'.$id); ?>" method="post">
    <?php echo $this->Form->input('name', 'Titre'); ?>
    <?php echo $this->Form->input('content', 'Contenu', array('type'=>'textarea', 'rows' => 10, 'cols' => 40)); ?>
    <?php echo $this->Form->input('comment', 'Commentaire'); ?>
    <?php echo $this->Form->input('dateText', 'Date Texte'); ?>
    <?php echo $this->Form->input('heure', 'Heure'); ?>
    <?php echo $this->Form->input('type', 'Type');?>
    <?php echo $this->Form->input('slug', 'URL'); ?>
    <?php echo $this->Form->input('lieu', 'Lieu'); ?>
    <?php echo $this->Form->input('id', 'hidden'); ?>
    <?php echo $this->Form->input('content', 'Contenu', array('type'=>'textarea', 'rows' => 10, 'cols' => 40)); ?>
    <?php echo $this->Form->input('online', 'Mettre en Ligne', array('type' => 'checkbox')); ?>

    <div class="action">
        <input type="submit" value="Valider" onclick="">
    </div>
</form>


</body>
</html>

