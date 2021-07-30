<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <?php
    wp_head();
    ?>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    
    

</head>
<body>
    <header>
        <div class="logo-header">
            <a href="#">
            <?php 

            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }

            ?></a>
            <h1>Le Blog de la Transmission d'Entreprises en Francophonie Mondiale</h1>
        </div>
        <nav>
            <a href="<?php echo get_permalink(12); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/RST-logo-mobile.png' ?>" alt="" class="mobile-logo"></a>
            <div class="hamburger">
                <div class="hamburger-lines"></div>
            </div>
            
            <ul class="nav-links">
                <li><a href="<?php echo get_permalink(12); ?>">Accueil</a></li>
                <li><a href="<?php echo get_permalink(2); ?>" >À propos</a></li>
                <li><a href="<?php echo get_permalink(99); ?>">Comment bien démarrer ?</a></li>
                <li><a href="<?php echo get_permalink(116); ?>">Estimation gratuite</a></li>
                <li><a href="<?php echo get_permalink(46); ?>">FAQ</a></li>
                <li><a href="<?php echo get_permalink(78); ?>">Contact</a></li>
                <li class="metrouver"><a href="#">Me trouver <i class="fas fa-chevron-down"></i></a>
                    <ul class="sub-links">
                        <li><a href="https://www.actoria.be/" target="_blank">Belgique</a></li>
                        <li><a href="https://www.actoria.ch/" target="_blank">Suisse</a></li>
                        <li><a href="https://www.actoria.com/fr/" target="_blank">France</a></li>
                        <li><a href="https://www.actoria.lu/" target="_blank">Luxembourg</a></li>
                        <li><a href="https://www.actoria.ma/" target="_blank">Maroc</a></li>
                        <li><a href="https://www.actoria.co.uk/" target="_blank">Grande-Bretagne</a></li>
                        <li><a href="https://www.actoria.at/" target="_blank">Allemagne</a></li>
                    </ul>
                </li>
                <li><?php get_search_form();?></li>

            </ul>

        </nav>
    </header>