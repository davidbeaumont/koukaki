<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner fallback">  
            <video id="background-video" autoplay loop muted>
            <source src="<?php echo get_stylesheet_directory_uri() . '/assets/videos/Studio+Koukaki-vidéo+header+sans+son+(1).mp4" type="video/mp4'; ?>">
            </video>
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
        </section>
        <section id="story" class="story reveal">
            <div class="container__h2" >    
                <h2>L'histoire</h2>
            </div>
            <div class="story__flower flower">
            </div>
            <div class="story__flower2 flower">
            </div>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            <article id="characters" class="reveal">
                <div>
                    <h3>Les personnages</h3>
                    <p><?php get_template_part( 'template-parts/swiper' ); ?></p>
                </div>
            </article>
            <article id="place" class="watch reveal">
                <div>
                    <h3>Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
                <div class="blue-cloud"></div>

            </article>
        </section>


        <section id="studio" class="reveal">
            <div class="container__h2">    
                <h2>Studio Koukaki</h2>
            </div>            
            <div class="studio__flower flower"></div>
            <div class="flower2 flower"></div>
            <div class="studio__p">
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>

        </section>
    </main><!-- #main -->

<?php
get_footer();
