<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo Router::webroot('css/admin/admin_index/style.css');?>">
</head>
<body>
    



<div class="content">
    Editer un article
</div>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>En ligne</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($spectacle as $k => $v) : ?>
            <tr>
                <td><?php echo $v->id; ?></td>
                <td><?php echo $v->name; ?></td>
                <td><span class="<?php echo ($v->online == 1) ? 'success' : 'error'; ?>"><?php echo ($v->online == 1) ? 'En ligne' : 'Hors Ligne'; ?></span></td>
                <td>
                    <a href="<?php echo Router::url('backoffice/admin_editSpectacle/' . $v->id); ?>">Editer</a>
                    <a onclick="return confirm('Voulez-vous vraiment supprimer cet article')" href="<?php echo Router::url('backoffice/admin_delete/' . $v->id); ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>

    <a href="<?php echo Router::url('backoffice/admin_editSpectacle'); ?>">Ajouter un Spectacle Musical</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>En ligne</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($theatre as $k => $v) : ?>
            <tr>
                <td><?php echo $v->id; ?></td>
                <td><?php echo $v->name; ?></td>
                <td><span class="<?php echo ($v->online == 1) ? 'success' : 'error'; ?>"><?php echo ($v->online == 1) ? 'En ligne' : 'Hors Ligne'; ?></span></td>
                <td>
                    <a href="<?php echo Router::url('backoffice/admin_editTheatre/' . $v->id); ?>">Editer</a>
                    <a onclick="return confirm('Voulez-vous vraiment supprimer cet article')" href="<?php echo Router::url('backoffice/admin_delete/' . $v->id); ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>

    <a href="<?php echo Router::url('backoffice/admin_editTheatre'); ?>">Ajouter une Pièce de Theâtre</a>


<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>En ligne</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($magie as $k => $v) : ?>
            <tr>
                <td><?php echo $v->id; ?></td>
                <td><?php echo $v->name; ?></td>
                <td><span class="<?php echo ($v->online == 1) ? 'success' : 'error'; ?>"><?php echo ($v->online == 1) ? 'En ligne' : 'Hors Ligne'; ?></span></td>
                <td>
                    <a href="<?php echo Router::url('backoffice/admin_editMagie/' . $v->id); ?>">Editer</a>
                    <a onclick="return confirm('Voulez-vous vraiment supprimer cet article')" href="<?php echo Router::url('backoffice/admin_delete/' . $v->id); ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>

    <a href="<?php echo Router::url('backoffice/admin_editMagie'); ?>">Ajouter un Spectacle de Magie</a>


<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>En ligne</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($chorale as $k => $v) : ?>
            <tr>
                <td><?php echo $v->id; ?></td>
                <td><?php echo $v->name; ?></td>
                <td><span class="<?php echo ($v->online == 1) ? 'success' : 'error'; ?>"><?php echo ($v->online == 1) ? 'En ligne' : 'Hors Ligne'; ?></span></td>
                <td>
                    <a href="<?php echo Router::url('backoffice/admin_editChorale/' . $v->id); ?>">Editer</a>
                    <a onclick="return confirm('Voulez-vous vraiment supprimer cet article')" href="<?php echo Router::url('backoffice/admin_delete/' . $v->id); ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>

    <a href="<?php echo Router::url('backoffice/admin_editChorale'); ?>">Ajouter une Chorale</a>


<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>En ligne</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($cirque as $k => $v) : ?>
            <tr>
                <td><?php echo $v->id; ?></td>
                <td><?php echo $v->name; ?></td>
                <td><span class="<?php echo ($v->online == 1) ? 'success' : 'error'; ?>"><?php echo ($v->online == 1) ? 'En ligne' : 'Hors Ligne'; ?></span></td>
                <td>
                    <a href="<?php echo Router::url('backoffice/admin_editCirque/' . $v->id); ?>">Editer</a>
                    <a onclick="return confirm('Voulez-vous vraiment supprimer cet article')" href="<?php echo Router::url('backoffice/admin_delete/' . $v->id); ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>

    <a href="<?php echo Router::url('backoffice/admin_editCirque'); ?>">Ajouter un Cirque</a>



<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>En ligne</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($comedie as $k => $v) : ?>
            <tr>
                <td><?php echo $v->id; ?></td>
                <td><?php echo $v->name; ?></td>
                <td><span class="<?php echo ($v->online == 1) ? 'success' : 'error'; ?>"><?php echo ($v->online == 1) ? 'En ligne' : 'Hors Ligne'; ?></span></td>
                <td>
                    <a href="<?php echo Router::url('backoffice/admin_editComedie/' . $v->id); ?>">Editer</a>
                    <a onclick="return confirm('Voulez-vous vraiment supprimer cet article')" href="<?php echo Router::url('backoffice/admin_delete/' . $v->id); ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>

    <a href="<?php echo Router::url('backoffice/admin_editComedie'); ?>">Ajouter une Comédie</a>


    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>En ligne</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($autres as $k => $v) : ?>
            <tr>
                <td><?php echo $v->id; ?></td>
                <td><?php echo $v->name; ?></td>
                <td><span class="<?php echo ($v->online == 1) ? 'success' : 'error'; ?>"><?php echo ($v->online == 1) ? 'En ligne' : 'Hors Ligne'; ?></span></td>
                <td>
                    <a href="<?php echo Router::url('backoffice/admin_editAutres/' . $v->id); ?>">Editer</a>
                    <a onclick="return confirm('Voulez-vous vraiment supprimer cet article')" href="<?php echo Router::url('backoffice/admin_delete/' . $v->id); ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>

    <a href="<?php echo Router::url('backoffice/admin_editAutres'); ?>">Ajouter un Autres Evènements</a>

<table>

    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>En ligne</th>
            <th>Type</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pages as $k => $v) : ?>
            <tr>
                <td><?php echo $v->id; ?></td>
                <td><?php echo $v->name; ?></td>
                <td><span class="<?php echo ($v->online == 1) ? 'success' : 'error'; ?>"><?php echo ($v->online == 1) ? 'En ligne' : 'Hors Ligne'; ?></span></td>
                <td><?php echo $v->type; ?></td>
                <td>
                    <a href="<?php echo Router::url('backoffice/admin_editPage/' . $v->id); ?>">Editer</a>
                    <a onclick="return confirm('Voulez-vous vraiment supprimer cet article')" href="<?php echo Router::url('backoffice/admin_delete/' . $v->id); ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>



<a href="<?php echo Router::url('backoffice/admin_editPage'); ?>">Ajouter une page</a>

<a href="<?php echo Router::url('')?>">Voir le site</a>
</body>
</html>


