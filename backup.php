

<?php
get_header()
?>

    <section class="hero">

        <div class="custom-container-blog hero-wrapper">

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


            <div class="recent-article" id="recent-article">
                <h2>Articles récents</h2>
                <a href="#" class="row-article">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/1starticle-row-125.png' ?>" class="row-article-img">
                    <div class="row-article-content">
                        <div class="row" id="row">
                            <div class="tag" id="entreprenariat">
                                <p>entreprenariat</p>
                            </div>
                            <div class="dot"></div>
                            <div class="date">23 septembre 2020</div>
                        </div>
                        <h3>Comment devenir un bon entrepreneur ?</h3>
                    </div>
                </a>
                <a href="#" class="row-article">
                    <img src="./img/2nd-article125.png" class="row-article-img">
                    <div class="row-article-content">
                        <div class="row" id="row">
                            <div class="tag" id="entreprenariat">
                                <p>entreprenariat</p>
                            </div>
                            <div class="dot"></div>
                            <div class="date">23 septembre 2020</div>
                        </div>
                        <h3>Pourquoi préparer une cession d’entreprise ?</h3>
                    </div>
                </a>
                <a href="#" class="row-article">
                    <img src="./img/3rd-125.png" class="row-article-img">
                    <div class="row-article-content">
                        <div class="row" id="row">
                            <div class="tag" id="entreprenariat">
                                <p>entreprenariat</p>
                            </div>
                            <div class="dot"></div>
                            <div class="date">23 septembre 2020</div>
                        </div>
                        <h3>Comment devenir un bon <br> entrepreneur ?</h3>
                    </div>
                </a>
                <a href="#" class="row-article">
                    <img src="./img/4th-125px.png" class="row-article-img">
                    <div class="row-article-content">
                        <div class="row" id="row">
                            <div class="tag" id="entreprenariat">
                                <p>entreprenariat</p>
                            </div>
                            <div class="dot"></div>
                            <div class="date">23 septembre 2020</div>
                        </div>
                        <h3>Comment devenir un bon <br> entrepreneur ?</h3>
                    </div>
                </a>
            </div>
        </div>
        
    </section>


    <section class="first-home container">
        <div class="glider-contain multiple">
            <div class="glider-header">
                <h2>Bien réussir sa transmission</h2>
                <a href="#" class="glider-see-all">
                    <p>Voir tous les articles</p>
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/5f58f03ddb9b6f0dfc1d723e_UP (1).svg' ?>">
                </a> 
            </div>
            

            <button class="glider-prev">
                <i class="fa fa-chevron-left"></i>
            </button>

            <div class="glider">
                <a href="#" class="main-article" id="article-slider">
                    <div class="main-article-img">
                    </div>
                    <div class="row" id="main">
                        <div class="tag" id="transmission">
                            <p>tranmission</p>
                        </div>
                        <div class="dot"></div>
                        <div class="date">13 octobre 2020</div>
                    </div>
                    <h2>Peut-on réussir la cession d’une entreprise sans intermédiaire ?</h2>
                    <p class="main-description">Réussir la cession d’une entreprise sans intermédiaire ? Tôt ou tard, si vous êtes propriétaire d’une entreprise vous serez confronté à la question de sa cession...</p>
                    <div class="author">
                        <div class="author-img"></div>
                        <p class="author-p">Fabrice Lange</p>
                    </div>
                </a>

                <a href="#" class="main-article" id="article-slider">
                    <div class="main-article-img"></div>
                    <div class="row" id="main">
                        <div class="tag" id="transmission">
                            <p>tranmission</p>
                        </div>
                        <div class="dot"></div>
                        <div class="date">13 octobre 2020</div>
                    </div>
                    <h2>Peut-on réussir la cession d’une entreprise sans intermédiaire ?</h2>
                    <p class="main-description">Réussir la cession d’une entreprise sans intermédiaire ? Tôt ou tard, si vous êtes propriétaire d’une entreprise vous serez confronté à la question de sa cession...</p>
                    <div class="author">
                        <div class="author-img"></div>
                        <p class="author-p">Fabrice Lange</p>
                    </div>
                </a>

                <a href="#" class="main-article" id="article-slider">
                    <div class="main-article-img"></div>
                    <div class="row" id="main">
                        <div class="tag" id="transmission">
                            <p>tranmission</p>
                        </div>
                        <div class="dot"></div>
                        <div class="date">13 octobre 2020</div>
                    </div>
                    <h2>Peut-on réussir la cession d’une entreprise sans intermédiaire ?</h2>
                    <p class="main-description">Réussir la cession d’une entreprise sans intermédiaire ? Tôt ou tard, si vous êtes propriétaire d’une entreprise vous serez confronté à la question de sa cession...</p>
                    <div class="author">
                        <div class="author-img"></div>
                        <p class="author-p">Fabrice Lange</p>
                    </div>
                </a>

                <a href="#" class="main-article" id="article-slider">
                    <div class="main-article-img"></div>
                    <div class="row" id="main">
                        <div class="tag" id="transmission">
                            <p>tranmission</p>
                        </div>
                        <div class="dot"></div>
                        <div class="date">13 octobre 2020</div>
                    </div>
                    <h2>Peut-on réussir la cession d’une entreprise sans intermédiaire ?</h2>
                    <p class="main-description">Réussir la cession d’une entreprise sans intermédiaire ? Tôt ou tard, si vous êtes propriétaire d’une entreprise vous serez confronté à la question de sa cession...</p>
                    <div class="author">
                        <div class="author-img"></div>
                        <p class="author-p">Fabrice Lange</p>
                    </div>
                </a>

            </div>

            <button class="glider-next">
                <i class="fa fa-chevron-right"></i>
            </button>

        </div>

        <div class="rst-book">
            <h4>Découvrez la méthode des 7P qui a permis à des centaines de chefs d'entreprise de réussir la transmission de leur entreprise</h4>
            <p>(RST) Recevez le Guide stratégique "Comment réussir la transmission de son entreprise" et suivez les puissantes méthodes des professionnels</p>
            
            <form>
                <label for="identite">Identité *</label><br>
                <input type="text" name="Nom" placeholder="Nom">
                <input type="text" name="Prénom" placeholder="Prenom"><br>
                
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
        </div>
    </section>



    <?php
    get_footer()
    ?>