<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package autoschool-mariupol
 */

?>
    <div class="footer">
        <a class="call-back" id="openFormRight" href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/call icon.png" alt="">
            <div class="call" >ЗВОНОК</div>
        </a>
    </div>

    <div class="sidebar-right" id="sidebarRight">
        <div class="sidebar-main-container">
            <a href="#" id="closeFormRight"><img class="menu" src="<?php echo get_template_directory_uri(); ?>/img/controls/menu-close.png"></a>
        </div>
    </div>

</div><!--End global wrapper-->


<?php wp_footer(); ?>

</body>
</html>
