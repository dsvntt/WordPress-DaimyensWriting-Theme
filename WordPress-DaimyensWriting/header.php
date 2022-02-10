<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head() ?>
</head>
<body>

<div id="container">
    <header>
    <h1><?php bloginfo( 'name' ); ?></h1>
    </header>

    <nav id="ylanav">
        <?php $args = ['theme_location' => 'primary']; ?>
        <?php wp_nav_menu($args) ?>
    </nav>
    
