<?php
require_once __DIR__ . '/../autoload.php';

use Qiniu\Auth;
use Qiniu\Storage\UploadManager;

$accessKey = 'ckkyR3A-XzRbxCjPsUP_5cqhB2n5ccMIR8WjP2hM';
$secretKey = 'RuOK0A7jfNZ57430Sd6uh4d__0MmqOVKPTB28sP2';
$auth = new Auth($accessKey, $secretKey);

$bucket = 'Bucket_Name';
// 上传文件到七牛后， 七牛将文件名和文件大小回调给业务服务器.
// 可参考文档: http://developer.qiniu.com/docs/v6/api/reference/security/put-policy.html
$policy = array(
    'callbackUrl' => 'http://your.domain.com/callback.php',
    'callbackBody' => 'filename=$(fname)&filesize=$(fsize)'
);
$uptoken = $auth->uploadToken($bucket, null, 3600, $policy);

//上传文件的本地路径
$filePath = './php-logo.png';

$uploadMgr = new UploadManager();

list($ret, $err) = $uploadMgr->putFile($uptoken, null, $filePath);
echo "\n====> putFile result: \n";
if ($err !== null) {
    var_dump($err);
} else {
    var_dump($ret);
}
