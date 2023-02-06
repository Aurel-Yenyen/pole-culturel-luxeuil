
<div class="page-header">
    <h1>Le blog</h1>
</div>

<?php foreach ($posts as $k => $v): ?>
        <h2><?php echo $v->name;?></h2>
        <<?php echo $v->content;?>
        <p><a href="<?php echo Router::url("posts/view/id:{$v->id}/slug:$v->slug");?>">Lire la suite &rarr;</a></p>

<?php endforeach;?>