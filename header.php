<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head() ?>
</head>

<!-- BODY -->

<body <?php body_class(); ?>>

    <!-- MENU -->
    <nav class="navigation-menu">
        <div class="container">
            <?php wp_nav_menu( [ 'theme_location' => 'primary' ] ) ?>
        </div>
    </nav>
    <!-- /MENU -->

    <div class="container">

        <!-- CONTENT HEADER -->
        <!-- <header class="site-header"> -->

        <!-- <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1> -->
        <!-- <h4><?php bloginfo( 'description' ); ?></h4> -->
        <!-- </header> -->
        <!-- /CONTENT HEADER -->