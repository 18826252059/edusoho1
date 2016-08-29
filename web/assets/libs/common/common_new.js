/*
*
* create by Ming
* 2016/3/4
*
*/

define(function(require, exports, module){

	$('.j-cateleft .j-item').hover(function(){
		var index = $(this).index();
		$(this).addClass('cur').siblings().removeClass('cur');
		$('.j-cateright').addClass('cur');
		$('.j-cateright .j-rwrap').eq(index).addClass('cur').siblings().removeClass('cur');
	});

	$(".u-indexnavcatedialog").hover(function(){

	},function(){
		$('.j-cateleft .j-item').removeClass('cur');
		$('.j-cateright').removeClass('cur');
		$('.j-cateright .j-rwrap').removeClass('cur');
	})

})