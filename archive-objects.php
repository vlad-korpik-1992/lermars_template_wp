<?php
  /**
  * Template Name: Объекты
  */
  ?>
<?php get_header('single');?>
    <section class="work work--objects">
        <div class="work__box">
            <?php  
                $args = array (
                    'post_type' => 'objects',
                    'numberposts' => -1,
                    'order' => 'DESC',
                    'orderby'   => 'meta_value',
                    'suppress_filters' => true,
                );
            $result = wp_get_recent_posts($args);
            foreach ($result as $posts) :?>
                <div class="work__box__items">
                    <a class="work__box__items__link" href="<?php echo get_permalink($posts['ID']); ?>">
                        <div class="work__box__items__img" style="background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, #000000 96.87%), url(<?php the_field('objects-external-img', $posts['ID']);?>);"></div>
                        <h3><?php echo $posts['post_title'];?></h3>
                        <div class="work__box__items__list">
                            <span><?php the_field('objects-external-location-title', $posts['ID']);?></span>
                            <p><?php the_field('objects-external-location', $posts['ID']);?></p>
                        </div>
                        <div class="work__box__items__list">
                            <span><?php the_field('objects-external-start-title', $posts['ID']);?></span>
                            <p><?php the_field('objects-external-start', $posts['ID']);?></p>
                        </div>
                        <div class="work__box__items__list">
                            <span><?php the_field('objects-external-operation-title', $posts['ID']);?></span>
                            <p><?php the_field('objects-external-operation', $posts['ID']);?></p>
                        </div>
                        <div class="work__box__items__list">
                            <span><?php the_field('objects-external-list-works', $posts['ID']);?></span>
                            <p><?php the_field('objects-external-list-works', $posts['ID']);?></p>
                        </div>
                    </a>
                </div>
            <?php endforeach; wp_reset_postdata();?>
        </div>
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