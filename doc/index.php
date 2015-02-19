<?php
define ('PUBLIC_PATH', __DIR__ . '/..');
require_once PUBLIC_PATH . '/functions.php';

$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : 'documentations';
$id         = $_GET['id'];
getPartial('header');
require_once 'doc-header.php'; ?>
<div class="container-fluid main-container doc-container">
    <div class="row">
        <aside class="col-sm-2 doc-sidebar">
            <?php require_once 'doc-sidebar.php'; ?>
        </aside>
        <div class="col-sm-10">
            <?php require_once 'partials/' . $id . '.php'; ?>
        </div>
    </div>
</div>
<?php getPartial('footer'); ?>