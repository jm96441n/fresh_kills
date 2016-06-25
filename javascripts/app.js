$(document).ready(function(){
	$("#home").on('click', function(e){
		e.preventDefault();
		$("#home").removeClass("links").addClass("current_link")
		$("#menu").removeClass("current_link").addClass("links")
		$("#contact").removeClass("current_link").addClass("links")
		$("#gallery").removeClass("current_link").addClass("links")

		$("#menu_container").css("display","none")
		$("#gallery_container").css("display","none")
		$("#contact_container").css("display","none")
		$("#logo_container").css("display","inline-block")
	});

	$("#menu").on('click', function(e){
		e.preventDefault();
		$("#menu").removeClass("links").addClass("current_link")
		$("#home").removeClass("current_link").addClass("links")
		$("#contact").removeClass("current_link").addClass("links")
		$("#gallery").removeClass("current_link").addClass("links")
		$("#gallery_container").css("display","none")
		$("#contact_container").css("display","none")
		$("#logo_container").css("display","none")
		$("#menu_container").css("display","inline-block")
	});

	$("#gallery").on('click', function(e){
		e.preventDefault();
		$("#gallery").removeClass("links").addClass("current_link")
		$("#menu").removeClass("current_link").addClass("links")
		$("#contact").removeClass("current_link").addClass("links")
		$("#home").removeClass("current_link").addClass("links")
		$("#menu_container").css("display","none")
		$("#contact_container").css("display","none")
		$("#logo_container").css("display","none")
		$("#gallery_container").css("display","inline-block")
	});

	$("#contact").on('click',function(e){
		e.preventDefault();
		$("#contact").removeClass("links").addClass("current_link")

		$("#menu").removeClass("current_link").addClass("links")
		
		$("#gallery").removeClass("current_link").addClass("links")
		
		$("#home").removeClass("current_link").addClass("links")		
		
		$("#menu_container").css("display","none")
		$("#gallery_container").css("display","none")
		$("#logo_container").css("display","none")
		$("#contact_container").css("display","inline-block")
	})

})