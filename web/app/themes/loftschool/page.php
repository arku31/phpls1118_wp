<?php get_header(); ?>

<div class="content">
    <h1>Страница!</h1>
    <div>
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
       ?>
                <h2><?php the_title(); ?></h2>
                <div class="mainContent">
                    <?php the_content(); ?>
                </div>
            <?php
            endwhile;
        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>