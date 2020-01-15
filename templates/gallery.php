<?php
/**
 * Template Name: gallery
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
        .gallery-header{
            display:flex;
            justify-content: space-between;
        }
        .gallery-header-tabs{
            display:flex;
            align-items: center;
        }
    </style>

    <div class="filial-content-container">
        <div class="breadcrumb-list-filial">
           <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
        </div>


        <div class="gallery-header">
            <div class="gallery-header-title">
                <h1 class="blog-title-mobile"> <?php the_title(); ?></h1>
            </div>
            <div class="gallery-header-tabs">
                <a class="tablinks" onclick="openCity(event, 'one')" id="defaultOpen">Фото</a>
                <a class="tablinks" onclick="openCity(event, 'two')">Видео</a>
            </div>
        </div>


        <div class="blog-content-content">

            <div id="one" class="tabcontent">
                <h3>Фото</h3>
            </div>
            <div id="two" class="tabcontent">
                <h3>Видео</h3>
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
