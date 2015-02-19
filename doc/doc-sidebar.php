<h4><?php echo current_title($id); ?></h4>
<div class="list-group doc-sidebar">
    <?php if ( isPage('main', 'Base Style') ) { ?>

        <a href="#typography" class="list-group-item active">Typography</a>
        <a href="#icons" class="list-group-item">Icons & Images</a>
        <a href="#buttons" class="list-group-item">Buttons</a>

    <?php } elseif ( isPage('main', 'Components') ) { ?>

        <a href="#forms" class="list-group-item active">Forms</a>

    <?php } elseif ( isPage('main', 'Utilities') ) { ?>

      <a href="#scss" class="list-group-item active">SCSS</a>
        <a href="#css-helpers" class="list-group-item">CSS</a>
        <a href="#js-helpers" class="list-group-item">Javascript</a>

    <?php } else { ?>
      <a href="#source" class="list-group-item active">Source</a>
      <a href="#pages" class="list-group-item">Pages</a>
    <?php } ?>
</div>