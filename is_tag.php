<h2>Tag : <?php single_tag_title();?></h2>
<?php if (have_posts()): ?>
  <?php while (have_posts()): the_post();?>
	    <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
	  <?php endwhile;?>
<?php endif;?>