<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package autoschool-mariupol
 */

get_header();
?>

    <div class="filial-content-container">
        <div class="breadcrumb-list-filial">
            <a href="#" >Главная >> г. Мариуполь Проспект Мира, 69</a>
        </div>
        <div class="title-filial">
            <h1> <?php the_title(); ?></h1>
        </div>
        <div class="contact-phone-container">
            <?php the_content(); ?>
        </div>
    </div>

<?php
get_footer();
