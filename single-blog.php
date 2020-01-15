<?php
get_header();
?>

<style type="text/css">
	.blog-content{
        display: flex;            
    }
    .blog-content-sidebar{
        border:1px solid red;
        width: 30%
    }

    .blog-content-content{
        border:1px solid red;
        width: 70%
    }

    @media all and (max-width: 768px) {
    .blog-content-sidebar, .blog-content-content{
        width:100%;
    }
    .blog-content {
        flex-direction: column;
    }
    
}


</style>

    <div class="filial-content-container">
        <div class="breadcrumb-list-filial" style="margin-top:50px">
           <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
        </div>


        <h1><?php the_title(); ?></h1>


        <div class="blog-content">
	        <div class="blog-content-content">
	        	<?php the_post();the_content(); ?>
	        </div>

	        <div class="blog-content-sidebar">
	           	<div class="blog-content-sidebar-next-prev">
	           		<div class="blog-content-sidebar-next">
	           			<?php 
	           			$next_post = get_next_post();
						echo '<a href="' . get_permalink( $next_post ) . '">'. esc_html($next_post->post_title) .'</a>'; 
						?>
	           		</div>
	           		<div class="blog-content-sidebar-prev">
	           			<?php 
	           			$prev_post = get_previous_post();
						echo '<a href="' . get_permalink( $prev_post ) . '">'. esc_html($prev_post->post_title) .'</a>'; 
						?>
	           		</div>
	           	</div>
	            <div class="blog-content-sidebar-social">
	                <div class="blog-content-sidebar-social-title">Блольше новостей тут:</div>
	            </div>
	        </div>
	    </div>    

        


    </div>

<?php
get_footer();