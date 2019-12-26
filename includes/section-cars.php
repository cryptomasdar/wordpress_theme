<?php if( have_posts(  ) ): while( have_posts(  ) ): the_post(  ); ?>

		<?php the_content(  ) ?> <!-- instead of the_content the_excerpt is to show little of post -->
		<div class="tags">
			<?php 
				$tags = get_the_tags(  );
				if( $tags ):
					foreach( $tags as $tag ): ?>
						<a href="<?php echo get_tag_link( $tag->term_id ); ?>" class="badge badge-success">
						<?php echo $tag->name; ?></a>
					<?php endforeach; ?>
				<?php endif; ?>
		</div>
		<p><?php echo get_the_date(  ); ?></p>
		<?php wp_link_pages(  ); ?>
		<?php comments_template(  ); ?>
<?php endwhile; else: endif; ?>
