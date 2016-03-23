
<h1><?php echo $datas[ 'post' ] -> title; ?></h1>

<?php if( $datas[ 'post' ] -> body ): ?>
    <div class="body">
        <?php echo $datas[ 'post' ] -> body; ?>
    </div>
<?php endif; ?>

<h2>Commentaires</h2>
<?php if( $datas[ 'comments' ] ): ?>
    <ul class="comments">
        <?php foreach( $datas[ 'comments' ] as $comment ): ?>
            <li class="book">
                <a href="?a=show&e=comments&id=<?php echo $comment -> id; ?>&with=posts">
                    <?php echo $comment -> author_name; ?>
                </a>
                <p>
                    <?php echo $comment -> body; ?>
                </p>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<div>
    <a href="index.php?a=index&e=posts">Tous les articles</a>
</div>
