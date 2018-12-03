<center><h1>All Posts</h1></center><br>
<div class="row">
	<div class="columns-3x-w">
	<div class="columns-3x">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


		
					<div class="column content">
			<div class="icon-w">
				<img class="icon" src="https://www.demandsphere.com/wp-content/uploads/2017/11/flexible-icon@3x.png" alt="Icon">
			</div>

			<h3><a href="<?php the_permalink();?>" target="_blank"><?php the_title(); ?></a><br> ( Posted on <?php the_time('F jS, Y') ?> )</h3>

			<p><?php the_content(__('(more...)')); ?></p>
			
		</div>
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
	</div></div>
