<?php get_header('single');?>
    <section class="hero" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/about-hero.jpg);">
        <div class="wrapper"></div>
    </section>
    <section class="period">
        <div class="wrapper">
            <div class="perion__box perion__box--bg">
                <div class="period__box__items">
                    <div class="period__box__items__inner">
                        <h3>404</h3>
						<p>Упс... Данная ошибка означает, что вы пытаетесь перейти по адресу, которого не существует.</p>
						<a class="breadcrumbs__title__link breadcrumbs__title__link--error" href="<?php echo site_url(); ?>">Хочу домой)</a>
                    </div>
                </div>
                <div class="period__box__items">
                    <div class="period__box__items__desc">   
                                
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer();?>