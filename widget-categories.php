<?php
function add_elementor_widget_categories( $elements_manager ) {

    $elements_manager->add_category(
        'Boilerplate',
        [
            'title' => __( 'Productions and Events', 'alteweberei-2025' ),
            'icon' => 'fas fa-temperature-high',
        ]
    );

}

add_action( 'elementor/elements/categories_registered', 'add_elementor_widget_categories' );