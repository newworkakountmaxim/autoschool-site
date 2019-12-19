<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package autoschool-mariupol
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="global-wrapper">

        <div class="header">

            <?php the_custom_logo(); ?>

            <div class="global-phones-container">
                <div class="number-phone-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/call-answer.png">
                    <div class="number-phone">+38 (050) 963 20 10</div>
                </div>

                <div class="number-phone-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/call-answer.png">
                    <div class="number-phone">+38 (050) 963 20 10</div>
                </div>

                <div class="number-phone-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico/call-answer.png">
                    <div class="number-phone">+38 (050) 963 20 10</div>
                </div>
            </div>

        </div>

        <div class="menu-button">

            <a href="javascript:void(0)" onclick="openNav()"><img class="m-but" src="<?php echo get_template_directory_uri(); ?>/img/controls/menu.png"></a>

            <ul class="social-ico">
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/socials/telegram.png" alt=""></a></li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/socials/viber.png" alt=""></li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/socials/instagram.png" alt=""></a></li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/socials/facebook.png" alt=""></a></li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/socials/youtube.png" alt=""></a></li>
            </ul>

            <div class="scroller">
                <div class="vertical-text">scroll down</div>
                <img class="mouse" src="<?php echo get_template_directory_uri(); ?>/img/controls/mouse.png" alt="">
            </div>

        </div>

        <script>
            function openNav() {
                document.getElementById("sidebarLeft").style.opacity = "0.8";
                document.getElementById("sidebarLeft").style.left = "0";
            }

            function closeNav() {
                document.getElementById("sidebarLeft").style.opacity = "0.1";
                document.getElementById("sidebarLeft").style.left = "-495px";
            }
        </script>

        <div class="sidebar-left" id="sidebarLeft">

            <div class="menu-logo-block">
                <a href="javascript:void(0)" onclick="closeNav()"><img class="menu" src="<?php echo get_template_directory_uri(); ?>/img/controls/menu-close.png"></a>
                <?php the_custom_logo(); ?>
            </div>

            <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
                'menu_class'     => 'menu-list'
            ) );
            ?>


            <div class="phone-social-menu">

                <div class="global-container-phone-menu">

                    <div class="container-phone">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/call-answer-white/call-answer.png">
                        <div class="number-phone"><a href="tel:+38050962010">+38 (050) 963 20 10</a></div>
                    </div>

                    <div class="container-phone">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/call-answer-white/call-answer.png">
                        <div class="number-phone"><a href="tel:+38050962010">+38 (050) 963 20 10</a></div>
                    </div>

                    <div class="container-phone">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico/call-answer-white/call-answer.png">
                        <div class="number-phone"><a href="tel:+38050962010">+38 (050) 963 20 10</a></div>
                    </div>

                </div>

                <div class="social-ico-menu">

                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/socials/telegram.png" alt=""></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/socials/viber.png" alt="" style="width: 62px; height: 69px;"></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/socials/instagram.png" alt=""></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/socials/facebook.png" alt=""></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/socials/youtube.png" alt=""></a>

                </div>

            </div>

        </div>





