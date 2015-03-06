<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a href="?id=home">
        <!-- TODO: remove the following inline style from the `<img> tag` -->
        <img src="<?php echo getParam('logo')?>" alt="<?php echo getParam('brand')?>" style="margin-top: 7px;"/>
      </a>
    </div>
    <div class="collapse navbar-collapse">
      <?php get_menu('primary'); ?>
    </div>
  </div>
</nav>