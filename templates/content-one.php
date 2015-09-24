<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><small>ultima entrada</small><br> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
    <h2 class="fp-archivos"><a href="<?= esc_url(home_url('/')); ?>entradas">Archivos</a></h2>
  </div>
</article>
