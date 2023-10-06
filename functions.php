<?php 

function register_custom_post_types() {
    register_post_type('banesa',
        array(
            'labels' => array(
                'name' => __('Banesa'),
                'singular_name' => __('Banesa'),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'banesa'),
        )
    );

    register_post_type('apartmenti',
        array(
            'labels' => array(
                'name' => __('Apartmenti'),
                'singular_name' => __('Apartmenti'),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'apartmenti'),
        )
    );
}

add_action('init', 'register_custom_post_types');

?>