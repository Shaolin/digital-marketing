

<?php get_header(); ?>

<div class="page-container">
    <div class="page-content">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                ?>
                <h1 class="page-title"><?php the_title(); ?></h1>
                <div class="page-thumbnail">
                    <?php the_post_thumbnail('large'); ?>
                </div>
                <div class="page-body">
                    <?php the_content(); ?>
                </div>
            <?php
            endwhile;
        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>
