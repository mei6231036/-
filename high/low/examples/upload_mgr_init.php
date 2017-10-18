<?php
require_once __DIR__ . '/../autoload.php';

use Qiniu\Auth;
use Qiniu\Storage\UploadManager;

$accessKey = 'ckkyR3A-XzRbxCjPsUP_5cqhB2n5ccMIR8WjP2hM';
$secretKey = 'RuOK0A7jfNZ57430Sd6uh4d__0MmqOVKPTB28sP2';
$auth = new Auth($accessKey, $secretKey);

// 空间名  http://developer.qiniu.com/docs/v6/api/overview/concepts.html#bucket
$bucket = 'Bucket_Name';

// 生成上传Token
$token = $auth->uploadToken($bucket);

// 构建 UploadManager 对象
$uploadMgr = new UploadManager();
