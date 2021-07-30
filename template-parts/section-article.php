

    
    
    <section class="hero-article">
        <div class="custom-container-blog container-hero">

            <div class="tag" id="tag">
                <p>
                    <?php if( have_posts() ): while( have_posts() ): the_post();?>

                    <?php $post_tags = get_the_tags();
                    if ( $post_tags ) {
                        echo $post_tags[0]->name; 
                    }
                    ?>


                    <?php endwhile; else: endif;?>
                </p>
                <div class="dot" id="dot"></div>
                <p class="lecture-time">5 min</p>
            </div>
            <h1>
                <?php if( have_posts() ): while( have_posts() ): the_post();?>


                    <?php the_title();?>

                <?php endwhile; else: endif;?>
            </h1>
            <div class="author">
                <div class="author-img"></div>
                <div class="author-credits" id="author">
                    <p class="author-p">
                        <?php if( have_posts() ): while( have_posts() ): the_post();?>

                            <?php
                            $fname = get_the_author_meta('first_name');
                            $lname = get_the_author_meta('last_name');
                            ?>

                            <?php echo $fname;?> <?php echo $lname;?>
                            

                        <?php endwhile; else: endif;?>
                    </p>
                    <p class="date">

                        Publié le

                        <?php if( have_posts() ): while( have_posts() ): the_post();?>

                            <?php echo get_the_date('j F Y');?>

                        <?php endwhile; else: endif;?>

                    </p>
                </div>
            </div>

        </div>
    </section>


    


    <section class="main-article-page custom-container-blog">

        <div class="hero-img-container">

            <?php if(has_post_thumbnail()):?>

                <img class="hero-img-article" src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>">        
            
            <?php endif;?>
            
        </div>

        <div class="container-main-article">
            
            <div class="container-socials">
                <div class="socials-shares">

                    <div class="facebook">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    </div>
                    <div class="twitter">
                        <a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                    </div>
                    <div class="linkedin">
                        <a href="http://linkedin.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>

                </div>

                <div class="rst-book" id="rst-book">
                    <h4>Découvrez la méthode des 7P qui a permis à des centaines de chefs d'entreprise de réussir la transmission de leur entreprise</h4>
                    <a href="<?php echo get_permalink(99); ?>" class="cta-rst">Je découvre</a>
                </div>
            </div>

            <div class="socials-shares-mobile">

                <div class="facebook" id="fb">
                    <i class="fab fa-facebook-f"></i>
                </div>
                <div class="twitter" id="twitter">
                    <i class="fab fa-twitter"></i>
                </div>
                <div class="linkedin" id="linkedin">
                    <i class="fab fa-linkedin-in"></i>
                </div>

            </div>

        
            
            

            <article>
                <p class="first-p">
                    <?php if( have_posts() ): while( have_posts() ): the_post();?>


                        <?php the_content();?>

                    <?php endwhile; else: endif;?>
                </p>
            </article>
        </div>
            
        
    </section>

    <section class="article-recent custom-container-blog">

        <div class="article-recent-header">
            <h3>Articles récents</h3>
            <a href="<?php echo get_category_link(9); ?>" class="glider-see-all">
                <p>Voir tous les articles</p>
                <img src="<?php echo get_template_directory_uri() . '/assets/img/5f58f03ddb9b6f0dfc1d723e_UP (1).svg' ?>">
            </a>
        </div>
    
        <div class="container-article">


            <?php $the_query = new WP_Query( 'posts_per_page=2' ); ?>
            
                <!-- Start our WP Query -->
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

                <a href="<?php the_permalink() ?>" class="article-content">
                    <div class="article-content-img">
                        <?php if(has_post_thumbnail()):?>

                            <img id="article-content-img" src="<?php the_post_thumbnail_url("blog-medium");?>" alt="<?php the_title();?>">   

                        <?php endif;?>
                    </div>
                    <div class="row" id="main">
                        <div class="tag-recent" id="transmission">
                            <p>
                                <?php $post_tags = get_the_tags();
                                    if ( $post_tags ) {
                                        echo $post_tags[0]->name; 
                                    }
                                ?>
                            </p>
                        </div>
                        <div class="dot-recent"></div>
                        <div class="date-recent"><?php echo get_the_date('j F Y');?></div>
                    </div>
                    <h3><?php the_title(); ?></h3>

                    <div class="main-description">
                        <?php the_excerpt(); ?>
                    </div>

                    <div class="author-recent">
                        <div class="author-img"></div>
                        <p class="author-p" id="recent">
                            <?php if( have_posts() ): while( have_posts() ): the_post();?>

                                <?php
                                $fname = get_the_author_meta('first_name');
                                $lname = get_the_author_meta('last_name');
                                ?>

                                <?php echo $fname;?> <?php echo $lname;?>


                            <?php endwhile; else: endif;?>
                        </p>
                    </div>
                </a>

            
            <?php 
            endwhile;
            wp_reset_postdata();
            ?>

            
        </div>

        <?php comments_template();?>                
        
        
    </section>
