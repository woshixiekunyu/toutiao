<template>
	<div>
		<ul class="mui-table-view">
			<li class="mui-table-view-cell mui-media" v-for="item in getdata">
				<a href="javascript:;" class="">
					<img class="mui-media-object mui-pull-right" :src="item.i">
					<div class="mui-media-body">
						<!--{{d.stag}}-->
						<p class="mui-ellipsis">{{item.t}}</p>
					</div>
				</a>
			</li>
		</ul>
	</div>
</template>

<script>
	export default {
		data(){
			return {
//				src:require('../images/laoxie.jpg'),
//				data:null
//				data:''
			}
		},

		computed:{
			getdata:function(){
				
				return this.$store.getters.setTuijianData

			}
		}

		
	}
</script>

<style>
</style>