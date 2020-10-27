<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?<?= strtotime('now') ?>">
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.5.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/style.js"></script>
    <?php wp_head(); ?>
</head>

<body>

    <header>
        <div class="header_nav">
            <div class="logo">
                <a href="/">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/header/logo.svg" alt="lifeshiftglobalsalon">
                </a>
            </div>
            <div class="nav_btn"><i class="fas fa-bars"></i></div>
        </div>
        <div class="g_nav">
            <div class="close_btn"><i class="fas fa-times"></i></div>



            <ul>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">PROFILE</a></li>
                <li><a href="#">INTERVIEW</a></li>
                <li><a href="#">COLUMN</a></li>
                <li><a href="#">COMMUNITY</a></li>
                <li><a href="#">EXPERIENCE</a></li>
                <li><a href="#">FAVORITE</a></li>
                <li><a href="#">GALLERY</a></li>
                <li><a href="#">LETTER MAIL</a></li>
                <li><a href="#">CONTACT</a></li>

            </ul>


        </div>
    </header>