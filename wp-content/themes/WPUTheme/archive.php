<?php
include dirname( __FILE__ ) . '/z-protect.php';
get_header();
include get_template_directory() . '/tpl/archive/title.php';
echo '<div class="main-content">';
echo '<h1>'.$shown_title.'</h1>';
if ( is_year() || is_month() || is_day()) {
    include get_template_directory() . '/tpl/archive/dates-navigation.php';
}
echo get_the_loop();
echo '</div>';
get_footer();
