<?php get_header(); ?>

<div class="single-container">
    <div class="content-area">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                ?>
                <h1><?php the_title(); ?></h1>
                <div class="post-meta">
                    <span>Published on <?php the_date(); ?> by <?php the_author(); ?></span>
                </div>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail('large'); ?>
                </div>
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
            <?php
            endwhile;
        endif;
        ?>
    </div>

    <aside class="sidebar">
        <?php get_sidebar(); ?>
    </aside>
</div>

<?php get_footer(); ?>
