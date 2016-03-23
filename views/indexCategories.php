<ul>

    <?php foreach ( $datas[ 'categories' ] as $category ): ?>
    <li>
        <a href="index.php?a=show&e=categories&id=<?php echo $category -> id; ?>&with=posts,comments"><?php echo $category -> name; ?> </a>
    </li>
<?php endforeach; ?>
</ul>
