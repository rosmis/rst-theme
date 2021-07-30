


<div class="wrapper-archive-article">

    <?php if( have_posts() ): while( have_posts() ): the_post();?>


        <a href="<?php the_permalink() ?>" class="row-archive">

            <?php if(has_post_thumbnail()):?>

                <img src="<?php the_post_thumbnail_url('blog-archive');?>" alt="<?php the_title();?>" class="row-archive-img">   

            <?php endif;?>

            <div class="row-archive-content">
                <div class="row" id="row">
                    <div class="tag" id="entreprenariat">
                        <p>
                            <?php $post_tags = get_the_tags();
                                if ( $post_tags ) {
                                    echo $post_tags[0]->name; 
                                }
                            ?>
                        </p>
                    </div>
                    <div class="dot"></div>
                    <div class="date">
                        <?php echo get_the_date('j F Y');?>
                    </div>
                </div>
                <h3><?php the_title() ?></h3>
                <div class="excerpt-archive">
                    <?php the_excerpt(); ?>
                </div>
            </div>
        </a>

    <?php endwhile; else:?> 
    
        Il n'y a pas de résultats pour "<?php echo get_search_query();?>"
        
    <?php endif;?>
    

    <div class="next-prev-btn">
        <?php previous_posts_link();?>
        <?php next_posts_link();?>
    </div>
</div>
