<?php if( have_posts(  ) ): while( have_posts(  ) ): the_post(  ); ?>

		<p><?php echo get_the_date(  ); ?></p>
		<?php the_content(  ) ?> <!-- instead of the_content the_excerpt is to show little of post -->
		<div class="card">
			<div class="container">
				<?php 
					$fname = get_the_author_meta( 'first_name' );
					$lname = get_the_author_meta( 'last_name' );
					$bio = get_the_author_meta( 'description' );
					echo '<p><strong>Author: </strong>' . $fname . ' ' . $lname . '</p>';
					echo '<p><strong>Bio: </strong>' . $bio . '</p>';
				 ?>	
			</div>
		</div>
		<div class="tags">
			<?php 
				$tags = get_the_tags(  );
				foreach( $tags as $tag ): ?>
					<a href="<?php echo get_tag_link( $tag->term_id ); ?>" class="badge badge-success">
					<?php echo $tag->name; ?></a>
			<?php endforeach; ?>
		</div>
		<?php wp_link_pages(  ); ?>
		<?php comments_template(  ); ?>
<?php endwhile; else: endif; ?>
