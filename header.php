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
    <header class="header">
        <div class="wrapper">
            <div class="header__box">
                <a class="header__box__link" href="<?php echo site_url(); ?>">
                    <img class="logo" src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="На Главную">
                </a>
                <nav class="header__menu">
                    <a href="#" class="menu__btn">
                        <span class="menu__btn--element"></span>
                    </a>
                    <ul class="header__menu__list">
                        <li class="header__menu__list__items">
                            <a class="header__menu__link" href="<?php echo get_page_link(36)?>">О компании</a>
                        </li>
                        <li class="header__menu__list__items">
                            <a class="header__menu__link" href="<?php echo get_page_link()?>">Услуги</a>
                        </li>
                        <li class="header__menu__list__items">
                            <a class="header__menu__link" href="<?php echo get_page_link()?>">Объекты</a>
                        </li>
                        <li class="header__menu__list__items">
                            <a class="header__menu__link" href="<?php echo get_page_link(8)?>">Контакты</a>
                        </li>
                        <li class="header__menu__list__items">
							<?php    
                                $phone = str_replace([' ', '(', ')', '-'], '', get_field('contscts-phone-header-footer', 8));
                            ?>
                            <a class="header__menu__link" href="<?php echo $phone;?>"><?php echo the_field('contscts-phone-header-footer', 8);?></a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header__content">
                <h1>Ведущее предприятие в области водоподготовки и очистки сточных вод.</h1>
                <p>Полный комплекс водоподготовки для объектов: от разработки технологической схемы процесса водоподготовки до монтажа.</p>
            </div>
        </div>
    </header>