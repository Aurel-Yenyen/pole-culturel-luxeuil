<div class="content">
    Editer un article
</div>

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
        <?php foreach ($articles as $k => $v) : ?>
            <tr>
                <td><?php echo $v->id; ?></td>
                <td><?php echo $v->name; ?></td>
                <td><span class="<?php echo ($v->online == 1) ? 'success' : 'error'; ?>"><?php echo ($v->online == 1) ? 'En ligne' : 'Hors Ligne'; ?></span></td>
                <td><?php echo $v->type; ?></td>
                <td>
                    <a href="<?php echo Router::url('admin/backoffice/editPost/' . $v->id); ?>">Editer</a>
                    <a onclick="return confirm('Voulez-vous vraiment supprimer cet article')" href="<?php echo Router::url('admin/backoffice/delete/' . $v->id); ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>

    <a href="<?php echo Router::url('admin/backoffice/editPost'); ?>">Ajouter un article</a>

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
                    <a href="<?php echo Router::url('admin/backoffice/editPage/' . $v->id); ?>">Editer</a>
                    <a onclick="return confirm('Voulez-vous vraiment supprimer cet article')" href="<?php echo Router::url('admin/backoffice/delete/' . $v->id); ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>



<a href="<?php echo Router::url('admin/backoffice/editPage'); ?>">Ajouter une page</a>