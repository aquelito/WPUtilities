<?php
global $post;
$metas = array();

$metas['og_sitename'] = array(
    'property' => 'og:site_name',
    'content' => htmlentities( get_bloginfo( 'name' ) )
);

$metas['og_type'] = array(
    'property' => 'og:type',
    'content' => 'blog'
);

if ( is_single() ) {
    // Meta description
    $meta_description = str_replace( array( "\n", "\t", '   ', '  ' ), ' ', trim( strip_tags( $post->post_content ) ) );
    $metas['description'] = array(
        'name' => 'description',
        'content' => substr( $meta_description, 0, 200 ) . ' ...'
    );
    $metas['og_title'] = array(
        'property' => 'og:title',
        'content' => get_the_title()
    );
    $metas['og_url'] = array(
        'property' => 'og:url',
        'content' => get_permalink()
    );
}

foreach ( $metas as $values ) {
    echo '<meta';
    foreach ( $values as $name => $value ) {
        echo ' '.$name.'="' . $value . '"';
    }
    echo ' />';
}
