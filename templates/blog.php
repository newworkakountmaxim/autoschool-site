<?php
/**
 * Template Name: blog
 * @package
 * @copyright
 */
get_header();
?>
     <div class="filial-content-container">
        <div class="breadcrumb-list-filial">
           <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
        </div>

        <h1 class="blog-title-mobile"> <?php the_title(); ?></h1>
        
        <div class="blog-content">

            <div class="blog-content-sidebar">
               <!--  <h1 class="blog-title-desktop"> <?php the_title(); ?></h1> -->
                <div class="blog-content-sidebar-categories">
                    <div class="blog-content-sidebar-categories-title">Категории:</div>
                    <a href="#" class="tablinks" onclick="openCity(event, 'one')" id="defaultOpen">Все</a>
                    <a href="#" class="tablinks" onclick="openCity(event, 'two')">Автолюбитель</a>
                    <a href="#" class="tablinks" onclick="openCity(event, 'three')">Автоновости</a>
                    <a href="#" class="tablinks" onclick="openCity(event, 'four')">Энциклопедия водителя</a>
                    <a href="#" class="tablinks" onclick="openCity(event, 'five')">Мир авто</a>
                </div>
                <div class="blog-content-sidebar-social">
                    <div class="blog-content-sidebar-social-title">Блольше новостей тут:</div>
                </div>
             </div>

            <div class="blog-content-content">
                <div id="one" class="tabcontent">
                    <?php 
                    $args = array( 'post_type' => 'blog', 'posts_per_page' => 20 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();                      
                    ?>     
                    <div class="blog-item">
                        <div class="blog-item-title"><?php the_title(); ?></div>
                        <div class="blog-item-subtitle">
                            <div class="blog-item-subtitle-date"> <?php echo get_the_date('d.m.Y'); ?></div>
                            <div class="blog-item-subtitle-watch"> 1280</div>
                        </div>
                        <img class="blog-item-img" src="<?php the_post_thumbnail_url(); ?>" alt="">
                        <div class="blog-item-excerpt"><?php the_excerpt(); ?></div> 
                        <div class="blog-item-tags-more">
                            <?php 
                                $categories = get_categories( array(
                                    'taxonomy'     => 'taxonomy-blog',
                                    'type'         => 'blog',
                                    'child_of'     => 0,
                                    'parent'       => '',
                                    'orderby'      => 'name',
                                    'order'        => 'ASC',
                                    'hide_empty'   => 1,
                                    'hierarchical' => 1,
                                    'exclude'      => '',
                                    'include'      => '',
                                    'number'       => 0,
                                    'pad_counts'   => false,
                                    // полный список параметров смотрите в описании функции http://wp-kama.ru/function/get_terms
                                ) );
                                echo "<div class='blog-item-tags-more-title'>Теги</div>";
                                if( $categories ){
                                    foreach( $categories as $cat ){                                        
                                        echo "<div class='blog-item-tags-more-item'>".$cat->name."</div>";            
                                    }
                                }                                  
                            ?>
                            <div class="blog-item-tags"></div>
                            <a href="<?php the_permalink(); ?>" class="blog-item-more">Далее</a>
                        </div>                     
                    </div> 
                    <?php endwhile;?>               

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
