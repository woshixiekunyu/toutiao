<?php
	
	header('Access-Control-Allow-Origin:*');
	$url = 'http://sdk.look.360.cn/sdkv2/list?uid=79c6928f848bd9eaac8041541d1cd9e7&sign=sjzs&version=7.0.26&market=300001&news_sdk_version=1.1.6&stype=portal&net=4&sdkv=3&device=0&v=1&sv=9&n=10&newest_showtime=1494572365&oldest_showtime=1494572159&c=youlike&scene=8001&sub_scene=1&refer_scene=0&refer_subscene=1&action=1&s_enid=n-agvxi-35-ka0si-y2c3a-bG9jYWxfR3VhbmdaaG91X0d1YW5nRG9uZw==-16be&s_dn=TWktNGM=&s_av=7.0&performance=W3sidGltZV9kZWxheSI6MzQwOCwiaHR0cF9zdGF0dXMiOjAsIm5ldF9zdGF0dXMiOjF9LHsidGltZV9kZWxheSI6MTI0OTYsImh0dHBfc3RhdHVzIjoyMDAsIm5ldF9zdGF0dXMiOjF9LHsidGltZV9kZWxheSI6MTk3NSwiaHR0cF9zdGF0dXMiOjIwMCwibmV0X3N0YXR1cyI6MX0seyJ0aW1lX2RlbGF5Ijo0NzA2MSwiaHR0cF9zdGF0dXMiOjAsIm5ldF9zdGF0dXMiOjF9LHsidGltZV9kZWxheSI6MTcyMywiaHR0cF9zdGF0dXMiOjIwMCwibmV0X3N0YXR1cyI6MX1d&brand=WGlhb21p';
	
	$res = file_get_contents($url);
	
	echo $res;
?>