

<?php
get_header()
?>

    <div class="wrapper-overflow">


        <section class="hero">

            <div class="custom-container-blog hero-wrapper">


                <div class="wrapper-main-article" data-aos="fade-right">
                    <?php $the_query = new WP_Query( 'posts_per_page=1' ); ?>
                    
                    <!-- Start our WP Query -->
                    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

                        <a href="<?php the_permalink() ?>" class="main-article">

                            <div class="main-article-img">
                                <?php if(has_post_thumbnail()):?>

                                    <img id="main-article-img" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">   

                                <?php endif;?>
                            </div>
                            <div class="row" id="main">
                                <div class="tag" id="transmission">
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
                            <h2><?php the_title(); ?></h2>
                            <div class="excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                            <div class="author">
                                <div class="author-img"></div>
                                <p class="author-p">
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



                <div class="recent-article" id="recent-article" data-aos="fade-left">
                    <h2>Articles récents</h2>


                    <?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>
                
                    <!-- Start our WP Query -->
                    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

                        <a href="<?php the_permalink() ?>" class="row-article">
                            <div class="row-article-img">
                                <?php if(has_post_thumbnail()):?>

                                    <img id="row-article-img" src="<?php the_post_thumbnail_url("blog-small");?>" alt="<?php the_title();?>">   

                                <?php endif;?>
                            </div>
                    
                            <div class="row-article-content">
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
                                    <div class="date"><?php echo get_the_date('j F Y');?></div>
                                </div>
                                <h3><?php the_title(); ?></h3>
                            </div>
                        </a>

                    <?php 
                    endwhile;
                    wp_reset_postdata();
                    ?>
                    
                </div>
            </div>

        </section>


        <section class="actoria-hero custom-container-blog">

            <div class="actoria-hero-heading">

                <div class="actoria-content">
                    <h3>Vous accompagner à toutes les étapes de la vie de l'entreprise</h3>
                    <p>Chaque client est unique et nous lui portons toute notre attention. Nous intervenons avec la plus grande discretion, et instaurons des relations de confiance avec l'ensemble des parties prenantes à l'operation</p>
                </div>

                <div class="actoria-cta">
                    <a href="<?php echo get_permalink(2); ?>"><button class="cta-about">VOIR PLUS</button></a>

                </div>

            </div>

            <div class="actoria-card-section">

                <div class="card-wrapper" data-aos="fade-right" data-aos-duration="2000">

                    <div class="card">

                        <div class="card-row">
                            <img class="card-icon" src="<?php echo get_template_directory_uri() . '/assets/img/planning.svg' ?>" alt="planning">
                            <a target="_blank" href="https://www.actoria.com/"><i class="fas fa-arrow-right"></i></a>
                        </div>

                        <h4>décisions stratégiques</h4>
                        <p>Accompagner l’entrepreneur sur les enjeux de son entreprise au regard de ses objectifs stratégiques ou extra-stratégiques.</p>

                    </div>
                </div>

                <div class="card-wrapper" data-aos="fade-right" data-aos-duration="1500">

                    <div class="card">

                        <div class="card-row">
                            <img class="card-icon" src="<?php echo get_template_directory_uri() . '/assets/img/development.svg' ?>" alt="planning">
                            <a target="_blank" href="https://www.actoria.com/"><i class="fas fa-arrow-right"></i></a>
                        </div>

                        <h4>développer</h4>
                        <p>Accompagner l’entrepreneur à mettre en place des stratégies de développement et de croissance des leur entreprise.</p>

                    </div>
                </div>

                <div class="card-wrapper" data-aos="fade-right" data-aos-duration="1000">

                    <div class="card">

                        <div class="card-row">
                            <img class="card-icon" src="<?php echo get_template_directory_uri() . '/assets/img/handshake.svg' ?>" alt="planning">
                            <a target="_blank" href="https://www.actoria.com/"><i class="fas fa-arrow-right"></i></a>
                        </div>

                        <h4>transmettre</h4>
                        <p>Accompagner l’entrepreneur à mettre en place la meilleure solution qui lui permette de quitter sereinement son entreprise.</p>

                    </div>
                </div>

                <div class="card-wrapper" data-aos="fade-right" data-aos-duration="2000">

                    <div class="card">

                        <div class="card-row">
                            <img class="card-icon" src="<?php echo get_template_directory_uri() . '/assets/img/partnership.svg' ?>" alt="planning">
                            <a target="_blank" href="https://www.actoria.com/"><i class="fas fa-arrow-right"></i></a>
                        </div>

                        <h4>se rapprocher</h4>
                        <p>Accompagner l'entrepreneur dans la mise place de solutions de partenariats stratégiques avec un seul objectif : 1+1 =3.</p>

                    </div>
                </div>

                <div class="card-wrapper" data-aos="fade-right" data-aos-duration="1500">

                    <div class="card">

                        <div class="card-row">
                            <img class="card-icon" src="<?php echo get_template_directory_uri() . '/assets/img/arrows.svg' ?>" alt="planning">
                            <a target="_blank" href="https://www.actoria.com/"><i class="fas fa-arrow-right"></i></a>
                        </div>

                        <h4>fusionner</h4>
                        <p>Accompagner l’entrepreneur dans la création de synergies créatrice de valeur par intégration ou absorption.</p>

                    </div>
                </div>

                <div class="card-wrapper" data-aos="fade-right" data-aos-duration="1000">

                    <div class="card">

                        <div class="card-row">
                            <img class="card-icon" src="<?php echo get_template_directory_uri() . '/assets/img/bars.svg' ?>" alt="planning">
                            <a target="_blank" href="https://www.actoria.com/"><i class="fas fa-arrow-right"></i></a>
                        </div>

                        <h4>financer</h4>
                        <p>Accompagner l'entrepreneur à identifier des partenaires en financement afin d'accélérer sa croissance</p>

                    </div>
                </div>


            </div>



                
        </section>


        <section class="first-home container custom-container-blog">
            <div class="glider-contain multiple">
                <div class="glider-header">
                    <h2>Bien réussir sa transmission</h2>
                    <a href="<?php echo get_category_link(9); ?>" class="glider-see-all">
                        <p>Voir tous les articles</p>
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/5f58f03ddb9b6f0dfc1d723e_UP (1).svg' ?>">
                    </a> 
                </div>
                

                <button class="glider-prev">
                    <i class="fa fa-chevron-left"></i>
                </button>

                <div class="glider">

                        <?php
                        // the query
                        $the_query = new WP_Query(array(
                            'category_name' => 'test-test',
                            'post_status' => 'publish',
                            'posts_per_page' => 4,
                        ));
                        ?>

                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                            <a href="<?php the_permalink() ?>" class="main-article" id="article-slider">
                    
                                <div class="main-article-img" id='article-slider-img'>
                                    <?php if(has_post_thumbnail()):?>

                                        <img id="main-article-slider" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">   

                                    <?php endif;?>
                                </div>
                                <div class="row" id="main">
                                    <div class="tag" id="transmission">
                                        <p>
                                            <?php $post_tags = get_the_tags();
                                                if ( $post_tags ) {
                                                    echo $post_tags[0]->name; 
                                                }
                                            ?>
                                        </p>
                                    </div>
                                    <div class="dot"></div>
                                    <div class="date"><?php echo get_the_date('j F Y');?></div>
                                </div>
                                <h2><?php the_title(); ?></h2>
                                <div class="excerpt">
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="author">
                                    <div class="author-img"></div>
                                    <p class="author-p">
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

                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>

                    <?php else : ?>
                        <p><?php __('No News'); ?></p>
                    <?php endif; ?>

                    

                </div>

                <button class="glider-next">
                    <i class="fa fa-chevron-right"></i>
                </button>

            </div>

            <div class="wp-block-zoho-zoho-forms rst-book"><iframe height="685px" width="100%" frameborder="0" allowTransparency="true" scrolling="auto" src="https://forms.zohopublic.com/rseauactoria/form/RSTRecevezleGuidestratgiqueCommentrussirlatransmis/formperma/4diYC1O5Q_VWd-ipGs2N32O8rYaNTDV_CzmDI3iq6J4"> </iframe></div>
            <!--<div class="rst-book">
                <h4>Découvrez la méthode des 7P qui a permis à des centaines de chefs d'entreprise de réussir la transmission de leur entreprise</h4>
                <p>(RST) Recevez le Guide stratégique "Comment réussir la transmission de son entreprise" et suivez les puissantes méthodes des professionnels</p>
                
                <form>
                    <label for="identite">Identité *</label><br>
                    <input type="text" class="form-name" name="Nom" placeholder="nom">
                    <input type="text" class="form-name" name="Prénom" placeholder="prenom"><br>
                    
                    <label for="identite">Email *</label><br>
                    <input type="email" name="email" placeholder="email@exemple.fr"><br>

                    <label for="pays">Votre pays *</label><br>
                    <select name="pays" id="pays">

                        <option value="selectionner" selected>- Selectionner -</option>
                        <option value="belgique">Belgique</option>
                        <option value="suisse">Suisse</option>
                        <option value="france">France</option>
                        <option value="luxembourg">Luxembourg</option>
                        <option value="maroc">Maroc</option>
                        <option value="monaco">Monaco</option>
                        <option value="tunisie">Tunisie</option>
                        
                    </select> <br>

                    <input type="submit" value="Envoyer">
                </form>
            </div>-->
        </section>

        
    </div>
    


    <?php
    get_footer()
    ?>