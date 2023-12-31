<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
      
           <video class="banner__video" autoplay muted loop  poster="<?php echo get_template_directory_uri() . '/assets/images/banner.png'; ?>">
                 <source src="<?php echo get_stylesheet_directory_uri() . '/assets/videos/video-koukaki.mp4'; ?>" type="video/mp4">
           
            </video>
            <div class=banner__container data-0="transform: translateY(0px);"data-500="transform: translateY(250px);">
                <img class="banner__img" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">   
            </div >
        </section>
        
        <section id="story" class="story">
            
            <article id="" class="story__article">
                <h2><span class="titreAnime">L'</span><span class="titreAnime2">histoire</span></h2>
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <article id="characters">
            <div>
                <h3 id="titreh3"><span class="titreAnime">Les</span><span class="titreAnime2">&nbsp;personnages</span></h3>
            </div>
            <?php
                get_template_part('assets/templates parts/slider');
                ?>

                
            </article>
            <article id="place">
                
                <div class=title_place>
                <h3><span class="titreAnime">Le</span><span class="titreAnime2">&nbsp;lieu</span></h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>          
                <div class="big_cloud" data-1500="transform: translateX(300px);"data-2000="transform: translateX(0px);">
                    <img id="cloud1" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/big_cloud.png'; ?>" alt="big cloud">
                </div>
                <div class="little_cloud" data-1500="transform: translateX(300px);"data-2000="transform: translateX(0px);" >
                <img id="cloud2" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/little_cloud.png'; ?>" alt="little cloud">
                </div>
            </article>
        </section>
        <section id="studio">
        <h2><span class="titreAnime">Studio</span><span class="titreAnime2">&nbsp;Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>
    </main><!-- #main -->

<?php

get_template_part( 'assets/templates parts/oscar' );
get_footer();
