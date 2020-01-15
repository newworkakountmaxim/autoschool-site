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
        <div class="right-sidebar-main-container">
            <div class="right-sidebar-close-btn-container">
                <a href="#" id="closeFormRight"><img class="menu" src="<?php echo get_template_directory_uri(); ?>/img/controls/right-sidebar-close.png"></a>
            </div>
            <div class="big-logo-container">                
                <?php the_custom_logo(); ?>
            </div>
            <div class="offer-callback-container">
                <p>Здравствуйте, хотите мы перезвоним Вам?</p>
            </div>
            <!-- <div class="input-form-container">
                <input type="text">
            </div>
            <div class="callback-btn-container">
                <a href="#">Заказать звонок</a>
            </div> -->
            <?php echo do_shortcode('[contact-form-7 id="47" title="Контактная форма правый сайдбар"]'); ?>
            <div class="coment-container">
                <p>Нажимая на кнопку "Заказать звонок" я даю свое согласие на обработку персональных данных и принимаю условия соглашения</p>
            </div>
        </div>
    </div>

</div><!--End global wrapper-->


<?php wp_footer(); ?>

</body>
</html>
