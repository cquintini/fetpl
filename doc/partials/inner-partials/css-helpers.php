<div id="css-helpers" class="callout-demo hidden">
  <h2 class="text-muted">CSS Helper Classes</h2>
  <hr/>
  <h4>Responsive utilities</h4>
  <p>Visibility helpers</p>
  <table class="table table-bordered table-striped">
    <tr>
      <td><code>xs-hidden</code></td>
      <td><small class="text-mute">Hidden on extra small screens 767px and below</small></td>
      <td><code>xs-min-hidden</code></td>
      <td><small class="text-mute">Hidden on extra small screens 767px and above</small></td>
    </tr>
    <tr>
      <td><code>sm-hidden</code></td>
      <td><small class="text-mute">Hidden on small screens 768px and below</small></td>
      <td><code>sm-min-hidden</code></td>
      <td><small class="text-mute">Hidden on small screens 768px and above</small></td>
    </tr>
    <tr>
      <td><code>md-hidden</code></td>
      <td><small class="text-mute">Hidden on medium screens 992px and below</small></td>
      <td><code>md-min-hidden</code></td>
      <td><small class="text-mute">Hidden on medium screens 992px and above</small></td>
    </tr>
    <tr>
      <td><code>lg-hidden</code></td>
      <td><small class="text-mute">Hidden on large screens 1200px and below</small></td>
      <td><code>lg-min-hidden</code></td>
      <td><small class="text-mute">Hidden on large screens 1200px and above</small></td>
    </tr>
  </table>
  <hr/>
  <p>Float helpers</p>
  <table class="table table-bordered table-striped">
    <tr>
      <td><code>sm-pull-<span class="text-mute">(right | left)</span></code></td>
      <td><small class="text-mute">Float on small screens 768px and below</small></td>
      <td><code>sm-min-pull-<span class="text-mute">(right | left)</span></code></td>
      <td><small class="text-mute">Float on small screens 768px and above</small></td>
    </tr>
    <tr>
      <td><code>md-pull-<span class="text-mute">(right | left)</code></span></td>
      <td><small class="text-mute">Float on medium screens 992px and below</small></td>
      <td><code>md-min-pull-<span class="text-mute">(right | left)</span></code></td>
      <td><small class="text-mute">Float on medium screens 992px and above</small></td>
    </tr>
    <tr>
      <td><code>lg-pull-<span class="text-mute">(right | left)</span></code></td>
      <td><small class="text-mute">Float on large screens 1200px and below</small></td>
      <td><code>lg-min-pull-<span class="text-mute">(right | left)</span></code></td>
      <td><small class="text-mute">Float on large screens 1200px and above</small></td>
    </tr>
  </table>
  <hr/>
  <h4>Contextual helpers</h4>
  <table class="table table-bordered">
    <tr>
      <td>
        <span class="pull-right"><span class="caps">uppercase</span></span>
        <code>caps</code>,<code>text-uc</code>
      </td>
      <td>
        <span class="pull-right"><span class="text-cp">capitalize</span></span>
        <code>text-cp</code>
      </td>
      <td>
        <span class="pull-right"><strike>line-through</strike></span>
        <code>text-lt</code> or <code>&lt;strike&gt;</strike></code>
      </td>
    </tr>
    <tr>
      <td>
        <span class="pull-right"><span class="text-ul">underline</span></span>
        <code>text-ul</code>
      </td>
      <td>
        <span class="pull-right"><span class="text-mute">Text mute</span></span>
        <code>text-mute</code>
      </td>
      <td>
        <span class="pull-right"><span class="text-muted">Text muted</span></span>
        <code>text-muted</code>
      </td>
    </tr>
  </table>

  <div class="row">
    <div class="col-sm-7">
      <p class="text-truncate"><code>text-truncate</code> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    </div>
  </div>
  <hr/>
  <h4>Tables</h4>
  <p>Options: <code>.table-(md | sm | xs)-responsive</code></code></p>
  <p>Usage:</p>
  <pre class="prettyprint prettyprint-std">&lt;table class="table table-*-responsive"&gt;
 &lt;tr class="table_heading"&gt;
  &lt;th&gt;heading 1&lt;/th&gt;
  &lt;th&gt;heading 2&lt;/th&gt;
 &lt;/tr&gt;
 &lt;tr&gt;
  &lt;td class="has-th" data-th="heading 1"&gt;...&lt;/td&gt;
  &lt;td&gt;...&lt;/td&gt;
 &lt;/tr&gt;
&lt;/table&gt;</pre>
</div>