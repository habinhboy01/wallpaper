
<?php

get_header(); ?>
	
	<div class="container bg-search">
		<p class="text-search"><?php echo get_field('results', 'option'); ?></p>

		<h1 class="title-header"><?php the_search_query(); ?></h1>

		<?php
		if ( have_posts() ) :
			?>
		
			<?php
			while ( have_posts() ) : the_post(); ?>

		        <div class="content-search">
					<?php if ( has_post_thumbnail() ) { ?>
		               
		                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'small-thumbnail' ); ?></a>

					<?php } ?>
		            <h2 class="title-header2"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
		            <p class="text2"><i class="fas fa-calendar"></i> Ngày đăng: <?php echo get_the_date(); ?> |
		               	<?php
						$categories = get_the_category();
						$comma      = ', ';
						$output     = '';
						
						if ( $categories ) {
							foreach ( $categories as $category ) {
								$output .= '<a href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a>' . $comma;
							}
							echo trim( $output, $comma );
						} ?>
		            </p>

		            <p class="text-search2"><?php echo get_the_excerpt() ?></p>

		            <p class="text-search3"><a href="<?php the_permalink() ?>"><?php echo get_field('read_more', 'option'); ?> &raquo</a></p>
		        </div>
			
			<?php endwhile;

		else :
			echo '<p>No search results found!</p>';

		endif; ?>
	</div>

<?php
get_footer();

?>

