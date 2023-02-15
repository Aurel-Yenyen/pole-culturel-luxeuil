<div class="content">
    Editer un article
</div>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>En ligne?<th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($articles as $k => $v):?>
            <tr>
                <td><?php echo $v->id;?></td>
                <td><span class="<?php echo ($v->online == 1)?'success':'error';?>"><?php echo ($v->online == 1)?'En ligne':'Hors Ligne';?></span></td>
                <td><?php echo $v->name;?></td>
                <td>
                    <a href="<?php echo Router::url('admin/evenements/editPost/'. $v->id);?>">Editer</a>
                    <a onclick="return confirm('Voulez-vous vraiment supprimer cet article')" href="<?php echo Router::url('admin/evenements/delete/'. $v->id);?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>En ligne?<th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($pages as $k => $v):?>
            <tr>
                <td><?php echo $v->id;?></td>
                <td><span class="<?php echo ($v->online == 1)?'success':'error';?>"><?php echo ($v->online == 1)?'En ligne':'Hors Ligne';?></span></td>
                <td><?php echo $v->name;?></td>
                <td>
                    <a href="<?php echo Router::url('admin/evenements/editPage/'. $v->id);?>">Editer</a>
                    <a onclick="return confirm('Voulez-vous vraiment supprimer cet article')" href="<?php echo Router::url('admin/evenements/delete/'. $v->id);?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>

<a href="<?php echo Router::url('admin/evenements/editPost');?>">Ajouter un article</a>