$(function(){
	$(".services_tabs").on('click',function(){
		var tab = $(this).attr("name");
		$("#showTabs").fadeOut(300,function(){
			$("#showContent").show(function(){
				$("#"+tab).fadeIn(300);
			});
		});
	});

	$(".goBack").on('click',function(){
		$("#showContent").fadeOut(300,function(){
			$(".servicesContent").hide();
			$("#showTabs").fadeIn(300);
		});
	});
});
