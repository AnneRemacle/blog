<dl>

    <?php foreach ( $datas[ 'comments' ] as $comment ): ?>
    <dt>
        <a href="index.php?a=show&e=comments&id=<?php echo $comment -> id; ?>&with=posts"><?php echo $comment -> author_name; ?> </a>
    </dt>
    <dd>
        <?php echo $comment -> body; ?>
    </dd>
<?php endforeach; ?>
</dl>
