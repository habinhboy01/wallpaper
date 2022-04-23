<?php 
/*

	Template Name: Home page

*/	
get_header(); ?>

	<div class="container">
		<?php
			$args = array(	
				'post_status' => 'publish',
				'post_type' => 'post',
				'orderby' => 'post_date',
				'posts_per_page'=> '1',
				'order' => 'DSC',
				
			);
		?>
		<?php $getposts = new WP_query($args); ?>
		<?php global $wp_query; $wp_query->in_the_loop = true; ?>
		<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
			<?php echo get_the_category()->cat_ID; ?>
				<div class="content-news">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('full'); ?></a>
					<h1 class="title-news"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

					<div class="text1"><?php the_excerpt(); ?></div>	

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
				</div>
		<?php endwhile; wp_reset_postdata(); ?>
	</div>

	<div class="container">
		<div class="row">
			<?php
				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'orderby' => 'post_date',
					'posts_per_page'=> '3',
					'order' => 'ASC',
					
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<?php echo get_the_category()->cat_ID; ?>
					<div class="col-lg-4 col-12">
						<div class="content-news2">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?></a>
							<h1 class="title-news title-news2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

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
						</div>
					</div>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>

	<!-- tin túc mới nhất -->

	<div class="container bg-latestNews">

		<h2><?php echo get_field('latest_news'); ?></h2>

		<div class="row">
			<?php
				$args = array(	
					'post_status' => 'publish',
					'post_type' => 'post',
					'orderby' => 'post_date',
					'posts_per_page'=> '6',
					'order' => 'DSC',
					
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<?php echo get_the_category()->cat_ID; ?>
					<div class="col-lg-4 col-12">
						<div class="content-news2">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?></a>
							<h1 class="title-news title-news2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

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
						</div>
					</div>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>

	<!-- tin tức nổi bật -->
	<div class="container bg-features">

		<h2><?php echo get_field('features'); ?></h2>

		<div class="row">
			<?php
				$args = array(
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 1,
					'cat' => 3,
					'order' => 'DSC',
				);

				    $featured = new WP_Query($args);
			?>

			<?php
			if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>
				<?php if ( has_post_thumbnail()) : ?>
					<div class="col-lg-6 col-12 img-features">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
						    <?php the_post_thumbnail(); ?>
						  </a>
					</div>

					<div class="col-lg-6 col-12 content-features">
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

						<h3 class="title-news"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
						<div class="text1"><?php the_excerpt(); ?></div>	
					</div>
				<?php endif; ?>
			<?php
			endwhile;
			endif;
			?>
		</div>
	</div>

	<div class="container bg-features">

		<h2><?php echo get_field('features'); ?></h2>

		<div class="row">
			<?php
				$args = array(
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 1,
					'cat' => 4,
					'order' => 'DSC',
				);

				    $featured = new WP_Query($args);
			?>

			<?php
			if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>
				<?php if ( has_post_thumbnail()) : ?>

					<div class="col-lg-6 col-12 content-features">
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

						<h3 class="title-news"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
						<div class="text1"><?php the_excerpt(); ?></div>	
					</div>

					<div class="col-lg-6 col-12 img-features">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
						    <?php the_post_thumbnail(); ?>
						  </a>
					</div>
				<?php endif; ?>
			<?php
			endwhile;
			endif;
			?>
		</div>
	</div>

	<div class="container bg-features">

		<h2><?php echo get_field('features'); ?></h2>

		<div class="row">
			<?php
				$args = array(
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 1,
					'cat' => 5,
					'order' => 'DSC',
				);

				    $featured = new WP_Query($args);
			?>

			<?php
			if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>
				<?php if ( has_post_thumbnail()) : ?>
					<div class="col-lg-6 col-12 img-features">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
						    <?php the_post_thumbnail(); ?>
						  </a>
					</div>

					<div class="col-lg-6 col-12 content-features">
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

						<h3 class="title-news"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
						<div class="text1"><?php the_excerpt(); ?></div>	
					</div>
				<?php endif; ?>
			<?php
			endwhile;
			endif;
			?>
		</div>
	</div>

	<div class="container bg-features">

		<h2><?php echo get_field('features'); ?></h2>

		<div class="row">
			<?php
				$args = array(
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 1,
					'cat' => 6,
					'order' => 'DSC',
				);

				    $featured = new WP_Query($args);
			?>

			<?php
			if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>
				<?php if ( has_post_thumbnail()) : ?>

					<div class="col-lg-6 col-12 content-features">
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

						<h3 class="title-news"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
						<div class="text1"><?php the_excerpt(); ?></div>	
					</div>

					<div class="col-lg-6 col-12 img-features">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
						    <?php the_post_thumbnail(); ?>
						  </a>
					</div>
				<?php endif; ?>
			<?php
			endwhile;
			endif;
			?>
		</div>
	</div>

	<div class="container bg-features">

		<h2><?php echo get_field('features'); ?></h2>

		<div class="row">
			<?php
				$args = array(
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 1,
					'cat' => 7,
					'order' => 'DSC',
				);

				    $featured = new WP_Query($args);
			?>

			<?php
			if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>
				<?php if ( has_post_thumbnail()) : ?>
					<div class="col-lg-6 col-12 img-features">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
						    <?php the_post_thumbnail(); ?>
						  </a>
					</div>

					<div class="col-lg-6 col-12 content-features">
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

						<h3 class="title-news"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
						<div class="text1"><?php the_excerpt(); ?></div>	
					</div>
				<?php endif; ?>
			<?php
			endwhile;
			endif;
			?>
		</div>
	</div>

	<div class="container bg-features">

		<h2><?php echo get_field('features'); ?></h2>

		<div class="row">
			<?php
				$args = array(
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 1,
					'cat' => 8,
					'order' => 'DSC',
				);

				    $featured = new WP_Query($args);
			?>

			<?php
			if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>
				<?php if ( has_post_thumbnail()) : ?>

					<div class="col-lg-6 col-12 content-features">
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

						<h3 class="title-news"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
						<div class="text1"><?php the_excerpt(); ?></div>	
					</div>

					<div class="col-lg-6 col-12 img-features">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
						    <?php the_post_thumbnail(); ?>
						  </a>
					</div>
				<?php endif; ?>
			<?php
			endwhile;
			endif;
			?>
		</div>
	</div>

	<div class="container bg-features">

		<h2><?php echo get_field('features'); ?></h2>

		<div class="row">
			<?php
				$args = array(
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 1,
					'cat' => 9,
					'order' => 'DSC',
				);

				    $featured = new WP_Query($args);
			?>

			<?php
			if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>
				<?php if ( has_post_thumbnail()) : ?>
					<div class="col-lg-6 col-12 img-features">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
						    <?php the_post_thumbnail(); ?>
						  </a>
					</div>

					<div class="col-lg-6 col-12 content-features">
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

						<h3 class="title-news"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
						<div class="text1"><?php the_excerpt(); ?></div>	
					</div>
				<?php endif; ?>
			<?php
			endwhile;
			endif;
			?>
		</div>
	</div>

	<div class="container bg-features">

		<h2><?php echo get_field('features'); ?></h2>

		<div class="row">
			<?php
				$args = array(
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 1,
					'cat' => 10,
					'order' => 'DSC',
				);

				    $featured = new WP_Query($args);
			?>

			<?php
			if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>
				<?php if ( has_post_thumbnail()) : ?>

					<div class="col-lg-6 col-12 content-features">
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

						<h3 class="title-news"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
						<div class="text1"><?php the_excerpt(); ?></div>	
					</div>

					<div class="col-lg-6 col-12 img-features">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
						    <?php the_post_thumbnail(); ?>
						  </a>
					</div>
				<?php endif; ?>
			<?php
			endwhile;
			endif;
			?>
		</div>
	</div>

	<div class="container bg-features">

		<h2><?php echo get_field('features'); ?></h2>

		<div class="row">
			<?php
				$args = array(
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 1,
					'cat' => 11,
					'order' => 'DSC',
				);

				    $featured = new WP_Query($args);
			?>

			<?php
			if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>
				<?php if ( has_post_thumbnail()) : ?>
					<div class="col-lg-6 col-12 img-features">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
						    <?php the_post_thumbnail(); ?>
						  </a>
					</div>

					<div class="col-lg-6 col-12 content-features">
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

						<h3 class="title-news"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
						<div class="text1"><?php the_excerpt(); ?></div>	
					</div>
				<?php endif; ?>
			<?php
			endwhile;
			endif;
			?>
		</div>
	</div>

	<div class="container bg-features">

		<h2><?php echo get_field('features'); ?></h2>

		<div class="row">
			<?php
				$args = array(
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 1,
					'cat' => 12,
					'order' => 'DSC',
				);

				    $featured = new WP_Query($args);
			?>

			<?php
			if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>
				<?php if ( has_post_thumbnail()) : ?>

					<div class="col-lg-6 col-12 content-features">
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

						<h3 class="title-news"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
						<div class="text1"><?php the_excerpt(); ?></div>	
					</div>

					<div class="col-lg-6 col-12 img-features">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
						    <?php the_post_thumbnail(); ?>
						  </a>
					</div>
				<?php endif; ?>
			<?php
			endwhile;
			endif;
			?>
		</div>
	</div>

	<div class="container bg-features">

		<h2><?php echo get_field('features'); ?></h2>

		<div class="row">
			<?php
				$args = array(
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => 1,
					'cat' => 13,
					'order' => 'DSC',
				);

				    $featured = new WP_Query($args);
			?>

			<?php
			if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>
				<?php if ( has_post_thumbnail()) : ?>
					<div class="col-lg-6 col-12 img-features">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
						    <?php the_post_thumbnail(); ?>
						  </a>
					</div>

					<div class="col-lg-6 col-12 content-features">
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

						<h3 class="title-news"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
						<div class="text1"><?php the_excerpt(); ?></div>	
					</div>
				<?php endif; ?>
			<?php
			endwhile;
			endif;
			?>
		</div>
	</div>




<?php get_footer(); ?>