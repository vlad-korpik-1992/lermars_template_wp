<?php
/**
  * Template Name: О компании
*/
?>
<?php get_header('single');?>
    <section class="hero" style="background-image: url(<?php the_post_thumbnail_url()?>);">
        <div class="wrapper"></div>
    </section>
    <section class="period">
        <div class="wrapper">
            <div class="perion__box perion__box--bg">
                <div class="period__box__items">
                    <div class="period__box__items__inner">
                        <?php echo wpautop(the_content());?>
                    </div>
                </div>
                <div class="period__box__items">
                    <?php if( have_rows('about-mission') ):
                        while ( have_rows('about-mission') ) : the_row();?>
                            <div class="period__box__items__desc">   
                                <div class="period__box__items__desc__box">
                                    <div class="perion__box__items__desc__box__items">
                                        <span><?php echo the_sub_field('about-mission-number');?></span>
                                    </div>
                                    <div class="perion__box__items__desc__box__items">
                                        <h4><?php echo the_sub_field('about-mission-title');?></h4>
                                        <p><?php echo the_sub_field('about-mission-content');?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </section>
    <?php if( have_rows('about-rivals') ):?>
        <section class="rivals">
            <div class="rivals__box">
                <?php while ( have_rows('about-rivals') ) : the_row();?>
                    <div class="rivals__box__items">
                        <div class="services__box__row">
                            <div class="rivals__box__items__inner">
                                <span>Конкурентные преимущества</span>
                                <span class="mobile"><?php echo the_sub_field('about-rivals-title');?></span>
                                <?php echo wpautop(get_sub_field('about-rivals-content'));?>
                            </div>
                            <div class="rivals__box__items__bg" style="background-image: url(<?php echo the_sub_field('about-rivals-img');?>);">
                                <h2><?php echo the_sub_field('about-rivals-title');?></h2>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </section>
    <?php endif;?>
    <section class="stats">
        <div class="wrapper">
            <img class="stats__img" src="<?php bloginfo('template_url'); ?>/assets/img/stats-img.png" alt="">
            <div class="stats__title"><?php echo the_field('stats-number-01');?></div>
            <div class="stats__desc"><?php echo the_field('stats-title-01');?></div>
            <div class="stats__box">
                <div class="stats__box__items">
                    <div class="stats__number"><?php echo the_field('stats-number-02');?></div>
                    <div class="stats__desc"><?php echo the_field('stats-title-02');?></div>
                </div>
                <div class="stats__box__items"></div>
                <div class="stats__box__items"></div>
                <div class="stats__box__items">
                    <div class="stats__number"><?php echo the_field('stats-number-03');?></div>
                    <div class="stats__desc"><?php echo the_field('stats-title-03');?></div>
                </div>
                <div class="stats__box__items">
                    <div class="stats__number"><?php echo the_field('stats-number-04');?></div>
                    <div class="stats__desc"><?php echo the_field('stats-title-04');?></div>
                </div>
                <div class="stats__box__items"></div>
                <div class="stats__box__items"></div>
                <div class="stats__box__items">
                    <div class="stats__number"><?php echo the_field('stats-number-05');?></div>
                    <div class="stats__desc"><?php echo the_field('stats-title-05');?></div>
                </div>
                <div class="stats__box__items">
                    <div class="stats__number"><?php echo the_field('stats-number-06');?></div>
                    <div class="stats__desc"><?php echo the_field('stats-title-06');?></div>
                </div>
                <div class="stats__box__items"></div>
                <div class="stats__box__items"></div>
                <div class="stats__box__items">
                    <div class="stats__number"><?php echo the_field('stats-number-07');?></div>
                    <div class="stats__desc"><?php echo the_field('stats-title-07');?></div>
                </div>
                <div class="stats__box__items">
                    <div class="stats__number"><?php echo the_field('stats-number-08');?></div>
                    <div class="stats__desc"><?php echo the_field('stats-title-08');?></div>
                </div>
                <div class="stats__box__items"></div>
            </div>
        </div>
    </section>
    <section class="partners">
        <div class="wrapper">
            <h2><?php echo the_field('about-partners-title');?></h2>
        </div>
        <?php if ( $slides = get_field('about-partners-slider') ): ?>
            <div class="partners__box">
                <?php foreach ( $slides as $slide ): ?>
                    <div class="partners__box__items">
                        <div class="partners__box__items__inner">
                            <img class="partners__img" src="<?php echo $slide; ?>" alt="">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif;?>
    </section>
<?php get_footer();?>