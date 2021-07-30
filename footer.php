<footer>

        <div class="footer-row custom-container-blog">
            <div class="logo-footer-clmn">
                <a href="<?php echo get_permalink(12); ?>" ><img src="<?php echo get_template_directory_uri() . '/assets/img/RST logo.png' ?>" alt="logo" class="logo-footer" width="150px"></a>
                <p>Réussir sa Transmission.com &copy; vous donne tous les conseils et les outils pour réussir seul sa transmission d'entreprise.</p>
            </div>
            <ul class="nav-links-footer">
                <li><a href="<?php echo get_permalink(12); ?>">Accueil</a></li>
                <li><a href="<?php echo get_permalink(2); ?>">A Propos</a></li>
                <li><a href="<?php echo get_permalink(99); ?>">Comment bien démarrer ?</a></li>
            </ul>
            <ul class="nav-links-footer" id="last">
                <li><a href="<?php echo get_permalink(46); ?>">FAQ</a></li>
                <li><a href="<?php echo get_permalink(78); ?>">Contact</a></li>
                <li id="metrouver"><a href="#">Me Trouver</a></li>
            </ul>

            <div class="logo-footer-clmn-mobile">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/RST logo.png' ?>" alt="logo" class="logo-footer-mobile" width="150px">
                <p>Réussir-sa-transmission ·  © 2021</p>
            </div>

            
        </div>

    </footer>

    
    <?php
        wp_footer();
    ?>



</body>
</html>