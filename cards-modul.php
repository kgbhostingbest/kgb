<div class="cards-module">
    <?php
    $args = array(
        'post_type' => array('banesa', 'apartmenti'),
        'posts_per_page' => -1, 
    );

    $card_query = new WP_Query($args);

    if ($card_query->have_posts()) :
        while ($card_query->have_posts()) :
            $card_query->the_post();
    ?>
            <div class="card">
                <h3><?php the_title(); ?></h3>
                <div class="card-content">
                    <?php the_excerpt(); ?>
                </div>
                <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
            </div>
    <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo 'No cards found.';
    endif;
    ?>
</div>
