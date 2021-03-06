<?php
/* 
 * Template Name: Archives
 * */
?>
<!-- For the rest Pages for website -->
<?php get_header(  ) ?>
<section class="page-wrap">
	<div class="container">
		<h2>Search Result for '<?php echo get_search_query(  ); ?>'</h2>
		<?php get_search_form(  ); ?>
		<?php get_template_part( 'includes/section', 'search' ); ?><!-- include file that is in includes folder -->

		<!-- Pagination Option 1 -->
		<?php next_posts_link(  ) ?>
		<?php previous_posts_link(  ) ?>
		<!-- Search for Numbering pagination -->
	</div>
</section>
<?php get_footer(  ) ?>
