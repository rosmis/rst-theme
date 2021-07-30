<?php
/*
Template name: ESTIMATION
*/
?>

<?php
get_header()
?>


<div class="wrapper-estimation custom-container-blog">

    <div class="line"></div>
    <h1 class="estimation-title"><?php the_title();?></h1>

    <?php if( have_posts() ): while( have_posts() ): the_post();?>


        <?php the_content();?>

    <?php endwhile; else: endif;?>

</div>











<?php
get_footer()
?>