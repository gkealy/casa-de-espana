<header class="navbar navbar-default navbar-static-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="" href="<?= esc_url(home_url('/')); ?>"><img class="navbar-title" src="<?= get_template_directory_uri(); ?>/dist/images/titulo-yellow.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <nav role="navigation">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav navbar-right text-uppercase']);
        endif;
        ?>
      </nav>

    </div><!-- /.navbar-collapse -->
    <?php if ( is_front_page() ) :
      echo do_shortcode("[metaslider id=30]");
    endif; ?>
  </div><!-- /.container -->
</header>
