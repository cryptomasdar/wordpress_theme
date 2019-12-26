<?php
/* 
 * Template Name: Archives
 * */
?>
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

				<?php get_template_part( 'includes/section', 'archive' ); ?><!-- include file that is in includes folder -->

				<!-- Pagination Option 1 -->
				<?php next_posts_link(  ) ?>
				<?php previous_posts_link(  ) ?>
				<!-- Search for Numbering pagination -->
			</div>
	</div>
</section>
<?php get_footer(  ) ?>
