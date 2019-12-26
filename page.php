<!-- For the rest Pages for website -->
<?php get_header(  ) ?>
<section class="page-wrap">
	<div class="container">
		<section class="row">
			<div class="col-lg-3">
				<?php if ( is_active_sidebar( 'page-sidebar' ) ): ?>
					<?php dynamic_sidebar( 'page-sidebar' ); ?>
				<?php endif; ?>
			</div>
			<div class="col-lg-9">
				<h1><?php the_title(  ) ?></h1><!-- Get the title of this webpage -->
				
				<?php get_template_part( 'includes/section', 'content' ); ?><!-- include file that is in includes folder -->
			</div>
		</section>
	</div>
</section>
<?php get_footer(  ) ?>
