

<?php
get_header();
?>



<h1><?php the_title();?></h1>

<div class="container-php-page">


    <?php
        get_template_part('template-parts/section', 'about');
    ?>


</div>

<?php
get_footer();
?>