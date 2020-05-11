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
