<?php
require_once __DIR__ . '/../autoload.php';

use Qiniu\Auth;
use Qiniu\Storage\BucketManager;

$accessKey = 'ckkyR3A-XzRbxCjPsUP_5cqhB2n5ccMIR8WjP2hM';
$secretKey = 'RuOK0A7jfNZ57430Sd6uh4d__0MmqOVKPTB28sP2';

//初始化Auth状态：
$auth = new Auth($accessKey, $secretKey);

//初始化BucketManager
$bucketMgr = new BucketManager($auth);
