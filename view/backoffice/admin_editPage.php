<h1>Editer un article</h1>

<form action="<?php echo Router::url('admin/backoffice/editPage/'.$id); ?>" method="post">
    <?php echo $this->Form->input('name', 'Titre'); ?>
    <?php echo $this->Form->input('slug', 'URL'); ?>
    <?php echo $this->Form->input('type', 'Type');?>
    <?php echo $this->Form->input('id', 'hidden'); ?>
    <?php echo $this->Form->input('online', 'Mettre en Ligne', array('type' => 'checkbox')); ?>

    <div class="action">
        <input type="submit" value="Valider">
    </div>
</form>