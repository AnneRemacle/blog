<h2 class="hidden">Liste des articles</h2>

<section>

    <?php foreach ( $datas[ 'posts' ] as $post ): ?>
        <section class="post">
            <h2 class="title">
                <a href="index.php?a=show&e=posts&id=<?php echo $post -> id; ?>&with=comments,categories"><?php echo $post -> title; ?> </a>
            </h2>
            <?php if( $post -> cover ): ?>
                <figure class="cover">
                    <img src="<?php echo $post -> cover; ?> " alt="" />
                </figure>
            <?php endif; ?>
            <p>
                <?php echo $post -> intro; ?>
            </p>
            <a class="more" href="index.php?a=show&e=posts&id=<?php echo $post -> id; ?>&with=comments,categories">
                Lire la suite de l'article: <?php echo $post -> title; ?>
            </a>

        </section>

    <?php endforeach; ?>

</section>
