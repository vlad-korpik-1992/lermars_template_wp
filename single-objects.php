<?php get_header('single');?>
    <section class="hero" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/project-hero.jpg);">
        <div class="wrapper">
            <h2><?php single_post_title(); ?></h2>
            <?php echo wpautop(the_content());?>
        </div>
    </section>
    <section class="period">
        <div class="wrapper">
            <div class="perion__box perion__box--bg">
                <div class="period__box__items">
                    <div class="period__box__items__inner">
                        <h3><?php echo the_field('objects-title');?></h3>
                    </div>
                </div>
                <div class="period__box__items">
                    <?php if( have_rows('objects-period') ) : 
                        while ( have_rows('objects-period') ) : the_row();?>
                            <div class="period__box__items__desc">
                                <h4><?php echo the_sub_field('objects-period-title');?></h4>
                                <p><?php echo the_sub_field('objects-period-content');?></p>
                            </div>
                    <?php
                        endwhile;    
                     endif;?>
                </div>
            </div>
        </div>
    </section>
    <section class="period period--mt0">
        <div class="wrapper">
            <div class="perion__box">
                <div class="period__box__items">
                    <div class="period__box__items__inner">
                        <h3><?php echo the_field('technical-specifications-title');?></h3>
                        <img src="<?php echo the_field('technical-specifications-img');?>" alt="<?php echo the_field('technical-specifications-title');?>">
                        <span><?php echo the_field('technical-specifications-content');?></span>
                    </div>
                </div>
                <div class="period__box__items">
                    <?php if( have_rows('technical-specifications-period') ) : 
                        while ( have_rows('technical-specifications-period') ) : the_row();?>
                            <div class="period__box__items__desc">
                                <h4><?php echo the_sub_field('technical-specifications-period-title');?></h4>
                                <p><?php echo the_sub_field('technical-specifications-period-content');?></p>
                            </div>
                    <?php
                        endwhile;    
                     endif;?>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery">
        <?php if ( $slides = get_field('objects-gallery') ): ?>
            <div class="gallery__box">
                <?php foreach ( $slides as $slide ): ?>
                    <div class="gallery__box__items">
                        <img src="<?php echo $slide; ?>" alt="">
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif;?>
    </section>
    <section class="engineer">
        <img class="enginner__img" src="<?php bloginfo('template_url'); ?>/assets/img/engineer.png" alt="">
        <div class="wrapper">
            <div class="enginner__box">
                <div class="enginner__box__items">
                    <div class="enginner__box__items__inner">
                        <h5>Обсудите задачу <br/> с нашими инженерами</h5>
                        <p>Специалист расскажет, как решить вашу задачу, проведет аудит документов, подскажет правильный вариант решения поставленной задачи. А главное, поможет составить ТЗ в соответствии с государственными нормативами.</p>
                        <span>После консультации вы получите:</span>
                        <ul>
                            <li>Шаблонное ТЗ</li>
                            <li>Предварительный просчет</li>
                            <li>Перечень нормативных документов</li>
                        </ul>
                    </div>
                </div>
                <div class="enginner__box__items">
                    <form class="callme__form" action="#">
                        <input class="callme__form__input" type="text" name="firstname" id="firstname" placeholder="Имя">
                        <input class="callme__form__input" type="tel" name="phone" id="phone" placeholder="Телефон">
                        <button class="callme__form__btn" type="submit">Жду звонка</button>
                        <p>С вами свяжуться в течение 60 минут, после отправки обращения</p>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php get_footer();?>