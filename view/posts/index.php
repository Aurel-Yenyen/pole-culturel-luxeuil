<h1>Le blog</h1>

<?php

foreach ($posts as $k => $v): ?>
    <div class="page-header">
        <h2><?php echo $v->name;?></h2>
        <<?php echo $v->content;?>
        <p><a href="<?php echo BASE_URL. '/posts/view/'. $v->id;?>">Lire la suite &rarr;</a></p>
    </div>


<?php endforeach?>