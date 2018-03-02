<?php if (have_posts()): ?>
  <?php while (have_posts()): the_post();?>
				<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
				<p>Category : <?php the_category(', ');?></p>
		  <?php endwhile;?>
<?php endif;?>