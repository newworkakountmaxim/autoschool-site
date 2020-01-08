<?php get_header(); ?>

    <div class="header-news header-newsFAQ">
        <img src="<?php echo get_template_directory_uri();?>/img/public.jpg" alt="Вопросы" class="img-responsive">
        <h1><?php echo get_queried_object()->name; ?></h1>
    </div>

    <div class="container news">
        <?php
        //$cat_news =   single_term_title('',0 );

        $args = array(
            'show_option_all'    => '',
            'show_option_none'   => __('No categories'),
            'orderby'            => 'name',
            'order'              => 'ASC',
            'show_last_update'   => 0,
            'style'              => 'list',
            'show_count'         => 1,
            'hide_empty'         => 0,
            'use_desc_for_title' => 1,
            'child_of'           => 0,
            'feed'               => '',
            'feed_type'          => '',
            'feed_image'         => '',
            'exclude'            => '',
            'exclude_tree'       => '',
            'include'            => '',
            'hierarchical'       => true,
            'title_li'           => __( '' ),
            'number'             => NULL,
            //'feed_image'         =>get_template_directory_uri().'/img/bee.png',
            'echo'               => 1,
            'depth'              => 0,
            'current_category'   => 0,
            'pad_counts'         => 0,
            'taxonomy'           => 'taxonomy-news',
            //'walker'             => 'Walker_Category',
            'hide_title_if_empty' => false,
            'separator'          => '',
        );
        $argstwo = array(
            'show_option_all'    => '',
            'show_option_none'   => __('No categories'),
            'orderby'            => 'name',
            'order'              => 'ASC',
            'show_last_update'   => 0,
            'style'              => 'list',
            'show_count'         => 1,
            'hide_empty'         => 0,
            'use_desc_for_title' => 1,
            'child_of'           => 0,
            'feed'               => '',
            'feed_type'          => '',
            'feed_image'         => '',
            'exclude'            => '',
            'exclude_tree'       => '',
            'include'            => '',
            'hierarchical'       => true,
            'title_li'           => __( '' ),
            'number'             => NULL,
            //'feed_image'         =>get_template_directory_uri().'/img/bee.png',
            'echo'               => 1,
            'depth'              => 0,
            'current_category'   => 0,
            'pad_counts'         => 0,
            'taxonomy'           => 'taxonomy-news-two',
            //'walker'             => 'Walker_Category',
            'hide_title_if_empty' => false,
            'separator'          => '',
        );
        ?>
        <div class="category-list-news clearfix">
            <ul>
                <?php echo wp_list_categories( $args );?>
            </ul>
        </div>
        <!-- <div class="category-list">
            <ul>
            <?php echo "Категории 2"; echo wp_list_categories( $argstwo );?>
            </ul>
        </div>
 -->
        <?php
        //$args = array( 'post_type' => 'news', 'post_per_page' => 2);
        //$loop = new WP_Query( $args );
        //do_action( 'show_beautiful_filters', 'news' );
        while ( have_posts() ) : the_post();
            // while ( $loop->have_posts() ) : $loop->the_post();?>

            <!-- <div class="col-xs-12 col-sm-4">
	        	<h2><?php the_title(); ?></h2>
	        	<?php the_post_thumbnail(); ?>
	        	<div class="excerpt"><?php echo mb_substr( strip_tags( get_the_content() ), 0, 152 ).'...'; ?></div>
	        	<div class="hrefs"><?php echo get_the_date(); ?></div>
	        </div> -->

        <?php endwhile; ?>
        <?php echo do_shortcode('[ajax_load_more button_label="Еще" post_type="news" posts_per_page="3" taxonomy="taxonomy-news" taxonomy_terms="'.get_queried_object()->slug.'" taxonomy_operator="IN" scroll="false"]');//echo get_queried_object()->slug; ?>

    </div>


<?php get_footer(); ?>