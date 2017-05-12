<?php
	header('Access-Control-Allow-Origin:*');
	//请求地址
	$url = 'http://sdk.look.360.cn/sdkv2/tabs?u=7a8bff2f256b5c927fd008845b541922&sign=sjzs&version=7.0.26&news_sdk_version=1.1.6&device=0&sdkv=3&tabsv=8&market=300001';
	
	//获取内容
	$res = file_get_contents($url);
	
	echo $res;
?>