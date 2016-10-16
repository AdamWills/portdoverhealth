<footer class="content-info">
  <div class="container">
    <?php
      if (has_nav_menu('footer_navigation')) :
        wp_nav_menu(['theme_location' => 'footer_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav nav-inline']);
      endif;
      ?>
  </div>
</footer>
