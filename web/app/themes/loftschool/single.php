<?php get_header(); ?>

<div class="content">
    <h1>Просмотр записи</h1>
    <div>
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
       ?>
                <h1><?php the_title(); ?></h1>
                <div class="mainContent">
                    <?php the_content(); ?>
                </div>

                <div class="extraData">
                    <h4>Price: <?php the_field('price'); ?></h4>
                    <div class="image">
                        <?php $image = get_field('image'); ?>
                        <img src="<?=$image['sizes']['thumbnail']?>" alt="">
                    </div>
                </div>
            <?php
            endwhile;
        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>