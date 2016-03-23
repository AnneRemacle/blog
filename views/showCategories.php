
<h1><?php echo $datas[ 'category' ] -> name; ?></h1>

<h2>Articles de cette catégorie</h2>
<?php if( $datas[ 'posts' ] ): ?>
    <ul class="posts">
        <?php foreach( $datas[ 'posts' ] as $post ): ?>
            <li class="post">
                <a href="?a=show&e=categories&id=<?php echo $post -> id; ?>&with=posts">
                    <?php echo $post -> title; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>


<div>
    <a href="index.php?a=index&e=categories">Toutes les catégories</a>
</div>
