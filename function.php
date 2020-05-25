<?php


function add_sticky_column( $columns ) {
	$columns['pdf'] = __('PDF');
        return $columns;
}
add_filter( 'manage_posts_columns' , 'add_sticky_column' );
function wpdocs_posts_custom_columns( $column_name, $id ) {
    if ( 'pdf' === $column_name ) {
        echo $id;
    }
}
add_action( 'manage_posts_custom_column', 'wpdocs_posts_custom_columns', 5, 2 );

//pages
function add_sticky_column_page( $columns ) {
	$columns['pdf'] = __('PDF');
        return $columns;
}
add_filter( 'manage_page_posts_columns' , 'add_sticky_column_page' );

function wpdocs_page_posts_custom_columns( $column_name, $id ) {
    if ( 'pdf' === $column_name ) {
        echo $id;
    }
}
add_action( 'manage_page_posts_custom_column', 'wpdocs_page_posts_custom_columns', 5, 2 );

//cpt -> manage_{posttype}_posts_custom_column, manage_{posttype}_posts_columns
