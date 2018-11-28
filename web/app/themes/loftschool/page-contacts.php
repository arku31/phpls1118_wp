<?php
/**
 * Template Name: PageContacts
 */
get_header(); ?>

<div class="content">
    <h1>Страница контактов и о Нас!</h1>
    <div>
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
       ?>
                <h2><?php the_title(); ?></h2>
                <div class="mainContent">
                    <?php the_excerpt(); ?>
                </div>
            <?php
            endwhile;
        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>