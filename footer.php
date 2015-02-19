<?php
foreach (getConfigs()['js']['cdn'] as $link){
  echo "<script src=".$link."></script>";
}
foreach (getConfigs()['js']['local'] as $link){
  echo "<script src=".$link."></script>";
}
?>
</body>
</html>