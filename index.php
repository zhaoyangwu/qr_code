<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/22
 * Time: 10:51
 */
include "phpqrcode/phpqrcode.php";

//定义纠错级别
$errorLevel = "L";
//定义生成图片宽度和高度;默认为3
$size = "4";
//定义生成内容
$content="http://api.jinsque.com/v6/";
//调用QRcode类的静态方法png生成二维码图片//
QRcode::png($content, "test.png", $errorLevel, $size);


//生成网址类型
//$url="http://jingyan.baidu.com/article/48a42057bff0d2a925250464.html";
//QRcode::png($url, false, $errorLevel, $size);