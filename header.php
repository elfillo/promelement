<!DOCTYPE html>
<html lang="ru">
<head>
	<?php wp_head(); ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <meta name="format-detection" content="telephone=no" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap&subset=cyrillic" rel="stylesheet">
    <title>Prom-element</title>
    <link rel="shortcut icon" type="image/x-icon" sizes="16x16" href="" />
</head>
<body>
<?php require 'parts/views/svg.php'?>
<?php require 'parts/views/form/callback.php'?>
<?php require 'parts/views/form/shop.php'?>
<div class="container">
    <header class="header">
        <a href="/" class="logo">
            <img src="<?php get_uri('img/logo.png')?>" alt="logo">
            <span class="text">Трубопроводная арматура, элементы трубопровода</span>
        </a>
        <div class="cities">
            <span>Иркутск</span>
            <ul class="dn">
                <li><a href="#">Красноярск</a></li>
                <li><a href="#">Абакан</a></li>
                <li><a href="#">Чита</a></li>
                <li><a href="#">Питер</a></li>
            </ul>
        </div>
        <div class="contacts">
            <div class="phone item">
                <svg class="icon" viewBox="0 0 384 384">
                    <use xlink:href="#icon--phone"></use>
                </svg>
                <a href="tel:88212725560">8-821-27-25-560</a>
            </div>
            <div class="place item">
                <svg class="icon" viewBox="0 0 512 512">
                    <use xlink:href="#icon--location"></use>
                </svg>
                <span>г. Сыктывкар, ул. Промышленная 3-я, 62</span>
            </div>
        </div>
        <div class="feedback">
            <div class="email">
                <svg class="icon" viewBox="0 0 512 512">
                    <use xlink:href="#icon--mail"></use>
                </svg>
                <a href="mailto:info@promelement.info">info@promelement.info</a>
            </div>
            <div class="callback open-modal--callback">
                <div class="button">Заказать звонок</div>
            </div>
        </div>
    </header>
    <nav class="nav nav_main">
        <div class="mobile">
            <span>Меню</span>
            <div class="burger"><span></span><span></span><span></span></div>
        </div>
        <div class="desc_menu">
	        <?php wp_nav_menu(array('theme_location'=>'Main') );?>
        </div>
        <div class="mobile_menu hide_list">
		    <?php wp_nav_menu(array('theme_location'=>'Main') );?>
        </div>
    </nav>
</div>
<!--<section class="container">
    <?php
/*	    dd($_SERVER['REMOTE_ADDR']);
    */?>
    <h1>Определить город по IP-адресу (AJAX)</h1>
    <div>
        IP-адрес:
        <input id="ip">
        <div id="checkIp" class="button">Check IP</div>
    </div>
    <pre id="suggestions"></pre>
</section>
<style>
    input#ip {
        display: inline-flex;
        width: 50%;
        font-size: 16px;
        padding: 4px;
        border: 1px solid grey;
    }
    #checkIp{
        display: inline-block;
    }
</style>-->


