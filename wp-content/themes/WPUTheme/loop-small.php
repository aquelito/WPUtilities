<?php
include dirname( __FILE__ ) . '/z-protect.php';
?><article <?php post_class('loop-small'); ?>>
    <?php include get_template_directory() . '/tpl/loops/header-loop-small.php'; ?>
    <?php the_excerpt(); ?>
    <footer class="lpsm-metas">
        <?php the_category(', '); ?>
    </footer>
</article>
