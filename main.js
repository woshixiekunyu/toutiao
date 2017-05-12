
//引入vue
import Vue from 'vue';
window.Vue = Vue;
//var Vue = require('vue')
//console.log(Vue)
//引入juuery
import $ from 'jquery';

import Vuex from 'vuex';
Vue.use(Vuex)
//引入weui
//import weui from 'mui';
//require('mui')
//import './weui/css/mui.css';
require('./mui/css/mui.css')

//引入vue路由
import VueRouter from 'vue-router';
Vue.use(VueRouter);

//引入xheader模块
var xheader = require('./component/xheader.vue');
var tuijian = require('./component/tuijian.vue')
var map = require('./component/map.vue')


var router = new VueRouter({
	routes:[{
		path:'/index',
		component:xheader,
		children:[{
			path:'tuijian',
			component:tuijian
		},{
			path:'map',
			component:map
		}]
	}]
	
})

var store = new Vuex.Store({
	state:{
		TuijianData:''
	},
	mutations:{
		getTuijianData:function(state,a){
				state.TuijianData = a;
//				console.log(state.TuijianData,1111111111111111)
			}

		
	},
	getters:{
		setTuijianData:function(state){
//			console.log(state.TuijianData)
			return state.TuijianData;
		}
	}
})

new Vue({
	el:'#LOL',
	data:{
		
	},
	template:'<div><router-view></router-view></div>',
	mounted:function(){
		
	},
	router,
	store,
})
