<div class="visible-xs">
  <div class="col-md-12 inicio-uno">
    <div class="col-md-8 row col-md-offset-2">
      <?php
      $newquery = new WP_Query( 'posts_per_page=1' );
      if ( $newquery->have_posts() ) : while ( $newquery->have_posts() ) : $newquery->the_post();
      get_template_part('templates/content', 'one');
      endwhile; endif; ?>
    </div>
  </div>

  <div class="col-xs-12 social-front">
    <div class="col-xs-4"><a href="https://www.facebook.com/CasadeEspanaSA"><i class="fa fa-4x fa-facebook"></i></a></div>
    <div class="col-xs-4"><a href="https://twitter.com/cdesa2014"><i class="fa fa-4x fa-twitter"></i></a></div>
    <div class="col-xs-4"><a href="https://www.youtube.com/user/CDEspanaSA"><i class="fa fa-4x fa-youtube"></i></a></div>
  </div>

  <div class="col-xs-12 col-sm-8 col-sm-offset-2">
    <img class="fp-logo img-responsive" src="<?= get_template_directory_uri();?>/dist/images/logo.jpg">
  </div>
</div>

<div class="row hidden-xs fp-content-md">
  <div class="col-sm-6 col-md-4">
    <h4 style="color=#eee;">Ultimas Entradas</h4>
      <?php
      $newquery = new WP_Query( 'posts_per_page=3' );
      if ( $newquery->have_posts() ) : while ( $newquery->have_posts() ) : $newquery->the_post();
      get_template_part('templates/content', 'three');
      endwhile; endif; ?>
      <h3 class="fp-archivos"><a href="<?= esc_url(home_url('/')); ?>entradas">Archivos</a></h3>
  </div>
  <div class="col-sm-6 col-md-4">
    <h4 style="margin-bottom:0px;color=#eee;">Próximos Eventos</h4>
    <?php dynamic_sidebar('sidebar-fp-events'); ?>
    <h3 class="fp-archivos"><a href="<?= esc_url(home_url('/')); ?>eventos">Todos Eventos</a></h3>
  </div>
  <div class="hidden-sm col-md-4">
    <h4 style="margin-bottom:20px;color=#eee;">Facebook</h4>
    <?php dynamic_sidebar('sidebar-fp-social'); ?>
  </div>
    <div class="visible-sm col-sm-12 social-front-sm">
    <div class="col-xs-4"><a href="https://www.facebook.com/CasadeEspanaSA"><i class="fa fa-4x fa-facebook"></i></a></div>
    <div class="col-xs-4"><a href="https://twitter.com/cdesa2014"><i class="fa fa-4x fa-twitter"></i></a></div>
    <div class="col-xs-4"><a href="https://www.youtube.com/user/CDEspanaSA"><i class="fa fa-4x fa-youtube"></i></a></div>
  </div>
</div>

