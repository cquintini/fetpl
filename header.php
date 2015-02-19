<!DOCTYPE html>
<!--[if !IE]><!--><script>if (/*@cc_on!@*/false) { document.documentElement.className += ' ie10'; }</script><!--<![endif]-->
<!--[if lt IE 9]><script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<?php
$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : 'home';
$id = $_GET['id']; ?>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <title><?php echo current_title($id) . ' &#8226; ' . getParam('brand'); ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, user-scalable=no">

  <?php if (isHome()) { ?>
    <meta name="description" content="">
    <meta name="keywords" content="">
  <?php } else { ?>
    <meta name="keywords" content="KEYWORDS">
    <meta name="description" content="CURRENT-PAGE-DESCRIPTION-GOES-HERE">

    <meta property="og:title" content="CURRENT-PAGE-TITLE">
    <meta property="og:site_name" content="SITENAME">
    <meta property="og:url" content="CURRENT-PAGE-URL">
    <meta property="og:description" content="CURRENT-PAGE-DESCRIPTION-GOES-HERE">
    <meta property="og:image" content="PRODUCT-IMAGE-OR-LOGO-URL">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="article"/>
    <meta property="og:site_name" content="SITENAME"/>
    <meta property="article:publisher" content="https://www.facebook.com/SITENAME"/>
    <meta property="article:author" content="https://www.facebook.com/SITENAME"/>
    <meta property="article:tag" content="Blogging"/>
    <meta property="article:section" content="SEO"/>
    <meta property="og:image" content="PRODUCT-IMAGE-OR-LOGO-URL"/>

    <meta property="twitter:card" content="summary">
    <meta property="twitter:title" content="CURRENT-PAGE-TITLE">
    <meta property="twitter:description" content="CURRENT-PAGE-DESCRIPTION-GOES-HERE">
    <meta property="twitter:creator" content="@AptDeco">
    <meta property="twitter:url" content="CURRENT-PAGE-URL">
    <meta property="twitter:image" content="PRODUCT-IMAGE-OR-LOGO-URL">
    <meta name="twitter:site" content="@SITENAME"/>
    <meta name="twitter:domain" content="SITENAME"/>
    <meta name="twitter:creator" content="@SITENAME"/>
    <meta name="twitter:image:src" content="PRODUCT-IMAGE-OR-LOGO-URL"/>

    <link rel="publisher" href="https://plus.google.com/u/0/+SITENAME/posts"/>
  <?php } ?>

  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="shortcut icon" href="favicon.png">

  <?php
  foreach (getConfigs()['css']['cdn'] as $link){
   echo "<link href='".$link."' rel='stylesheet' type='text/css'>";
  }
  foreach (getConfigs()['css']['local'] as $link){
    echo "<link href='".$link."' rel='stylesheet' type='text/css'>";
  }
  ?>

  <!-- Google Analytics -->
  <script>
    (function (b, o, i, l, e, r) {
      b.GoogleAnalyticsObject = l;
      b[l] || (b[l] =
        function () {
          (b[l].q = b[l].q || []).push(arguments)
        });
      b[l].l = +new Date;
      e = o.createElement(i);
      r = o.getElementsByTagName(i)[0];
      e.src = '//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', '<?php echo getParam('google_analytics_id'); ?>', 'auto');
    ga('send', 'pageview');
  </script>
</head>
<body>
<!--[if lte IE 8]>
<div id="browser-status"> Dear Web User, your browser is out of date! <a href="http://browsehappy.com/" target="_blank">
  Please Upgrade Your Browser</a></div><![endif]-->