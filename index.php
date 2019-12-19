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

            <div class="slide-one" id="services">
                <div class="slide-one-wrapper">
                    <div class="container-content">

                        <div class="articles">
                            <div class="article-1"><h1>Лучшая автошкола в Мариуполе</h1></div>
                            <div class="article-2"><h2>Обучение в Автошколе всего 5000 грн.<br> ВСЕ ВКЛЮЧЕНО (теория + практика + бензин)</h2></div>
                        </div>

                        <div class="start-group">
                            <div class="start">START</div>
                            <div class="new-group">новых групп</div>

                            <div class="adress-school-1"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/placeholder.png" alt="">просп. Мира, 123А</div>

                            <div class="timer-to-start-1"></div>

                            <div class="adress-school-2"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/placeholder.png" alt="">просп. Мира, 69</div>

                            <div class="timer-to-start-2"></div>
                        </div>

                    </div>

                    <div class="container-footer">
                        <a class="leave-request" href="#">ОСТАВИТЬ ЗАЯВКУ</a>

                        <ul class="social-ico">
                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/socials/telegram.png" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/socials/viber.png" alt="" style="width: 62px; height: 69px;"></a></li>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/socials/instagram.png" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/socials/facebook.png" alt=""></a></li>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/socials/youtube.png" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="slide-two" id="filials">

                <div class="branches-global-container">
                    <h2>Филиалы Мариуполя</h2>

                    <div class="branches-container">

                        <div class="branch">
                            <img class="branch-img" src="" alt="pict1">

                            <div class="branch-adress">
                                <span>Проспект Мира, 123А</span>
                                <div class="day-time">
                                    <div class="d-week"> Пн </div><div class="d-week" > Вт </div><span class="time"> 9-00 до 18-00 </span><div class="d-week" > Сб </div><span class="time"> 9-00 до 13-00 </span>
                                </div>
                                <div class="phones-details">
                                    <div class="phones">+38(068) 598-11-16<br> +38(095) 569-11-16</div>
                                    <div class="details"><a href="#">Подробней</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="branch">
                            <img class="branch-img" src="" alt="pict2">
                            <div class="branch-adress">
                                <span>Проспект Мира, 69 ТРЦ Украина</span>
                                <div class="day-time">
                                    <div class="d-week"> Пн </div><div class="d-week" > Вт </div><span class="time"> 9-00 до 18-00 </span><div class="d-week" > Сб </div><span class="time"> 9-00 до 13-00 </span>
                                </div>
                                <div class="phones-details">
                                    <div class="phones">+38(068) 145-66-63<br>+38(050) 601-66-63</div>
                                    <div class="details"><a href="#">Подробней</a></div>
                                </div>
                            </div>
                        </div>

                        <div class="branch">
                            <img class="branch-img" src="" alt="pict2">
                            <div class="branch-adress">
                                <span>Проспект Мира, 69 ТРЦ Украина</span>
                                <div class="day-time">
                                    <div class="d-week"> Пн </div><div class="d-week" > Вт </div><span class="time"> 9-00 до 18-00 </span><div class="d-week" > Сб </div><span class="time"> 9-00 до 13-00 </span>
                                </div>
                                <div class="phones-details">
                                    <div class="phones">+38(068) 145-66-63<br>+38(050) 601-66-63</div>
                                    <div class="details"><a href="#">Подробней</a></div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <h3>Публикации нашего инстаграма</h3>

                    <div class="publications-container">

                        <div class="public-card"><img src="" alt="pic3" style="width: 225px; height: 227px; border:1px solid black"><div class="title-card">Как развлечь детей в поездке</div></div>
                        <div class="public-card"><img src="" alt="pic3" style="width: 225px; height: 227px; border:1px solid black"><div class="title-card">Гимнастика за рулём</div></div>
                        <div class="public-card"><img src="" alt="pic3" style="width: 225px; height: 227px; border:1px solid black"><div class="title-card">Как распознать автомобиль-утопленник</div></div>
                        <div class="public-card"><img src="" alt="pic3" style="width: 225px; height: 227px; border:1px solid black"><div class="title-card">Как развлечь детей в поездке</div></div>
                        <div class="public-card"><img src="" alt="pic3" style="width: 225px; height: 227px; border:1px solid black"><div class="title-card">Гимнастика за рулём</div></div>

                    </div>

                </div>

            </div>

            <div class="slide-three" id="faq">
                <div class="title-container">
                    <h2>Наши услуги</h2>
                    <div class="services-global-container"> <!--row-->

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
                            <h2>Автошкола АНТАРЕС в Мелитополе это...</h2>
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

                        <div class="title-video"><h3>Как правильно выбрать автошколу?</h3></div>

                        <div class="video-wrapper">
                            <div class="video">
                                <div class="thumb-wrap">
                                    <iframe width="1280" height="720" src="https://www.youtube.com/embed/7Nz5F70TLg0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="video-coment">Обучение во всех филиалах, осуществляется в больших и комфортных помещениях. Обучение осуществляют опытные и высококвалифицированные преподаватели и инструкторы. Для удобства наших учеников обучение во всех филиалах автошколы проводится утром и вечером. Помимо этого «Антарес» может похвастаться большим автопарком Эта автошкола в Запорожье одна из немногих, где практические курсы вождения проводятся на современных автомобилях, находящихся в отличном техническом состоянии. Это в свою очередь позволяет получать от процесса</div>
                        </div>

                    </div>

                </div>

            </div>

            <div class="slide-five">
                <div class="docs-stages-container">
                    <div class="title-doc-block-container">
                        <div class="docs-title"><h2>Какие документы нужны для обучения в автошколе</h2></div>
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
                        <div class="title-stage"><h2>Этапы получения прав</h2></div>
                        <div class="stage-blocks-container">
                            <div class="stage-block">
                                <div class="title-stage-block">Шаг 1: Подготовка документов</div>
                                <div class="description-stage">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam eligendi enim magnam quis! Fuga, optio!</div>
                            </div>
                            <div class="stage-block">
                                <div class="title-stage-block">Шаг 2: Подготовка документов</div>
                                <div class="description-stage">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam eligendi enim magnam quis! Fuga, optio!</div>
                            </div>
                            <div class="stage-block">
                                <div class="title-stage-block">Шаг 3: Подготовка документов</div>
                                <div class="description-stage">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam eligendi enim magnam quis! Fuga, optio!</div>
                            </div>
                            <div class="stage-block">
                                <div class="title-stage-block">Шаг 4: Подготовка документов</div>
                                <div class="description-stage">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam eligendi enim magnam quis! Fuga, optio!</div>
                            </div>
                            <div class="stage-block">
                                <div class="title-stage-block">Шаг 5: Подготовка документов</div>
                                <div class="description-stage">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam eligendi enim magnam quis! Fuga, optio!</div>
                            </div>
                            <div class="stage-block">
                                <div class="title-stage-block">Шаг 6: Подготовка документов</div>
                                <div class="description-stage">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam eligendi enim magnam quis! Fuga, optio!</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="slide-five">
                <div class="docs-stages-container">
                    <h1>Lorem ipsum dolor sit amet.</h1>
                    <div class="">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias at atque culpa deserunt dolorum error esse hic illum libero nisi odio officia quam quasi reiciendis, repellat repudiandae saepe sunt tenetur. Animi assumenda eius inventore minima modi nisi nobis odio pariatur perferendis placeat provident quaerat quasi quibusdam, quidem quisquam, soluta tenetur.
                    </div>
                </div>
            </div>
        </div>




<?php
get_footer();
