<?php
require_once __DIR__ . '/../autoload.php';

use Qiniu\Auth;

$accessKey = 'ckkyR3A-XzRbxCjPsUP_5cqhB2n5ccMIR8WjP2hM';
$secretKey = 'RuOK0A7jfNZ57430Sd6uh4d__0MmqOVKPTB28sP2';
$auth = new Auth($accessKey, $secretKey);

$bucket = 'Bucket_Name';
$upToken = $auth->uploadToken($bucket);

echo $upToken;
