<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamburger</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="f-bace__container">
        <div class="l-main">
            <header>
                <button class="c-menubutton">
                    <p>Menu</p>
                    <span></span>
                </button>

                <div class="l-header">
                    <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
                    <?php get_search_form(); ?>
                </div>
            </header>