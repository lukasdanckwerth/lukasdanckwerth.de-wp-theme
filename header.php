<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head() ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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