<div id="source" class="callout-demo">
  <h2>Dependencies and source files:</h2>

  <div class="panel panel-default">
    <div class="panel-heading">CDN</div>
    <div class="panel-body">
      <ol>
        <li>
          <p><strong>Google API's, Fonts, Font Icons </strong></p>
          <ul class="list-unstyled">
            <?php foreach (getConfigs()['css']['cdn'] as $link) : ?>
              <li>
                <?php if ($link) : ?>
                <pre class="prettyprint">&lt;<?php echo $link; ?>' rel='stylesheet' type='text/css'&gt;</pre>
                <?php endif; ?>
              </li>
            <?php endforeach; ?>
          </ul>
        </li>
        <li>
          <p><strong>Javascript, jQuery, Vendors</strong></p>
          <ul class="list-unstyled">
            <?php foreach (getConfigs()['js']['cdn'] as $link) : ?>
              <li>
                <pre class="prettyprint m-0">&lt;script src="<?php echo $link; ?>"&gt;&lt;/script&gt;</pre>
              </li>
            <?php endforeach; ?>
          </ul>
        </li>
      </ol>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">Local Files</div>
    <div class="panel-body">
      <ul class="list-unstyled">
        <li>
          <?php foreach (getConfigs()['js']['local'] as $link) : ?>
            <pre class="prettyprint m-0">&lt;script src="<?php echo $link; ?>"&gt;&lt;/script&gt;</pre>
          <?php endforeach; ?>
          </li>
      </ul>
    </div>
  </div>
</div>

<div id="pages" class="callout-demo hidden">
  <h2>Pages:</h2>

  <div class="panel panel-default">
    <div class="panel-body">
      <strong>Home/Landing Page</strong>
    </div>
    <div class="panel-footer">
      <table class="table table-bordered m-0">
        <tr>
          <td><span>Url: <em class="text-muted">default</em></span></td>
          <td><span>Path file: <kbd>tpl/pages/home.php</kbd></span></td>
        </tr>
      </table>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-body">
      <strong>Page Name</strong><span class="text-muted">(description)</span>
    </div>
    <div class="panel-footer">
      <table class="table table-bordered m-0">
        <tr>
          <td><span>Url: <code>/?id=page-name</code></span></td>
          <td><span>Path file: <kbd>tpl/pages/page-name.php</kbd></span></td>
        </tr>
      </table>
    </div>
  </div>
</div>