<!-- For the rest Pages for website -->
<?php get_header(  ) ?>
<section class="page-wrap">

	<div class="container">

		<?php if ( has_post_thumbnail(  ) ): ?>

			<img src="<?php the_post_thumbnail_url( 'blog-large' ) ?>" alt="<?php the_title(  ) ?>" class="img-fluid mb-3 img-thumbnail" id=""/>

		<?php endif; ?>

		<h2><?php the_title(  ) ?></h2><!-- Get the title of this webpage -->

		<?php get_template_part( 'includes/section', 'post' ); ?><!-- include file that is in includes folder -->

	</div>

</section>
<?php get_footer(  ) ?>
