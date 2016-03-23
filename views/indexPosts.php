<ul>

    <?php foreach ( $datas[ 'posts' ] as $post ): ?>
    <li>
        <a href="index.php?a=show&e=posts&id=<?php echo $post -> id; ?>&with=comments,categories"><?php echo $post -> title; ?> </a>
    </li>
<?php endforeach; ?>
</ul>
