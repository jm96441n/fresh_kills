$(document).ready(function(){
	$("#home").on('click', function(e){
		e.preventDefault();
		$("#menu_container").css("display","none")
		$("#gallery_container").css("display","none")
		$("#contact_container").css("display","none")
		$("#logo_container").css("display","inline-block")
	});

	$("#menu").on('click', function(e){
		e.preventDefault();
		$("#gallery_container").css("display","none")
		$("#contact_container").css("display","none")
		$("#logo_container").css("display","none")
		$("#menu_container").css("display","inline-block")
	});

	$("#gallery").on('click', function(e){
		e.preventDefault();
		$("#menu_container").css("display","none")
		$("#contact_container").css("display","none")
		$("#logo_container").css("display","none")
		$("#gallery_container").css("display","inline-block")
	});

	$("#contact").on('click',function(e){
		e.preventDefault();
		$("#menu_container").css("display","none")
		$("#gallery_container").css("display","none")
		$("#logo_container").css("display","none")
		$("#contact_container").css("display","inline-block")
	})

})