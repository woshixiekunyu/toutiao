<template>
	<div>
		<!--<img src="images/img01.png">-->
		<div id="topNav" class="swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide active tuijian"><span>推荐</span></div>
				<div class="swiper-slide map"><span>地图</span></div>
				<div class="swiper-slide"><span>深圳</span></div>
				<div class="swiper-slide"><span>视频</span></div>
				<div class="swiper-slide"><span>社会</span></div>
				<div class="swiper-slide"><span>娱乐</span></div>
				<div class="swiper-slide"><span>科技</span></div>
				<div class="swiper-slide"><span>问答</span></div>
				<div class="swiper-slide"><span>汽车</span></div>
				<div class="swiper-slide"><span>财经</span></div>
				<div class="swiper-slide"><span>军事</span></div>
				<div class="swiper-slide"><span>体育</span></div>
				<div class="swiper-slide"><span>段子</span></div>
				<div class="swiper-slide"><span>美女</span></div>
				<div class="swiper-slide"><span>国际</span></div>
				<div class="swiper-slide"><span>趣图</span></div>
				<div class="swiper-slide"><span>健康</span></div>
				<div class="swiper-slide"><span>特产</span></div>
				<div class="swiper-slide"><span>房产</span></div>
			</div>
		</div>
		<router-view></router-view>
		<!--<img src="images/img02.png">-->
	</div>
</template>
	
<script>
	var $ = require('jquery')
	require('../public/js/swiper.min.js');
	export default {
		data:function(){
			return {
				nav:'',
				swiperWidth:'',
				maxTranslate:'',
				maxWidth:'',
				slide:'',
				slideLeft:'',
				slideWidth:'',
				slideCenter:'',
				nowTlanslate:'',
				tuijianData:''
			}
		},
		
		mounted:function(){
			var mySwiper = new Swiper('#topNav', {
				freeMode: true,
				freeModeMomentumRatio: 0.5,
				slidesPerView: 'auto',
		
			});
			
			this.swiperWidth = mySwiper.container[0].clientWidth
			this.maxTranslate = mySwiper.maxTranslate();
			this.maxWidth = -this.maxTranslate + this.swiperWidth / 2
		
			$(".swiper-container").on('touchstart', function(e) {
				e.preventDefault()
			})
			var self = this;
			mySwiper.on('tap', function(swiper, e) {
		
//				e.preventDefault()
				
				this.slide = swiper.slides[swiper.clickedIndex]
				this.slideLeft = this.slide.offsetLeft
				this.slideWidth = this.slide.clientWidth
				this.slideCenter = this.slideLeft + this.slideWidth / 2
				// 被点击slide的中心点
		
				mySwiper.setWrapperTransition(300)
		
				if(this.slideCenter < this.swiperWidth / 2) {
		
					mySwiper.setWrapperTranslate(0)
					
				} else if(this.slideCenter > this.maxWidth) {
	
					mySwiper.setWrapperTranslate(this.maxTranslate)
		
				} else {
		
					this.nowTlanslate = this.slideCenter - this.swiperWidth / 2
		
					mySwiper.setWrapperTranslate(-this.nowTlanslate)
		
				}
			
				$("#topNav  .active").removeClass('active')
		
				$("#topNav .swiper-slide").eq(swiper.clickedIndex).addClass('active');
//				console.log(e)
				if(e.path[1].className.indexOf('tuijian')!=-1){
					$.ajax({
						url:'http://localhost:88/toutiao/php/tuijian.php',
						dataType:'json',
						type:'GET',
						async:true,
						data:{
//							channel_id:'6'
						},
						success:function(data){
							self.tuijianData = data.data.res;
							console.log(self.tuijianData);
							console.log(self.$store)
							self.$store.commit('getTuijianData',self.tuijianData)
							window.location.href="#/index/tuijian"
						}
					})
				}else if(e.path[1].className.indexOf('map')!=-1){
					window.location.href="#/index/map"
				}
		
			})
			$.ajax({
				url:'http://localhost:88/toutiao/php/tuijian.php',
				dataType:'json',
				type:'GET',
				async:true,
				
				success:function(data){
					self.tuijianData = data.data.res;
					console.log(self.tuijianData);
					console.log(self.$store)
					self.$store.commit('getTuijianData',self.tuijianData)
					window.location.href="#/index/tuijian"
				}
			})


			
		}
	}
	
	
	
</script>

<style scoped>
	* {
		margin: 0;
		padding: 0;
	}
	
	#topNav {
		width: 100%;
		overflow: hidden;
		font: 16px/32px hiragino sans gb, microsoft yahei, simsun;
		border-bottom: 1px solid #f8f8f8;
	}
	
	#topNav .swiper-slide {
		padding: 0 5px;
		letter-spacing: 2px;
		width: 3rem;
		text-align: center;
	}
	
	#topNav .swiper-slide span {
		transition: all .3s ease;
		display: block;
	}
	
	#topNav .active span {
		transform: scale(1.1);
		color: #FF2D2D;
	}
	
	img {
		width: 100%;
		line-height: 0;
	}
</style>