<?php use Roots\Sage\Assets; ?>

<header class="banner">
    <nav class="navbar">
      <div class="container flex-wrap">
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?= Assets\asset_path('images/logo.png');?>" alt="Port Dover Health and Wellness Centre"></a>
        <button class="navbar-toggler hidden-md-up pull-xs-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">Menu</button>
        <div class="collapse navbar-toggleable-sm" id="navbarCollapse">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'pull-md-right nav navbar-nav']);
          endif;
          ?>
      </div>
    </div>
  </nav>
</header>
<?php if (has_post_thumbnail()) : ?>
  <div class="hero"></div>
<?php endif; ?>
