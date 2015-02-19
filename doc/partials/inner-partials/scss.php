<div id="scss" class="callout-demo">
  <h2 class="text-muted">
    SCSS & Compass
  </h2>

  <h4>Variables</h4>
  <table class="table table-bordered">
    <tr>
      <th colspan="6">$colors</th>
    </tr>
    <tr>
      <td><code>$bg-color-twitter</code> <span class="pull-right">#2fabe1</span></td>
      <td class="text-center"><span class="color-demo" style="background-color: #2fabe1"></span></td>

      <td><code>$bg-color-facebook</code> <span class="pull-right">#3c5b9b</span></td>
      <td class="text-center"><span class="color-demo" style="background-color: #3c5b9b"></span></td>

      <td><code>$bg-color-googleplus</code> <span class="pull-right">#f63e28</span></td>
      <td class="text-center"><span class="color-demo" style="background-color: #f63e28"></span></td>
    </tr>
  </table>
  <table class="table table-bordered">
    <tr>
      <th colspan="4">$fonts-family-*</th>
    </tr>
    <tr>
      <td><code>$font-family-*</code></td>
      <td>... !default</td>
    </tr>
  </table>
  <table class="table table-bordered">
    <tr>
      <th colspan="3">$fonts-size-*</th>
    </tr>
    <tr>
      <td><code>$font-size-default</code> <span class="pull-right">14px !default</span></td>
      <td><code>$font-size-sm</code> <span class="pull-right"><em>$font-size-default - 1 !default</em> 13px</span></td>
      <td><code>$font-size-xs</code> <span class="pull-right"><em>$font-size-sm - 2 !default</em> 11px</span></td>
    </tr>
  </table>
  <table class="table table-bordered">
    <tr>
      <th colspan="3">$fonts-weight-*</th>
    </tr>
    <tr>
      <td><code>$font-weight-thin</code>  <span class="pull-right">100 !default</span></td>
      <td><code>$font-weight-light</code> <span class="pull-right"><em>$font-weight-thin  + 200 !default</em> 300</span></td>
    </tr>
    <tr>
      <td><code>$font-weight-normal</code> <span class="pull-right"><em>$font-weight-light + 100 !default</em> 400</span></td>
      <td><code>$font-weight-regular</code> <span class="pull-right"><em>$font-weight-normal !default</em> 400</span></td>
    </tr>
    <tr>
      <td><code>$font-weight-medium</code> <span class="pull-right"><em>$font-weight-normal + 100 !default</em> 500</span></td>
      <td><code>$font-weight-bold</code> <span class="pull-right"><em>$font-weight-medium + 200 !default</em> 700</span></td>
    </tr>
    <tr>
      <td><code>$font-weight-ultra-bold</code> <span class="pull-right"><em>$font-weight-bold + 200 !default</em> 900</span></td>
      <td>&nbsp;</td>
    </tr>
  </table>

  <table class="table table-bordered table-striped">
    <tr>
      <th>Responsive Utilities</th>
      <th>@media max-width</th>
      <th>@media min-width</th>
    </tr>
    <tr>
      <td>Extra small screens <strong class="pull-right">767px</strong></td>
      <td><code>@media(max-width: $screen-xs){  }</code></td>
      <td><code>@media(min-width: $screen-xs-min){  }</code></td>
    </tr>
    <tr>
      <td>Small screens <strong class="pull-right">768px</strong></td>
      <td><code>@media(max-width: $screen-sm){  }</code></td>
      <td><code>@media(min-width: $screen-sm-min){  }</code></td>
    </tr>
    <tr>
      <td>Medium screens <strong class="pull-right">992px</strong></td>
      <td><code>@media(max-width: $screen-md){  }</code></td>
      <td><code>@media(min-width: $screen-md-min){  }</code></td>
    </tr>
    <tr>
      <td>Large screens <strong class="pull-right">1200px</strong></td>
      <td><code>@media(max-width: $screen-lg){  }</code></td>
      <td><code>@media(min-width: $screen-lg-min){  }</code></td>
    </tr>
  </table>
</div>