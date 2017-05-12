module.exports = {
	entry:'./main.js',
	output:{
		path:__dirname + '/public',
		filename:'mained.js'
	},
	resolve:{
		alias:{
			vue:'vue/dist/vue.js'
		}
	},
	module:{
		loaders:[{
			test:/\.js$/,
			loader:'babel-loader'
		},{
			test:/\.css$/,
			loader:'style-loader!css-loader'
		},{
			test:/\.vue$/,
			loader:'vue-loader'
		},{
			test:/\.ttf$/,
			loader:'file-loader'
		},{
			test:/\.(jpg|png|gif|jpeg)$/,
			loader:'url-loader'
		}]
	},
	devServer:{
		contentBase:'./public',
		port:52061,
		inline:true
	}
}