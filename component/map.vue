<template>
	<div>
		<div id="allmap"></div>
	</div>
</template>

<script type="text/javascript">
	import $ from 'jquery';
	export default {
		mounted: function() {
			// 百度地图API功能
			var map = new BMap.Map("allmap"); // 创建Map实例
			map.centerAndZoom('汕头', 11); // 初始化地图,设置中心点坐标和地图级别
			
			map.addControl(new BMap.MapTypeControl()); //添加地图类型控件
			map.setCurrentCity("汕头"); // 设置地图显示的城市 此项是必须设置的
			map.enableScrollWheelZoom(true); //开启鼠标滚轮缩放
//			$('#allmap').css('height',50%)
		}
	}
</script>

<style scoped type="text/css">
	body,
	html,
	#allmap {
		width: 100%;
		height: 300px;
		overflow: hidden;
		margin: 0;
		font-family: "微软雅黑";
	}
</style>