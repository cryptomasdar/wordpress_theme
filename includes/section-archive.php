<?php if( have_posts(  ) ): while( have_posts(  ) ): the_post(  ); ?>

	<div class="card mb-3">
		<div class="card-body">
			<h3><?php the_title(  ) ?></h3><!-- Get the title of this webpage -->
			<?php if ( has_post_thumbnail(  ) ): ?>
				<img src="<?php the_post_thumbnail_url( 'blog-small' ) ?>" alt="<?php the_title(  ) ?>" class="img-fluid mb-3 img-thumbnail"/>
			<?php endif; ?>
			<?php the_excerpt(  ) ?> <!-- instead of the_content the_excerpt is to show little of post -->
			<a href="<?php the_permalink(  ) ?>" class="btn btn-info">Read More</a>
		</div>
	</div>

<?php endwhile; else: endif; ?>
