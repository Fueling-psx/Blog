var Public = function(){	
	var showMenu = function ($a,$b) {
		 $($a).hover(function () {
		 	  $(this).children($b).show(400);
		 	  $(this).css({
		 	  	height: '60px'
		 	  });
		 },function () {
		 	  $($b).hide(400);
		 }) 
	}
	
	return {
		init:function(){
			showMenu('.nav .pull-right','.menu');
			showMenu('.nav>ul>li','.nav>ul>li>ul');
		}
	};
}();