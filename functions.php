<?php
// #Get current page name/url
function current_title($_target = null) {
  if (is_null($_target)) {
    $_target = isset($_GET['id']) ? $_GET['id'] : 'home';
  }
  return ucwords(str_replace("-", " ", $_target));
}

// #Get current inner page name/url
function inner_title($_target = null) {
  if (is_null($_target)) {
    $_target = isset($_GET['iid']) ? $_GET['iid'] : '';
  }
  return ucwords(str_replace("-", " ", $_target));
}

function isHome() {
  return current_title() == 'Home';
}

function isInnerPage(){
  return inner_title() == 'Inner Page';
}

function isPage($type, $pageName) {
  if ($type == 'main') {
    return current_title() == $pageName;
  } else {
    return inner_title() == $pageName;
  }
}
function getPartial($partial){
  switch ($partial) {
    case "header":
      require_once 'header.php';
      break;
    case "footer":
      require_once 'footer.php';
      break;
    case "sidebar":
      require_once 'sidebar.php';
      break;
    default:
      echo "No partials found";
  }
}
function get_menu($type){
  include 'tpl/partials/' . $type . '_menu.php';
}

function getConfigs(){
  return include PUBLIC_PATH. '/ik-configs.php';
}

function getParam($name = '')
{
  return getConfigs()['params'][$name];
}

/*function getStylesheets(){
  $string = '';
  foreach (getConfigs()['stylesheets']['cdn'] as $link){
    $string .= "<link href='".$link."' rel='stylesheet' type='text/css'>";
  }
  foreach (getConfigs()['stylesheets']['local'] as $link){
    $string .= "<link href='".$link."' rel='stylesheet' type='text/css'>";
  }
  return $string;
}*/