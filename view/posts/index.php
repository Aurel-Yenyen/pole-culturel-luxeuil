
<div class="page-header">
    <h1>Le blog</h1>
</div>

<?php foreach ($posts as $k => $v): ?>
        <h2><?php echo $v->name;?></h2>
        <<?php echo $v->content;?>
        <p><a href="<?php echo Router::url("posts/view/id:{$v->id}/slug:$v->slug");?>">Lire la suite &rarr;</a></p>

<?php endforeach;?>

<div class="pagination">
    <ul class="perPage">
        <?php for($i = 1; $i <= $page; $i++):?>
        <li class="lien"><a href="?page=<?php echo $i;?>"><?php echo $i;?></a></li>
        <?php endfor; ?>
    </ul>
    <style>
        .perPage{
            display: flex;
        }
        li{
            list-style-type: none;
        }
        a{
            text-decoration: none;
            color: #3a3a3a;
        }
        .lien{
            margin-top: 10px;
        }
        .lien > a{
            padding: 10px;
            border: 2px solid black;
        }
    </style>
</div>