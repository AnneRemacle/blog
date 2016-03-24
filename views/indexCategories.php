<ul>
    <h2>Catégories</h2>

    <?php foreach ( $datas[ 'categories' ] as $category ): ?>
    <li class="category">
        <a href="index.php?a=show&e=categories&id=<?php echo $category -> id; ?>&with=posts,comments,categories"><?php echo $category -> name; ?> </a>
    </li>
<?php endforeach; ?>
</ul>
