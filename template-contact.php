<?php
/*
Template name: CONTACT
*/
?>

<?php
get_header()
?>



<div class="container-contact-form custom-container-blog">

    <div class="contact-form-content">

        <div class="line archive-line"></div>
        <h2>Contact</h2>

        <p>
            J’essaie de répondre au maximum aux mails que vous m’envoyez, mais j’en reçois beaucoup chaque jour. N’hésitez quand même pas trop à me poser vos questions, mais avant ça, vous devez vérifier si la réponse n’est pas déjà :
        </p>

        <ul>
            <li>dans la <a href="faq">Foire aux Questions</a></li>
            <li>dans un des articles du site : utilisez pour cela la fonction recherche du blog ou consultez la section archives du blog pour consulter l'ensemble des articles deja mis en ligne.</li>
        </ul>

        <p>
            Si (et seulement si) il n’y a pas de réponse à votre question, n’hésitez pas à me contacter via le formulaire ci-dessous, je vous répondrai avec plaisir ! :)
        </p>

        <p>
        Vu le nombre très important de mails, je ne peux pas répondre à tous. En particulier, je ne réponds plus aux mails mal rédigés, ou pour lesquels vous n’avez manifestement pas cherché sur le blog avant.
        </p>

        <p>
        Au contraire, <strong>je réponds avec plaisir aux questions pertinentes et auxquelles le blog n’apporte pas encore de réponse.</strong>
        </p>
        <p>
        Note aux annonceurs, régies pub, etc. : je ne vends <strong>AUCUN espace publicitaire sur le blog</strong>, et je n’achète pas de publicité non plus. Merci de ne pas me contacter à ce sujet, c’est une perte de temps ;) <br>Je ne fais pas non plus d’article sponsorisé.
        </p>

        <p>
        Je ne fais <strong>PAS non plus de copié-collé de communiqués de presse</strong>, ce n’est pas ma ligne éditoriale. La réponse à la question « pourriez-vous relayer notre communiqué de presse ? » est donc non, quel qu’il soit.
        </p>

    </div>

    <img src="<?php echo get_template_directory_uri() . '/assets/img/mail.png' ?>" alt="contact" class="contact-form-img">


</div>


<div class="wrapper-contact-form">

    <h3>Formulaire de Contact</h3>
    <?php if( have_posts() ): while( have_posts() ): the_post();?>


        <?php the_content();?>

    <?php endwhile; else: endif;?>
    
</div>




<?php
get_footer()
?>