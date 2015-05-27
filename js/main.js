$(document).ready(function(){
var counter = 0;

	$("#hidded-padding").click(function(){
		counter ++;
		console.log(counter);
		if ($(document).width() < 959 && $(document).width() > 600 && (counter % 2 != 0)) {
			$("nav.menu-clasic").css("top","40px");
		};
		if ($(document).width() < 959 && $(document).width() > 600 && (counter % 2 == 0)) {
			$("nav.menu-clasic").css("top","5px");
		};
		if($( document ).width() < 599 && (counter % 2 != 0)){
			$("nav.menu-clasic").css("top","45px");
			console.lo("45");
		};
		if($( document ).width() < 599 && (counter % 2 == 0)){
			$("nav.menu-clasic").css("top","-210px");
			console.lo("210");
		};

	});
})
