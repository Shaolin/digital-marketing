


<?php get_header(); ?>

<div class="homepage-container">
    <section class="hero-section">
        <h1>Welcome to My Website</h1>
        <p>Your go-to place for awesome content!</p>
    </section>

    <section class="latest-posts">
        <h2>Latest Posts</h2>
        <div class="posts-grid">
            <?php
            $latest_posts = new WP_Query(array(
                'posts_per_page' => 6, // Display 6 latest posts
                'post_status' => 'publish'
            ));

            if ($latest_posts->have_posts()) :
                while ($latest_posts->have_posts()) : $latest_posts->the_post();
            ?>
                <div class="post-item">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium'); ?>
                        <h3><?php the_title(); ?></h3>
                    </a>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No recent posts found.</p>';
            endif;
            ?>
        </div>
    </section>
</div>
<!-- pagination -->


<!-- Pagination -->
<div class="pagination">
            <?php the_posts_pagination(); ?>
        </div>


<?php get_footer(); ?>
