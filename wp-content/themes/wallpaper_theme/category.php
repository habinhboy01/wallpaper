<?php get_header(); ?>

	<div class="container bg-category">
		<h1><?php single_cat_title(); ?></h1>

		<div class="row">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<div class="col-lg-4 col-12">
						<div class="content-category">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?></a>

							<p class="text2">
							    <?php
								$categories = get_the_category();
								$comma      = ', ';
								$output     = '';
								
								if ( $categories ) {
									foreach ( $categories as $category ) {
										$output .= '<a href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a>' . $comma;
									}
									echo trim( $output, $comma );
										} ?> /
								<?php echo get_the_date(); ?>		

						    	</p>

							<h2 class="title-category"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						</div>
					</div>
					
				<?php endwhile;?>
			<?php endif; ?>
            <?php if(paginate_links()!='') {?>
            	<div class="pagination">
            		<?php
            		global $wp_query;
            		$big = 999999999;
            		echo paginate_links( array(
            			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            			'format' => '?paged=%#%',
            			'prev_text'    => __('« Mới hơn'),
            			'next_text'    => __('Tiếp theo »'),
            			'current' => max( 1, get_query_var('paged') ),
            			'total' => $wp_query->max_num_pages
            			) );
            	    ?>
            	</div>
            <?php } ?>
		</div>
	</div>

<?php get_footer(); ?>