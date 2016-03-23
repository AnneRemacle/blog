
<h1><?php echo $datas[ 'category' ] -> name; ?></h1>

<h2>Articles de cette catégorie</h2>
<?php if( $datas[ 'posts' ] ): ?>
    <?php var_dump( $datas['posts'] ); ?>
    <ul class="posts">
        <?php foreach( $datas[ 'posts' ] as $post ): ?>
            <li class="post">
                <a href="?a=show&e=posts&id=<?php echo $post -> id; ?>&with=comments">
                    <?php echo $post -> title; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>


<div>
    <a href="index.php?a=index&e=categories">Toutes les catégories</a>
</div>
