<?php
/**
 * Template Name: blog
 * @package
 * @copyright
 */
get_header();
?>
    <style>
/*    Для табов */
        .tab a {
            padding: 14px 16px;
            transition: 0.3s;
        }
        .tab a:hover, .tab a.active {
            color: red;
        }
        .tablinks {
            display: block;
        }
        .tabcontent {
            display: none;
            padding: 6px 12px;
            -webkit-animation: fadeEffect 1.4s;
            animation: fadeEffect 1.4s;
        }
        @-webkit-keyframes fadeEffect {
            from {opacity: 0;}
            to {opacity: 1;}
        }
        @keyframes fadeEffect {
            from {opacity: 0;}
            to {opacity: 1;}
        }
/* Конец    Для табов */
        .blog-content{
            display: flex;
        }

        .blog-content-sidebar{
            border:1px solid red;
            width: 30%
        }

        .blog-content-content{
            border:1px solid red;
            width: 70%
        }

        .blog-content-sidebar-categories,
        .blog-content-sidebar-social{
            background: #fff;
            padding:10px 20px;
            margin: 5px 0 30px;
            border: 1px solid 444
        }





/*    Все остальное. Тут чистая схематика */

/* Конец    Все остальное. Тут чистая схематика */
    </style>


    <div class="filial-content-container">
        <div class="breadcrumb-list-filial">
            <a href="#" >Главная >> г. Мариуполь Проспект Мира, 69</a>
        </div>

        <h1 class="blog-title-mobile"> <?php the_title(); ?></h1>
        <?php the_post(); the_content(); ?>

        <div class="blog-content">

            <div class="blog-content-sidebar">
                <h1 class="blog-title-desktop"> <?php the_title(); ?></h1>
                <div class="blog-content-sidebar-categories">
                    <div class="blog-content-sidebar-categories-title">Категории:</div>
                    <a class="tablinks" onclick="openCity(event, 'one')" id="defaultOpen">Все</a>
                    <a class="tablinks" onclick="openCity(event, 'two')">Автолюбитель</a>
                    <a class="tablinks" onclick="openCity(event, 'three')">Автоновости</a>
                    <a class="tablinks" onclick="openCity(event, 'four')">Энциклопедия водителя</a>
                    <a class="tablinks" onclick="openCity(event, 'five')">Мир авто</a>
                </div>
                <div class="blog-content-sidebar-social">
                    <div class="blog-content-sidebar-social-title">Блольше новостей тут:</div>
                </div>
             </div>

            <div class="blog-content-content">
                <div id="one" class="tabcontent">
                    <h3>Все</h3>
                </div>

                <div id="two" class="tabcontent">
                    <h3>Автолюбитель</h3>
                </div>

                <div id="three" class="tabcontent">
                    <h3>Автоновости</h3>
                </div>

                <div id="four" class="tabcontent">
                    <h3>Энциклопедия водителя</h3>
                </div>

                <div id="five" class="tabcontent">
                    <h3>Мир авто</h3>
                </div>
            </div>

        </div>

    </div>
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
<?php
get_footer();
