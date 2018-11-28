<?php get_header(); ?>

<div class="content">
    <div>
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
       ?>
                <h1><?php the_title(); ?></h1>
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