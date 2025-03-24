<?php get_header(); ?>

<main class="search-results-container">
    <h1 class="search-title">Search Results for: "<?php echo get_search_query(); ?>"</h1>

    <?php if (have_posts()) : ?>
        <div class="search-results-grid">
            <?php while (have_posts()) : the_post(); ?>
                <article class="search-item">
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                        </a>
                    <?php endif; ?>

                    <div class="search-content">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php echo get_the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <div class="search-pagination">
            <?php echo paginate_links(); ?>
        </div>

    <?php else : ?>
        <p class="no-results">Sorry, no results found for "<?php echo get_search_query(); ?>". Try another keyword.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
