<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            /* Include CSS here */
        </style>
    </head>
    <body>
        <div class="top-bit">
            <div class="container">
                <a href="#">
                    <img src="<?php echo get_theme_file_uri('/images/hp-logo.png'); ?>" alt="hp logo" class="my-logo">
                </a>
                <div class="end-container">
                    <div class="burger-container">
                        <div class="burger-menu" id="burgerMenu">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="links-con">
                        <div class="nav links" id="navLinks">
                            <ul class="nav-list disapear">
                                <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Portfolio</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                            </ul>
                            
                        </div>
                    </div>
                        <div class="burger">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>       
                </div>
            </div>
            
        </div>
        
       
    </body>
</html>
