<!-- Front-page is for the main page that loads first on website -->
<?php get_header( 'home' ) ?><!-- use header-home.php template -->
<div class="container">

	<h1><?php the_title(  ) ?></h1><!-- Get the title of this webpage -->

	<?php get_template_part( 'includes/section', 'content' ); ?><!-- include file that is in includes folder -->

</div>
<?php get_footer( 'home' ) ?><!-- use footer-home.php template -->
