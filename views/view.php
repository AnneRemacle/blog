<!-- Main view -->

<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="utf-8">
            <title><?php echo $datas[ 'page_title' ]; ?> </title>
        </head>
        <body>
            <?php include( 'partials/_main_navigation.php' ) ?>
            <?php include( $datas[ 'view' ] ); ?>


        </body>
    </html>
