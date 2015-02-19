<?php
$excutePages = !isHome();
if($excutePages): ?>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container md-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/?id=home">
              <img src="<?php echo getParam('logo'); ?>" alt="<?php echo getParam('brand'); ?>" />
            </a>
        </div>
        <div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="?id=sign-in">Sign in</a></li>
            </ul>
        </div>
    </div>
</nav>
<?php endif; ?>