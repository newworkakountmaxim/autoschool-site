<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package autoschool-mariupol
 */

get_header();
?>


<div class="main-content slider" id="slider">

    <div class="slide-one">
        <div class="screen-one-main-wrapper">
            <div class="articles-start-group-container">

                <div class="articles-container">
                    <div class="article-1">
                        <h1>Лучшая автошкола в Мариуполе</h1>
                    </div>
                    <div class="article-2">
                        <h2>Обучение в Автошколе всего 5000 грн.<br> ВСЕ ВКЛЮЧЕНО (теория + практика + бензин)</h2>
                    </div>
                    <div class="leave-request-container">
                        <a class="leave-request" href="#" data-remodal-target="modal-zaiavka">ОСТАВИТЬ ЗАЯВКУ</a>
                    </div>
                </div>

                <div class="start-group-container">
                    <div class="start">START</div>
                    <div class="new-group">новых групп</div>

                    <div class="adress-school-1"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/placeholder.png" alt="">просп. Мира, 123А</div>

                    <div class="timer-to-start-1"><?php echo do_shortcode( get_field('filial_shortcode', 43) ); ?></div>

                    <div class="adress-school-2"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/placeholder.png" alt="">просп. Мира, 69</div>

                    <div class="timer-to-start-2"><?php echo do_shortcode( get_field('filial_shortcode', 44) ); ?></div>
                    
                    <ul class="social-ico-landscape">
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/socials/telegram.png" alt=""></a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/socials/viber.png" alt=""></a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/socials/instagram.png" alt=""></a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/socials/facebook.png" alt=""></a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/socials/youtube.png" alt=""></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="slide-two">

        <div class="branches-global-container">
            <h2>Филиалы Мариуполя</h2>
            <div class="branches-container">

                <?php 
                    $args = array( 'post_type' => 'contacts', 'posts_per_page' => 20 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();                      
                ?>     
                
                <div class="branch">  
                                  
                    <div class="branch-img-wrapper"> 
                        <div class="branch-title"><?php the_title(); ?></div>                       
                        <img class="branch-img" src="<?php the_post_thumbnail_url(); ?>" alt="">    
                    </div>                    
                    <div class="branch-adress">
                        <div class="branch-title-land"><?php the_title(); ?></div>                        
                        <div class="day-time">
                            
                            <div class="day-time-work">
                                <div class="d-week"> Пн </div>
                                <div class="d-week" > Вт </div>
                                <span class="time"> 9-00 до 18-00 </span>    
                            </div>

                            <div class="day-time-rest">
                                <div class="d-week" > Сб </div>
                                <span class="time"> 9-00 до 13-00 </span>
                            </div>                    

                            
                        </div>
                        <div class="phones-details">
                            <div class="phones">
                                <a href="">+38(068) 598-11-16</a>
                                <a href="">+38(095) 569-11-16</a>
                            </div>
                            <div class="details"><a href="#">Подробней</a></div>
                        </div>
                    </div>
                </div> 
                <?php endwhile;?>               

            </div>

            <h3>Публикации нашего инстаграма</h3>

            <div class="publications-container">
                <div class="public-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/instagram/1.jpg" alt="pic3">
                    <div class="title-card">Как развлечь детей в поездке</div>
                </div>   
                <div class="public-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/instagram/2.jpg" alt="pic3">
                    <div class="title-card">Как развлечь детей в поездке</div>
                </div>   
                <div class="public-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/instagram/3.jpg" alt="pic3">
                    <div class="title-card">Как развлечь детей в поездке</div>
                </div>
                <div class="public-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/instagram/4.jpg" alt="pic3">
                    <div class="title-card">Как развлечь детей в поездке</div>
                </div>
            </div>

        </div>

    </div>

    <div class="slide-three" id="faq">
        <div class="title-container">

            <h2>Наши услуги</h2>
            <div class="services-global-container">

                <div class="services-container">
                    <div class="get-category">
                        <h3>Получение категорий</h3>
                        <div class="cat-container-row"> A <img src="<?php echo get_template_directory_uri(); ?>/img/cat/cat-a.png" alt=""><div class="price">1800 грн</div></div>
                        <div class="cat-container-row"> B <img src="<?php echo get_template_directory_uri(); ?>/img/cat/cat-b.png" alt=""><div class="price">2800 грн</div></div>
                        <div class="cat-container-row"> C <img src="<?php echo get_template_directory_uri(); ?>/img/cat/cat-c.png" alt=""><div class="price">2600 грн</div></div>
                        <div class="cat-container-row"> D <img src="<?php echo get_template_directory_uri(); ?>/img/cat/cat-d.png" alt=""><div class="price">2200 грн</div></div>
                        <div class="cat-container-row"> CE <img src="<?php echo get_template_directory_uri(); ?>/img/cat/cat-ce.png" alt=""><div class="price">2800 грн</div></div>
                        <div class="cat-container-row"> BE <img src="<?php echo get_template_directory_uri(); ?>/img/cat/cat-be.png" alt=""><div class="price">2400 грн</div></div>
                        <div class="cat-container-row"> C1E <img src="<?php echo get_template_directory_uri(); ?>/img/cat/cat-c1e.png" alt=""><div class="price">2200 грн</div></div>
                        <a href="#" class="get-button">заказать</a>
                    </div>
                </div>

                <div class="services-container">
                    <div class="driving-by-category">
                        <h3>Накатка категорий</h3>
                        <div class="cat-container-row"> A <img src="<?php echo get_template_directory_uri(); ?>/img/cat/cat-a.png" alt=""><div class="price">400 грн</div></div>
                        <div class="cat-container-row"> A,B <img src="<?php echo get_template_directory_uri(); ?>/img/cat/cat-ab.png" alt=""><div class="price">400 грн</div></div>
                        <div class="cat-container-row"> C,B <img src="<?php echo get_template_directory_uri(); ?>/img/cat/cat-c-b.png" alt=""><div class="price">400 грн</div></div>
                        <div class="cat-container-row"> D,C <img src="<?php echo get_template_directory_uri(); ?>/img/cat/cat-dc.png" alt=""><div class="price">400 грн</div></div>
                        <a href="#" class="get-button">заказать</a>
                    </div>
                    <div class="adr-courses">
                        <h3>Курсы ADR</h3>
                        <div class="cat-container-row"> ADR <img src="<?php echo get_template_directory_uri(); ?>/img/cat/cat-adr.png" alt=""><div class="price">3400 грн</div></div>
                        <a href="#" class="get-button">заказать</a>
                    </div>
                </div>

                <div class="services-container">
                    <div class="package-offers">
                        <h3>Пакетные предложения</h3>
                        <div class="cat-container-row"> A+B <img src="<?php echo get_template_directory_uri(); ?>/img/cat/cat-ab.png" alt=""><div class="price">3300 грн</div></div>
                        <div class="cat-container-row"> C+B <img src="<?php echo get_template_directory_uri(); ?>/img/cat/cat-cb.png" alt=""><div class="price">5000 грн</div></div>
                        <div class="cat-container-row"> A+B+C <img src="<?php echo get_template_directory_uri(); ?>/img/cat/cat-abc.png" alt=""><div class="price">6000 грн</div></div>
                        <a href="#" class="get-button">заказать</a>
                    </div>
                </div>

                <div class="services-container">
                    <div class="private-lessons">
                        <h3>Индивидуальные уроки</h3>
                        <div class="cat-container-row"> A <img src="<?php echo get_template_directory_uri(); ?>/img/cat/cat-a.png" alt=""><div class="price">1800 грн</div></div>
                        <div class="cat-container-row"> B1 <img src="<?php echo get_template_directory_uri(); ?>/img/cat/cat-b.png" alt=""><div class="price">2800 грн</div></div>
                        <div class="cat-container-row"> C1,C <img src="<?php echo get_template_directory_uri(); ?>/img/cat/cat-c.png" alt=""><div class="price">2600 грн</div></div>
                        <a href="#" class="get-button">заказать</a>
                    </div>
                    <div class="weekend-group">
                        <h3>Группа выходного дня</h3>
                        <p>ул. Школьная 13,<br> Сб,Вс с 12:00 до 15:00</p>
                        <a href="#" class="get-button">заказать</a>
                    </div>

                </div>

            </div>
        </div>

    </div>


    <div class="slide-four">

        <div class="title-about-container">

            <div class="info-global-container">

                <div class="title-info">
                    <h2>Автошкола АНТАРЕС в&nbsp;Мелитополе это...</h2>
                </div>

                <div class="info-container">
                    <div class="info-blocks">
                        <div class="num">2</div>
                        <div class="info">фелиала в городе</div>
                    </div>
                    <div class="info-blocks">
                        <div class="num">6</div>
                        <div class="info">инструторов и преподавателей</div>
                    </div>
                    <div class="info-blocks">
                        <div class="num">187</div>
                        <div class="info">выпустников за все время</div>
                    </div>
                </div>

                <div class="title-reason-container">
                    <h3>6 причин выбрать именно нас</h3>
                </div>

                <div class="reason-container">
                    <div class="reason-blocks">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about/instructor.png" alt="">
                        <div class="coment">Опытные инструкторы</div>
                    </div>
                    <div class="reason-blocks">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about/calendar.png" alt="">
                        <div class="coment">Гибкий график</div>
                    </div>
                    <div class="reason-blocks">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about/goal.png" alt="">
                        <div class="coment">Высокие показатели обучения</div>
                    </div>
                    <div class="reason-blocks">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about/exp.png" alt="">
                        <div class="coment">Многолетний опыт</div>
                    </div>
                    <div class="reason-blocks">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about/location.png" alt="">
                        <div class="coment">Расположение фелиалов</div>
                    </div>
                    <div class="reason-blocks">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about/autoparc.png" alt="">
                        <div class="coment">Собственный автопарк</div>
                    </div>
                </div>
            </div>


            <div class="video-container">

                <div class="title-video">
                    <h3>Как правильно выбрать автошколу?</h3>
                </div>

                <div class="video-wrapper">
                    <div class="video">
                        <div class="thumb-wrap">
                            <iframe width="1280" height="720" src="https://www.youtube.com/embed/7Nz5F70TLg0"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="video-coment-container">
                        <div class="video-coment">
                            Обучение во всех филиалах, осуществляется в больших и комфортных помещениях. Обучение
                            осуществляют опытные и высококвалифицированные преподаватели и инструкторы. Для удобства наших
                            учеников обучение во всех филиалах автошколы проводится утром и вечером. Помимо этого «Антарес»
                            может похвастаться большим автопарком Эта автошкола в Запорожье одна из немногих, где
                            практические курсы вождения проводятся на современных автомобилях, находящихся в отличном
                            техническом состоянии. Это в свою очередь позволяет получать от процесса
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    
    <div class="slide-five">
        <div class="docs-stages-container">
            <div class="title-doc-block-container">
                <div class="docs-title">
                    <h2>Какие документы нужны для обучения в автошколе</h2>
                </div>
                <div class="docs-blocks-container">
                    <div class="doc-block">
                        <img class="doc-img" src="<?php echo get_template_directory_uri(); ?>/img/docs-stage/id-card.png" alt="doc-img">
                        <div class="doc-description">Паспорт</div>
                    </div>
                    <div class="doc-block">
                        <img class="doc-img" src="<?php echo get_template_directory_uri(); ?>/img/docs-stage/id-code-card.png" alt="doc-img">
                        <div class="doc-description">Копия ИИ кода</div>
                    </div>
                    <div class="doc-block">
                        <img class="doc-img" src="<?php echo get_template_directory_uri(); ?>/img/docs-stage/girl-photography.png" alt="doc-img">
                        <div class="doc-description">Фото 2шт. 3*4</div>
                    </div>
                    <div class="doc-block">
                        <img class="doc-img" src="<?php echo get_template_directory_uri(); ?>/img/docs-stage/medic.png" alt="doc-img">
                        <div class="doc-description">Медицинска справка</div>
                    </div>
                </div>
            </div>

            <div class="title-stage-blocks-container">
                <div class="title-stage">
                    <h2>Этапы получения прав</h2>
                </div>

                <div class="stage-blocks-container">
                    <div class="stage-block">
                        <div class="title-stage-block">Шаг 1: Подготовка документов</div>
                        <div class="description-stage">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam
                            eligendi enim magnam quis! Fuga, optio!</div>
                    </div>
                    <div class="stage-block">
                        <div class="title-stage-block">Шаг 2: Обучение в школе</div>
                        <div class="description-stage">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam
                            eligendi enim magnam quis! Fuga, optio!</div>
                    </div>
                    <div class="stage-block">
                        <div class="title-stage-block">Шаг 3: Школьный экзамен</div>
                        <div class="description-stage">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam
                            eligendi enim magnam quis! Fuga, optio!</div>
                    </div>
                    <div class="stage-block">
                        <div class="title-stage-block">Шаг 4: Сервисный центр МВД</div>
                        <div class="description-stage">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam
                            eligendi enim magnam quis! Fuga, optio!</div>
                    </div>
                    <div class="stage-block">
                        <div class="title-stage-block">Шаг 5: Сдача экзамена</div>
                        <div class="description-stage">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam
                            eligendi enim magnam quis! Fuga, optio!</div>
                    </div>
                    <div class="stage-block">
                        <div class="title-stage-block">Шаг 6: Твоя очередь рулить</div>
                        <div class="description-stage">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam
                            eligendi enim magnam quis! Fuga, optio!</div>
                    </div>
                </div>

                <div class="stage-blocks-container-accordion">

                    <div class="title-stage-block">Шаг 1: Подготовка документов</div>
                    <div class="description-stage">1Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam
                        eligendi enim magnam quis! Fuga, optio!</div>

                    <div class="title-stage-block">Шаг 2: Обучение в школе</div>
                    <div class="description-stage">2Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam
                        eligendi enim magnam quis! Fuga, optio!</div>

                    <div class="title-stage-block">Шаг 3: Школьный экзамен</div>
                    <div class="description-stage">3Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam
                        eligendi enim magnam quis! Fuga, optio!</div>

                    <div class="title-stage-block">Шаг 4: Сервисный центр МВД</div>
                    <div class="description-stage">4Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam
                        eligendi enim magnam quis! Fuga, optio!</div>

                    <div class="title-stage-block">Шаг 5: Сдача экзамена</div>
                    <div class="description-stage">1Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam
                        eligendi enim magnam quis! Fuga, optio!</div>

                    <div class="title-stage-block">Шаг 6: Твоя очередь рулить</div>
                    <div class="description-stage">2Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam
                        eligendi enim magnam quis! Fuga, optio!</div>

                </div>

            </div>

        </div>

    </div>

    

    <div class="slide-six">
        <div class="screen-six-main-container">

            <div class="screen-six-about-container">
                <div class="screen-six-title">
                    <h2>Что делает автошколу Антарес лидером?</h2>
                </div>
                <div class="screen-six-description-container">
                    <div class="screen-six-description">Обучение в Запорожье во всех филиалах, осуществляется в больших и
                        комфортных помещениях. Обучение осуществляют опытные и высококвалифицированные преподаватели и
                        инструкторы. Для удобства наших учеников
                        обучение во всех филиалах автошколы проводится утром и вечером. Помимо этого «Антарес» может
                        похвастаться большим автопарком Эта автошкола в Запорожье одна из немногих, где практические курсы
                        вождения проводятся на современных автомобилях, находящихся в отличном техническом состоянии. Это в
                        свою
                        очередь позволяет получать от процесса вождения максимальное удовольствие. Также, за время обучения
                        вождению, каждому ученику предоставляется возможность управления различными автомобилями. Такой
                        подход
                        позволяет получить более качественные навыки вождения и в дальнейшем учит быстро адаптироваться к
                        особенностям управления автомобилями различных марок. Вождение автомобиля осуществляется под
                        руководством ответственных инструкторов, опыт и профессионализм которых позволяет им спокойно
                        реагировать на любые ошибки учеников во время обучения, вселяя в них уверенность и прививая любовь к
                        вождению. Автошкола в Запорожье «Антарес» постоянно развивается и не останавливается на достигнутом.
                        Так
                        же как и ученики автошколы, преподаватели и инструктора регулярно проходят специальные экзамены для
                        подтверждения и повышения собственной квалификации. Такой подход позволяет удерживать высокую планку
                        лидерства автошколы и профессионализма её сотрудников. Также, для улучшения качества предоставляемых
                        автошколой услуг, среди её учеников регулярно проводятся опросы, в ходе которых каждый учащийся
                        может
                        выразить собственные идеи, направленные на улучшение обучения. Такой подход позволяет выявлять и
                        максимально быстро устранять возникающие недочёты. «Антарес» - это лучшая автошкола в Запорожье,
                        которая
                        стремится сделать ваше обучение вождению ещё более комфортным, эффективным и увлекательным.
                    </div>
                </div>
            </div>

            <div class="screen-six-callback-container">
                <div class="offer-callback-container">
                    <p>Оставьте заявку и получите расчет ближайшее время</p>
                </div>
                <!-- <div class="input-form-container">
                    <input type="text" placeholder="Ваше имя">
                </div>
                <div class="input-form-container">
                    <input type="text" placeholder="+38-(___)-___-__-__">
                </div>
                <div class="callback-btn-container">
                    <a href="#">Оставить заявку</a>
                </div> -->
                <?php echo do_shortcode('[contact-form-7 id="48" title="Оставить заявку"]'); ?>
                <div class="coment-container">
                    <p>Данные собираются только для связи с вами и не будут переданы третитм лицам</p>
                </div>
            </div>

        </div>

    </div>  


    <div class="slide-seven">

        <div class="screen-seven-main-container">

            <div class="screen-seven-title">
                <h2>FAQ</h2>
            </div>

            <div class="screen-seven-callback-and-FAQ-wrapper">

                <div class="screen-seven-callback-container">
                    <div class="offer-callback-container">
                        <p>Введите имя и номер мы поможем Вам</p>
                    </div>
                   <!--  <div class="input-form-container">
                        <input type="text" placeholder="Ваше имя">
                    </div>
                    <div class="input-form-container">
                        <input type="text" placeholder="+38-(___)-___-__-__">
                    </div>
                    <div class="callback-btn-container">
                        <a href="#">Перезвонить</a>
                    </div> -->
                    <?php echo do_shortcode('[contact-form-7 id="49" title="Перезвонить"]'); ?>
                    <div class="coment-container">
                        <p>Нажимая на кнопку "Заказать звонок" я даю свое согласие на обработку персональных данных и
                            принимаю условия соглашения</p>
                    </div>
                </div>

                <div class="FAQ-main-container">
                    <div class="FAQ-container">
                        
                        ​<button class="FAQ-accordion">1) Стоимость, сроки, условия обучения</button>
                        <div class="panel">
                            <p>Стоимость сроки и условия обучения в автошколе зависит от выбранной категории. Стоимость
                            обучения на
                            категорию «В» составляет 2800 грн + практические занятия. Срок обучения составляет 2 месяца.
                            Условия: для начала необходимо подать перечень документов (копия паспорта 1,2 стр., копия ИНН,
                            копия
                            документа об образовании, фото 4 шт., медицинская справка). Далее следует посещение
                            теоретических и
                            практических занятий. В конце курса осуществляется сдача школьного экзамена, затем экзамен в
                            сервисном центре МВД (ГАИ). После чего происходит получение прав.</p>
                        </div>

                        <button class="FAQ-accordion">2) Есть ли аккредитация у нашей школы</button>
                        <div class="panel">
                            <p>Конечно. В качестве подтверждения того, что автошкола имеет право обучать людей представлены
                                специальные сертификаты, ознакомиться с которыми вы можете в любом филиале автошколы.</p>
                        </div>

                        <button class="FAQ-accordion">3) Действительны ли наши права за границей</button>
                        <div class="panel">
                            <p>Действует. Но в случае переезда в другую страну на ПМЖ водительское удостоверение необходимо
                                будет
                                подтверждать, посредством сдачи экзамена по практическому вождению в стране, где Вы
                                собираетесь
                                проживать.</p>
                        </div>
                        <button class="FAQ-accordion">4) Как происходит сдача экзамена в ГАИ</button>
                        <div class="panel">
                            <p>В указанную дату и время всем ученикам необходимо прибыть в Территориальный Сервисный Центр.
                                По
                                прибытию в Сервисный Центр МВД при себе нужно иметь оригиналы паспорта, ИНН и 300 грн. (для
                                оформления пластика).
                                После регистрации всех прибывших учеников начинается теоретический экзамен. После его сдачи
                                начинается экзамен по практическому вождению автомобиля. После успешной сдачи всех экзаменов
                                в
                                течение 5 рабочих дней Вы получаете водительские удостоверения.
                                В случае не сдачи теоретического курса Вы имеете право 1 раз в 5 дней пересдавать теорию до
                                тех
                                пор,
                                пока не сдадите, в течение 10 лет. В случае не сдачи практического курса, согласно
                                Законодательству
                                Украины, Вы имеете право на 3 пересдачи. И если после третьей попытки Вам все же не удалось
                                сдать,
                                то Вы возвращаетесь в автошколу и проходите дополнительный курс по вождению (20 ч.).</p>
                        </div>
                        <button class="FAQ-accordion">5) Есть ли аккредитация у нашей школы</button>
                        <div class="panel">
                            <p>Конечно. В качестве подтверждения того, что автошкола имеет право обучать людей представлены
                                специальные сертификаты, ознакомиться с которыми вы можете в любом филиале автошколы.</p>
                        </div>
                        <button class="FAQ-accordion">6) Действительны ли наши права за границей</button>
                        <div class="panel">
                            <p>Действует. Но в случае переезда в другую страну на ПМЖ водительское удостоверение необходимо
                                будет
                                подтверждать, посредством сдачи экзамена по практическому вождению в стране, где Вы
                                собираетесь
                                проживать.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>  




</div>


<div class="remodal remodal-zaiavka SlideInleft" data-remodal-id="modal-zaiavka">
    <button data-remodal-action="close" class="remodal-close"></button>
    <div class="remodal-zaiavka-title">
        Оставьте заявку и получите расчет ближайшее время
    </div>
    <div>
         <?php echo do_shortcode('[contact-form-7 id="48" title="Оставить заявку"]'); ?>
    </div>
    <div class="remodal-zaiavka-bottom-text">
        Данные собираются только для связи с вами и не будут переданы третитм лицам
    </div>
</div>


<?php
get_footer();
