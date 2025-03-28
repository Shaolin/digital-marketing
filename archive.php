<?php get_header(); ?>

<h1 class="archive-title"><?php the_archive_title(); ?></h1>
<div class="container">
    

    <div class="post-grid">
        <?php
        // Define the number of posts per page
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 6, // Show 6 posts per page
            'paged'          => $paged,
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
        ?>
                <div class="post-item">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail('medium'); ?>
                            </div>
                        <?php endif; ?>
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_excerpt(); ?></p>
                    </a>
                </div>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No posts found.</p>';
        endif;
        ?>
    </div>

    
</div>
<!-- Pagination -->
<div class="pagination">
        <?php
        echo paginate_links(array(
            'total'        => $query->max_num_pages,
            'current'      => max(1, get_query_var('paged')),
            'prev_text'    => '&laquo; Prev',
            'next_text'    => 'Next &raquo;',
        ));
        ?>
    </div>

<?php get_footer(); ?>
