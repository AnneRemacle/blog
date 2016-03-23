
<h1><?php echo $datas[ 'comments' ] -> author_name; ?></h1>

<?php if( $datas[ 'comments' ] -> body ): ?>
    <div class="body">
        <?php echo $datas[ 'comments' ] -> body; ?>
    </div>
<?php endif; ?>


<div>
    <a href="index.php?a=index&e=comments">Tous les commentaires</a>
</div>
