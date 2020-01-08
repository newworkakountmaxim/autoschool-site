<?php
get_header();
?>


    <div class="filial-content-container">
        <div class="breadcrumb-list-filial">
            <a href="#" >Главная >> г. Мариуполь Проспект Мира, 69</a>
        </div>

        <h1><?php the_title(); ?></h1>



        <div class="blog-content-content">
            <?php the_post(); the_content(); ?>
        </div>


    </div>

<?php
get_footer();