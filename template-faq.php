<?php
/*
Template name: FAQ
*/
?>

<?php
get_header()
?>



<section class="faq">
        <div class="faq-container custom-container-blog">

            <div class="line-faq"></div>
            <h2>FAQ</h2>

            <div class="faq-wrapper">
                <div class="question-faq">
                    <button class="accordion"> <strong> J’ai besoin de conseil pour transmettre mon entreprise </strong> </button>
                    <div class="panel">
                        <p>Une chose est certaine, je ne peux transmettre votre entreprise à votre place. Vous seul avez géré votre entreprise pendant longues année et l’a connaissez parfaitement. Pour vous aider, je rédige chaque semaine de nouveaux articles et vais mettre en place une académie de la transmission d’entreprise. Comme je ne connais pas votre entreprise, <strong>je ne peux pas vous rassurer concernant la faisabilité de l’opération de manière spécifique pour votre entreprise.</strong> Cela dit, je suis en train de préparer un guide sur le sujet, patience :). Cependant si vous avez besoin de conseil ponctuels ou pour toute une opération, je peux vous détacher l’un de mes consultants.</p>
                    </div>
    
                    <button class="accordion"><strong>Je me suis abonné à la newsletter, et je n’ai pas reçu le guide et/ou le mp3 !</strong></button>
                    <div class="panel">
                        <p>Si vous n’avez pas reçu le <strong>mail de validation</strong>, pensez à regarder dans les <strong>courriers indésirables.</strong> Si vous avez bien validé votre inscription mais pas reçu de mail, pensez également à jeter un œil aux courriers indésirables. Dans les deux cas, <strong>ajoutez mon adresse mail</strong> (celle qui vous envoie la newsletter) à vos contacts pour éviter que mes mails soient placés en courrier indésirable.Si vous recevez les mails mais n’arrivez pas à les lire (juste une en-tête et une page blanche) : ça arrive parfois, en particulier pour les adresses orange ou wanadoo, mais uniquement sur certaines. Le texte des mails est lisible en cliquant sur « Répondre« . Si vous n’arrivez pas à cliquer sur les liens qui y sont présents, n’hésitez pas à m’envoyer un message via le formulaire de contact du blog, je vous les renverrai dans les plus brefs délais !</p>
                    </div>
    
                    <button class="accordion"><strong>A quand un forum ?</strong></button>
                    <div class="panel">
                        <p>Un forum <strong>n’est pas au programme</strong> pour le moment, et ne le sera sans doute pas de sitôt : ça représente trop de travail, et ça existe déjà à de multiples endroits (donc ça n’apporterait pas de réelle valeur ajoutée ici). </p>
                        <p>En plus, un forum est en général sympa les premiers temps quand il y a peu de monde, puis finit par devenir une grosse usine à gaz où il est difficile de trouver les sujets qui apportent vraiment quelque chose, en plus d’être régulièrement le lieu de batailles d’ego stériles dont je n’ai vraiment pas le temps de m’occuper.</p>
                        <p>Bref, <strong> je préfère créer du contenu que gérer un forum</strong></p>
                    </div>

                    <button class="accordion"><strong>Je recherche un article du blog en particulier mais je ne le trouve pas</strong></button>
                    <div class="panel">
                        <p>Le blog est muni d’un champ de recherche <strong> en bas de la colonne de droite.</strong> Si vous n’arrivez pas à trouver l’article que vous cherchez, vous pouvez également passer par Google en ajoutant site:reussir-sa-transmission.com après vos termes de recherche. J’ai également mis en place un best of des articles indispensables, et également un plan du site qui regroupe tous les articles par catégorie. J’espère qu’avec tout ça, vous y trouverez votre bonheur !</p>
                    </div>
    
                </div>

                <div class="faq-img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/conversation.png' ?>" alt="" class="faq-img">
                </div>
                
            </div>
            

        </div>
    </section>


    <?php if( have_posts() ): while( have_posts() ): the_post();?>


    <?php the_content();?>

    <?php endwhile; else: endif;?>



<?php
get_footer()
?>