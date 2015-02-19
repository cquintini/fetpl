<?php
return array(
  'params' => [
    'brand' => 'ikantam',
    'logo' => '/dest/images/logo.png',
    'copyright' => '&copy;' . date("Y"),
    'google_analytics_id' => 'UA-XXXXX-X'
  ],
  'css' => [
    'local' => [
      '../dest/css/main.css',
      '../dest/css/doc/doc.css'
    ],
    'cdn' => [
      // e.g. Google APIs
      ''
    ]
  ],
  'js' => [
    'local' => [
      '../dest/js/plugins.min.js',
      '../dest/js/main.min.js'
    ],
    'cdn' => [
      'http://code.jquery.com/jquery.min.js'
    ]
  ]
);
