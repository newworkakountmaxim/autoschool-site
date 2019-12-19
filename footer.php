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

    <div class="footer" id="callback-btn">
        <a class="call-back" href="javascript:void(0)" onclick="openNav2()">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ico/call icon.png" alt="">
            <div class="call" >ЗВОНОК</div>
        </a>
    </div>

    <div class="sidebar-right" id="sidebarRight">
        <div class="sidebar-main-container">
            <a href="javascript:void(0)" onclick="closeNav2()"><img class="menu" src="<?php echo get_template_directory_uri(); ?>/img/controls/menu-close.png"></a>
        </div>
    </div>

</div><!--End global wrapper-->
<!--</div>-->
<!-- #page -->

<script>
    function openNav2() {
        document.getElementById("sidebarRight").style.opacity = "0.8";
        document.getElementById("sidebarRight").style.right = "0";
    }

    function closeNav2() {
        document.getElementById("sidebarRight").style.opacity = "0.1";
        document.getElementById("sidebarRight").style.right = "-509px";
    }
</script>


<?php wp_footer(); ?>

</body>
</html>
