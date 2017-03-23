
<!-- Navigation
==========================================-->
<nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html"><?php bloginfo('name');?></a>
    </div>


    <!-- /.navbar-collapse -->
    <?php
    $args = [
      'theme_location' => 'header-menu',
      'menu_class'=>'nav navbar-nav navbar-right',
      'container_class'=>'collapse navbar-collapse',
      'container_id'=>'bs-example-navbar-collapse-1'
    ];
    wp_nav_menu($args);

    ?>
  </div><!-- /.container-fluid -->
</nav>
