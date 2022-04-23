<?php get_header(); ?>

<div class="container">
	<div class="bg-single">

		<?php

			if ( function_exists('yoast_breadcrumb') ) {

			 yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );

			}

		?>

		<h1 class="title_single"><?php the_title(); ?></h1>

		<div class="row">
			<div class="col-lg-8 col-12">

				<p class="text-single"><i class="fas fa-calendar"></i> Ngày đăng: <?php echo get_the_date(); ?> </p>

				<div class="content-single">
					<?php the_content(); ?>
				</div>
			</div>

			<div class="col-lg-4 col-12">
				<?php if( have_rows('banner2', 'option') ): ?>
		            <?php while( have_rows('banner2', 'option') ): the_row(); 
		                $image = get_sub_field('img_banner');
		                $link = get_sub_field('link-banner');
		                ?>
		                <a href="<?php echo $link['url'];?>"><img class="banner-single" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt'];?>"></a>
		            <?php endwhile; ?>
		        <?php endif; ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>