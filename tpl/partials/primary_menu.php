<ul class="nav navbar-nav navbar-right">
  <?php foreach ($primary_menu as $link) : ?>
    <li>
      <a href="<?php echo $link['link_href']; ?>">
        <span class="<?php echo $link['link_class']; ?>"><?php echo $link['link_text']; ?></span>
      </a>
    </li>
  <?php endforeach; ?>
</ul>