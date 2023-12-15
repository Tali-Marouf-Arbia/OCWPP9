<?php
get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <video id="background-video" autoplay loop poster="wp-content/themes/foce-child/assets/images/banner.png" src=<?php echo get_stylesheet_directory_uri () . '/assets/videos/video.mp4'; ?> type="video/mp4">
            </video>
            <div class="title-container" data-0="transform: translateY(-50px);"data-500="transform: translateY(200px);">
            <img class="scroll-in logo-banner"src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo.png'; ?>">
            </div>
        </section>
        <section id="#story" class="story fade-in">
            <h2>
                <div class="scroll-fade-in">L'histoire</div>
            </h2>
            <article class="story__article">
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
            <article class="scroll-in" id="characters">
                <?php get_template_part('template-parts/personnages'); ?>
            </article>
            <article class="scroll-in" id="place">
                <div>
                    <h3>
                        <div class="scroll-fade-in">Le lieu</div>
                    </h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
                <div id="nuages-container" class="nuages-container">
                <img id="nuages" class="nuages" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/nuages.png'; ?>" alt="Nuages" data-0="transform: translateX(0);" data-600="transform: translateX(-300px);" data-anchor-target="#nuages-container" data-600-top="transform: translateX(0);"> 
                </div> 
            </article>
        </section>
        <section id="studio">
                <h2>
                <div class="scroll-fade-in">Studio Koukaki</div>
                </h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>
    </main><!-- #main -->


<?php
get_template_part('template-parts/oscar');
get_footer();
?>