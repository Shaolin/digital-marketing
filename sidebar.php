<section class="social">
<div class="social-share">
    <h3>Share this post:</h3>
    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" class="share-btn facebook">Facebook</a>
    <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank" class="share-btn twitter">Twitter</a>
   
    <a href="https://api.whatsapp.com/send?text=<?php the_title(); ?> - <?php the_permalink(); ?>" target="_blank" class="share-btn whatsapp">WhatsApp</a>
</div>
</section>



<div class="related-posts">
    <h3>Related Posts</h3>
    <ul>
        <?php
        $categories = get_the_category();
        $category_id = $categories[0]->term_id;
        $query = new WP_Query(array(
            'cat' => $category_id,
            'posts_per_page' => 3,
            'post__not_in' => array(get_the_ID())
        ));
        while ($query->have_posts()) : $query->the_post();
        ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile;
        wp_reset_postdata(); ?>
    </ul>
</div>

