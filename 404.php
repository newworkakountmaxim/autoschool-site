<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package autoschool-mariupol
 */

get_header();
?>

	<style>
    .main-container-404 {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background-image: url("<?php echo get_template_directory_uri(); ?>/img/bg/bg-2.png");
        background-size: cover;
        background-position: center;
    }

    .block-404 {
        display: flex;
        flex-direction: row;
        justify-content: center;
        
    }

    .line {
        width: 25px;
        height: 227px;
        background: rgb(0, 0, 0);
    }

    .stop {
        width: 335px;
        height: 334px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background: rgb(255, 255, 255);
        border-radius: 180px;
        box-shadow: 0px 3px 6px #00000029;
        animation: main-rotate 0.9s cubic-bezier(0, 0, 0, 1);
        transform: matrix(0.97, -0.22, 0.22, 0.97, 0, 0);
    }

    .stop-inside-circle {
        width: 300px;
        height: 300px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background: #D70000 0% 0% no-repeat padding-box;
        border-radius: 180px;
    }

    .stop-inside-line {
        width: 207px;
        height: 45px;
        background: #FFFFFF 0% 0% no-repeat padding-box;
        border: 1px solid #707070;
        border-radius: 25px;
    }

    .block-text {
        display: flex;
        justify-content: center;
        text-align: center;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 40px;
        letter-spacing: 0;
        color: #000000;
    }
        .block-text p {
                width: 50%;
        }
    .button-container {
        width: 100%;
        display: flex;
        justify-content: center;
    }
    .backward {
        background: #D70000 0% 0% no-repeat padding-box;
        box-shadow: 0px 3px 6px #00000029;
        border-radius: 61px;
        padding: 1% 3%;
        font-family: 'Segoe UI';
        letter-spacing: 2.4px;
        color: #FFFFFF;
    }
    @keyframes main-rotate {
    0% {
        transform: rotateY(0deg);
    }
    10% {
        transform: rotateY(360deg);
    }
    20% {
        transform: rotateY(0deg);
    }
    100% {
        transform: rotateY(360deg);
    }

</style>

<div class="main-container-404">
    <div class="block-404">
        <img src="<?php echo get_template_directory_uri(); ?>/img/404/4.png" alt="4">
        <div class="stop">
            <div class="stop-inside-circle">
                <div class="stop-inside-line">

                </div>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/404/4.png" alt="4">
    </div>
    <div class="block-text">
        <p>Пожалуйста, будьте спокойны и вернитесь на предыдущую страницу</p>
    </div>
    <div class="button-container">
        <div class="backward">
            НАЗАД
        </div>
    </div>
</div>

<?php
get_footer();
