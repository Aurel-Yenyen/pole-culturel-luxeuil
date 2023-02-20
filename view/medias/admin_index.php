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
    
    <div class="content">
    <div class="content">
        <h1>Ajouter une image</h1>

    </div>
    <table>
    <thead>
        <tr>
            <th>Image</th>
            <th>Titre</th>
            <th>En ligne</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($images as $k => $v) : ?>
            <tr>
                <td><img src="<?php echo Router::webroot('img/' . $v->file);?>" height="100px" width="auto"></td>
                <td><?php echo $v->name; ?></td>
                <td>
                    <a onclick="return confirm('Voulez-vous vraiment supprimer cette image')" href="<?php echo Router::url('medias/admin_delete/' . $v->id); ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>
<form action="<?php echo Router::url('admin/medias/index/' .$post_id)?>" method="post" enctype="multipart/form-data">
        <?php echo $this->Form->input('file', 'Image', array('type' => 'file'));?>
        <?php echo $this->Form->input('name', 'Titre');?>
        <div class="action">
            <input type="submit" value="Valider">
        </div>
    </form>

</body>
</html>