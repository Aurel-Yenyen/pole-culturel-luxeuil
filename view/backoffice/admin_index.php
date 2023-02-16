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
                    <a href="<?php echo Router::url('admin/backoffice/editSpectacle/' . $v->id); ?>">Editer</a>
                    <a onclick="return confirm('Voulez-vous vraiment supprimer cet article')" href="<?php echo Router::url('admin/backoffice/delete/' . $v->id); ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>

    <a href="<?php echo Router::url('admin/backoffice/editSpectacle'); ?>">Ajouter un Spectacle Musical</a>

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
                    <a href="<?php echo Router::url('admin/backoffice/editTheatre/' . $v->id); ?>">Editer</a>
                    <a onclick="return confirm('Voulez-vous vraiment supprimer cet article')" href="<?php echo Router::url('admin/backoffice/delete/' . $v->id); ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>

    <a href="<?php echo Router::url('admin/backoffice/editTheatre'); ?>">Ajouter une Pièce de Theâtre</a>


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
                    <a href="<?php echo Router::url('admin/backoffice/editMagie/' . $v->id); ?>">Editer</a>
                    <a onclick="return confirm('Voulez-vous vraiment supprimer cet article')" href="<?php echo Router::url('admin/backoffice/delete/' . $v->id); ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>

    <a href="<?php echo Router::url('admin/backoffice/editMagie'); ?>">Ajouter un Spectacle de Magie</a>


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
                    <a href="<?php echo Router::url('admin/backoffice/editChorale/' . $v->id); ?>">Editer</a>
                    <a onclick="return confirm('Voulez-vous vraiment supprimer cet article')" href="<?php echo Router::url('admin/backoffice/delete/' . $v->id); ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>

    <a href="<?php echo Router::url('admin/backoffice/editChorale'); ?>">Ajouter une Chorale</a>


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
                    <a href="<?php echo Router::url('admin/backoffice/editCirque/' . $v->id); ?>">Editer</a>
                    <a onclick="return confirm('Voulez-vous vraiment supprimer cet article')" href="<?php echo Router::url('admin/backoffice/delete/' . $v->id); ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>

    <a href="<?php echo Router::url('admin/backoffice/editCirque'); ?>">Ajouter un Cirque</a>



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
                    <a href="<?php echo Router::url('admin/backoffice/editComedie/' . $v->id); ?>">Editer</a>
                    <a onclick="return confirm('Voulez-vous vraiment supprimer cet article')" href="<?php echo Router::url('admin/backoffice/delete/' . $v->id); ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>

    <a href="<?php echo Router::url('admin/backoffice/editComedie'); ?>">Ajouter une Comédie</a>


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
                    <a href="<?php echo Router::url('admin/backoffice/editAutres/' . $v->id); ?>">Editer</a>
                    <a onclick="return confirm('Voulez-vous vraiment supprimer cet article')" href="<?php echo Router::url('admin/backoffice/delete/' . $v->id); ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>

    <a href="<?php echo Router::url('admin/backoffice/editAutres'); ?>">Ajouter une Comédie</a>

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