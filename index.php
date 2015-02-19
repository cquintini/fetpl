<?php
define ('PUBLIC_PATH', __DIR__);
require_once 'functions.php';
require_once 'ik-configs.php';

$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : 'home';
$id         = $_GET['id'];
getPartial('header');
require_once 'tpl/overall/main-header.php' ?>
  <div id="page-wrapper">
    <?php require_once 'tpl/pages/' . $id . '.php' ?>
  </div>
<?php getPartial('footer'); ?>