<!-- Main view -->

<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="utf-8">
            <link rel="stylesheet" href="../css/styles.css" media="screen" charset="utf-8">
            <title><?php echo $datas[ 'page_title' ]; ?> </title>
        </head>
        <body>
            <?php include( 'partials/_main_navigation.php' ) ?>
            <section class="main">
                <?php include( $datas[ 'view' ] ); ?>
            </section>



        </body>
    </html>
