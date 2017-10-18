<?php 
require 'auth.php';
$upToken = $auth->uploadToken('troye');
?>
<form method="post" action="http://up-z2.qiniu.com" enctype="multipart/form-data">
  <input name="token" type="hidden" value="<?=$upToken?>">
  <input name="file" type="file" />
  <input type="submit" value="submit"/>
</form>