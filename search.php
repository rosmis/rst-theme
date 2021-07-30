<?php
get_header();
?>



<div class="custom-container-blog">


    <div class="line archive-line"></div>
    <h2 class="search-title">Résultats pour "<?php echo get_search_query();?>" :</h2>

    <?php
        get_template_part('template-parts/section', 'archive');
    ?>


</div>

<?php
get_footer();
?>