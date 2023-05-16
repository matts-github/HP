<?php 

    get_header();

    while(have_posts()) {
        the_post(); ?>
        <h1>Static Content to be hollowed out. Underneath this I will do the hollowed out title.</h1>
        <h1><?php the_title(); ?></h1>
        <div class="generic content">
            <?php the_content(); ?>
        </div>
    <?php }

    get_footer();

?>