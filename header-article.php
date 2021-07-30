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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    
    

</head>
<body>
    <header>
        <nav id="nav">
            <a href="<?php echo get_permalink(12); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/RST-logo-mobile.png' ?>" alt="" class="mobile-logo"></div></a>
            <div class="hamburger">
                <div class="hamburger-lines"></div>
            </div>
            
            <ul class="nav-links">
                <li><a href="<?php echo get_permalink(12); ?>">Accueil</a></li>
                <li><a href="<?php echo get_permalink(2); ?>" >A propos</a></li>
                <li><a href="<?php echo get_permalink(99); ?>">Comment bien demarrer ?</a></li>
                <li><a href="<?php echo get_permalink(116); ?>">Estimation gratuite</a></li>
                <li><a href="<?php echo get_permalink(46); ?>">FAQ</a></li>
                <li><a href="<?php echo get_permalink(78); ?>">Contact</a></li>
                <li class="metrouver"><a href="#">Me trouver <i class="fas fa-chevron-down"></i></a>
                    <ul class="sub-links">
                        <li><a href="#">Belgique</a></li>
                        <li><a href="#">Suisse</a></li>
                        <li><a href="#">France</a></li>
                        <li><a href="#">Luxembourg</a></li>
                        <li><a href="#">Maroc</a></li>
                        <li><a href="#">Grande-Bretagne</a></li>
                        <li><a href="#">Allemagne</a></li>
                    </ul>
                </li>
                <li><?php get_search_form();?></li>

            </ul>

            <div class="scroll_bar">
                <div id="scroll_indicator"></div>
            </div>

        </nav>
    </header>