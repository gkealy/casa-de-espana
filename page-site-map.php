<div class="site-map">
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/sidebar', 'site-map') ?>
<?php endwhile; ?>
</div>
