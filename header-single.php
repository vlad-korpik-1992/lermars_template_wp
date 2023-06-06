<!DOCTYPE html>
<html lang="ru">
<head>
	<?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
    <title><?php wp_title("", true); ?></title>
</head>
<body>
<header class="header--single">
        <div class="wrapper">
            <div class="header--single__box">
                <div class="header--single__box__items">
                    <a class="header--single__link" href="<?php echo site_url(); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="На Главную">
                    </a>
                </div>
                <div class="header--single__box__items">
                    <nav class="header--single__menu">
                        <a href="#" class="menu__btn">
                            <span class="menu__btn--element"></span>
                        </a>
                        <ul class="header--single__list">
                            <li class="header--single__list__items">
                                <a class="header__menu__link" href="<?php echo get_page_link(36)?>">О компании</a>
                            </li>
                            <li class="header--single__list__items">
                                <a class="header__menu__link" href="<?php echo get_page_link()?>">Услуги</a>
                            </li>
                            <li class="header--single__list__items">
                                <a class="header__menu__link" href="<?php echo site_url(); ?>/objects/">Объекты</a>
                            </li>
                            <li class="header--single__list__items">
                                <a class="header__menu__link" href="<?php echo get_page_link(8)?>">Контакты</a>
                            </li>
                            <li class="header--single__list__items">
                                <?php    
                                    $phone = str_replace([' ', '(', ')', '-'], '', get_field('contscts-phone-header-footer', 8));
                                ?>
                                <a class="header__menu__link" href="<?php echo $phone;?>"><?php echo the_field('contscts-phone-header-footer', 8);?></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="breadcrumbs">
                <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('-'); ?>
                <h1><?php single_post_title();  
                    if(is_404()): echo 'Страница не найдена';endif;
                    if( is_post_type_archive() ) : wp_title("", true);endif?>
                </h1>
            </div>
        </div>
    </header>