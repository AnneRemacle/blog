<ul>

    <?php foreach ( $datas[ 'comments' ] as $comment ): ?>
    <li>
        <a href="index.php?a=show&e=comments&id=<?php echo $comment -> id; ?>&with=posts"><?php echo $comment -> author_name; ?> </a>
    </li>
<?php endforeach; ?>
</ul>
