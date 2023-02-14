<div class="content">
    Editer un article
</div>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($posts as $k => $v):?>
            <tr>
                <td><?php echo $v->id;?></td>
                <td><?php echo $v->name;?></td>
                <td>
                    <a href="<?php echo Router::url('admin/posts/edit/'. $v->id);?>">Editer</a>
                    <a onclick="return confirm('Voulez-vous vraiment supprimer cet article')" href="<?php echo Router::url('admin/posts/delete/'. $v->id);?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>

<a href="<?php echo Router::url('admin/posts/edit');?>">Ajouter un article</a>