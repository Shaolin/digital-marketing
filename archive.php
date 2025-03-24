<?php get_header(); ?>

<!-- Archive Title at the Top -->
<div class="archive-header">
    <h1>
        <?php 
        if (is_category()) {
            single_cat_title();
        } elseif (is_tag()) {
            single_tag_title();
        } elseif (is_author()) {
            the_post();
            echo 'Author: ' . get_the_author();
            rewind_posts();
        } elseif (is_day()) {
            echo 'Daily Archives: ' . get_the_date();
        } elseif (is_month()) {
            echo 'Monthly Archives: ' . get_the_date('F Y');
        } elseif (is_year()) {
            echo 'Yearly Archives: ' . get_the_date('Y');
        } else {
            echo 'Archives';
        }
        ?>
    </h1>
</div>

<div class="container">
    <div class="archive-posts">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="post">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_post_thumbnail('medium'); ?>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
            </article>
        <?php endwhile; else : ?>
            <p>No posts found.</p>
        <?php endif; ?>
    </div>

    <div class="pagination">
        <?php
        echo paginate_links(array(
            'prev_text' => __('« Prev'),
            'next_text' => __('Next »'),
        ));
        ?>
    </div>
</div>

<?php get_footer(); ?>
