<?php
/**
 * svn钩子post-commit里执行的文件
 * 存放在svn服务器上
 */
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://zhoumengkang.com/update.php");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);