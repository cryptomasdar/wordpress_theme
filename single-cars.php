<!-- For the rest Pages for website -->
<?php get_header(  ) ?>
<section class="page-wrap">

	<div class="container">

		<h1><?php the_title(  ) ?></h1><!-- Get the title of this webpage -->

		<?php if ( has_post_thumbnail(  ) ): ?>

			<img src="<?php the_post_thumbnail_url( 'blog-large' ) ?>" alt="<?php the_title(  ) ?>" class="img-fluid mb-3 img-thumbnail" id=""/>

		<?php endif; ?>

	<div class="row">
		<div class="col-lg-6">
			<?php get_template_part( 'includes/section', 'cars' ); ?><!-- include file that is in includes folder -->
			<?php wp_link_pages(  ); ?>
		</div>
		<div class="col-lg-6">
			<ul>
				<li>Color: <?php echo get_post_meta( $post->ID, 'Color', true ); ?></li>
				<li>Registration: <?php echo get_post_meta( $post->ID, 'Registration', true ); ?></li>
				<li>Year: <?php echo get_post_meta( $post->ID, 'Year', true ); ?></li>
			</ul>
		</div>
	</div>
	</div>

</section>
<?php get_footer(  ) ?>
