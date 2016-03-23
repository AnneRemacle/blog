
<h1><?php echo $datas[ 'comment' ] -> author_name; ?></h1>

<?php if( $datas[ 'comment' ] -> body ): ?>
    <div class="body">
        <?php echo $datas[ 'comment' ] -> body; ?>
    </div>
<?php endif; ?>


<div>
    <a href="index.php?a=index&e=comments">Tous les commentaires</a>
</div>
