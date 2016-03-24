
<h1>Articles de la catégorie <?php echo $datas[ 'category' ] -> name; ?></h1>
<?php if( $datas[ 'posts' ] ): ?>

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
    <a class="back" href="index.php?a=index&e=categories">Toutes les catégories</a>
</div>
