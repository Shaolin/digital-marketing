<header class="navbar">
    <div class="container">
        <div class="logo">
        <?php 
            if (function_exists('the_custom_logo')) {
                the_custom_logo();
            } 
            ?>
        </div>

        <nav class="main-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary-menu',
                'container'      => false,
                'menu_class'     => 'menu-items',
                'fallback_cb'    => false
            ));
            ?>
        </nav>

        <button class="menu-toggle" aria-label="Toggle Menu">
            <span class="hamburger"></span>
        </button>
    </div>
</header>