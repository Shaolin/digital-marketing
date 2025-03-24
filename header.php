<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>
<body>
    
<!-- adding menu -->




<header class="navbar">
    <div class="container">
        <!-- Logo -->

        <div class="logo" >
        <a href="<?php echo home_url(); ?>">
            <?php 
            if (function_exists('the_custom_logo')) {
                the_custom_logo();
            } else {
                echo '<h1>' . get_bloginfo('name') . '</h1>';
            }
            ?>
        </a>
        </div>

        <!-- Hamburger Icon -->
        <button class="hamburger" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <!-- Navigation Menu -->
        <nav class="nav-links">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary-menu',
                'container'      => false,
                'menu_class'     => 'nav-list',
                'fallback_cb'    => '__return_false',
            ));
            ?>

<div class="search-icon" id="searchIcon">
    <i class="fas fa-search"></i>
</div>
<div class="search-form-container" id="searchForm">
    <form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
        <input type="text" name="s" id="s" placeholder="Search...">
        <button type="submit"><i class="fas fa-search"></i></button>
    </form>
</div>

        </nav>
      
</header>





     
