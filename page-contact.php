<?php
/**
  * Template Name: Контакты
*/
?>
<?php get_header('single');?>
    <section class="contacts">
        <div class="wrapper">
            <div class="contacts__box">
                <div class="contacts__box__items">
                    <div class="contacts__box__items__row">
                        <div class="contacts__box__items__row__column">
                            <span>Телефон</span>
                        </div>
                        <?
                            $phone = str_replace([' ', '(', ')', '-'], '', get_field('contscts-one'));
                            $phoneTwo = str_replace([' ', '(', ')', '-'], '', get_field('contscts-two'));
                            $phoneThree = str_replace([' ', '(', ')', '-'], '', get_field('contscts-three'));
                            $phoneFax = str_replace([' ', '(', ')', '-'], '', get_field('contscts-fax'));
                        ?>
                        <div class="contacts__box__items__row__column">
                            <?php
                                if( $phone != null ):
                            ?>      
                                    <a href="tel:<?php echo $phone;?>"><?php echo the_field('contscts-one');?></a>
                            <?php
                                endif;?>
                            <?php
                                if( $phoneTwo != null ):
                            ?>      
                                    <a href="tel:<?php echo $phoneTwo;?>"><?php echo the_field('contscts-two');?></a>
                            <?php
                                endif;?>
                            <?php
                                if( $phoneThree != null ):
                            ?>      
                                    <a href="tel:<?php echo $phoneThree;?>"><?php echo the_field('contscts-three');?></a>
                            <?php
                                endif;?>
                            <?php
                                if( $phoneFax != null ):
                            ?>      
                                    <a href="tel:<?php echo $phoneFax;?>">(факс) <?php echo the_field('contscts-fax');?></a>
                            <?php
                                endif;?>
                        </div>
                    </div>
                    <div class="contacts__box__items__row">
                        <div class="contacts__box__items__row__column">
                            <span>Почта</span>
                        </div>
                        <div class="contacts__box__items__row__column">
                            <?php 
                                if( get_field('contacts-email') != null ):?>
                                    <a href="mailto:<?php echo the_field('contacts-email');?>"><?php echo the_field('contacts-email');?></a>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="contacts__box__items__row">
                        <div class="contacts__box__items__row__column">
                            <span>Адрес</span>
                        </div>
                        <div class="contacts__box__items__row__column">
                            <?php 
                                if( get_field('contacts-address') != null ):?>
                                    <span><?php echo the_field('contacts-address');?></span>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="contacts__box__items__row">
                        <div class="contacts__box__items__row__column">
                            <span>Режим работы</span>
                        </div>
                        <div class="contacts__box__items__row__column">
                            <?php 
                                if( get_field('contacts-work-clock') != null ):?>
                                    <?php echo the_field('contacts-work-clock');?>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="contacts__box__items__row">
                        <div class="contacts__box__items__row__column">
                            <span>Реквизиты</span>
                        </div>
                        <div class="contacts__box__items__row__column">
                            <?php 
                                if( get_field('contacts-details') != null ):?>
                                    <?php echo the_field('contacts-details');?>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
                <div class="contacts__box__items">
                    <div class="contacts__box__items__img">
                        <img src="<?php the_post_thumbnail_url(  )?>" alt="<?php single_post_title(); ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        if( get_field('contacts-map') != null ):?>
            <section class="map">
                <div class="map__box">
                    <?php echo the_field('contacts-map');?>
                </div>
            </section>
    <?php endif;?>
    <section class="callme">
        <div class="wrapper">
            <div class="callme__box">
                <div class="callme__box__items">
                    <?php echo wpautop(the_content()); ?>
                </div>
                <div class="callme__box__items">
                    <form class="callme__form" action="#">
                        <input class="callme__form__input" type="tel" name="firstname" id="firstname" placeholder="Телефон">
                        <button class="callme__form__btn" type="submit">Жду звонка</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php get_footer();?>