<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
    </head>
    <body>
    <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/hp-logo.png" alt="Apples"> -->
        <div class="top-bit">
            <div class="container">
                <img src="<?php echo get_theme_file_uri('/images/hp-logo.png'); ?>" alt="hp logo" class="my-logo">
                <div class="end-container">
                    <div class="links">
                        <ul>
                            <li>Portfolio</li>
                            <li>Contact</li>
                        </ul>
                    </div>
                    <div class="icon-container">
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                </div>
            </div>
        </div>
    </body>