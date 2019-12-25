<?php 
/*
Template Name: Contact Us
*/
 ?>
<?php get_header(  ) ?>
<div class="page-wrap">
	<div class="container">
		<h1><?php the_title(  ) ?></h1><!-- Get the title of this webpage -->
		<div class="row">
			<div class="col-lg-6"></div>
				<h3>This is Contact Us Template</h3>
			<div class="col-lg-6">
				<?php get_template_part( 'includes/section', 'content' ); ?><!-- include file that is in includes folder -->
			</div>
		</div>
	</div>
</div>
<?php get_footer(  ) ?>
