<?php
session_start();
$con=mysqli_connect("localhost","root","","budaun");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'helpline/');
define('SITE_PATH','http://127.0.0.1/helpline/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');
?>