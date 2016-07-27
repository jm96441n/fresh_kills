$(document).ready(function(){
	$("#home").on('click', function(e){
		e.preventDefault();
		$("#home").addClass("current_link_black")
		$("#menu").removeClass("current_link_black")
		$("#contact").removeClass("current_link_black")
		$("#gallery").removeClass("current_link_black")
		$("#menu").removeClass("current_link_white")
		$("#contact").removeClass("current_link_white")
		$("#gallery").removeClass("current_link_white")

		$("#menu_container").css("display","none")
		$("#gallery_container").css("display","none")
		$("#contact_container").css("display","none")
		$("#logo_container").css("display","inline-block")
		$("nav").addClass("nav_black")
		$("nav").removeClass("nav_white")
		$("#links_p > a").addClass("nav_items_black")
		$("#links_p > a").removeClass("nav_items_white")
		$("#footer").addClass("footer_black")
		$("#footer").removeClass("footer_white")
	});

	$("#menu").on('click', function(e){
		e.preventDefault();
		$("#menu").addClass("current_link_white")
		$("#home").removeClass("current_link_black")
		$("#contact").removeClass("current_link_black")
		$("#gallery").removeClass("current_link_black")
		$("#home").removeClass("current_link_white")
		$("#contact").removeClass("current_link_white")
		$("#gallery").removeClass("current_link_white")
		$("#gallery_container").css("display","none")
		$("#contact_container").css("display","none")
		$("#logo_container").css("display","none")
		$("#menu_container").css("display","inline-block")
		$("nav").addClass("nav_white")
		$("nav").removeClass("nav_black")
		$("#links_p > a").addClass("nav_items_white")
		$("#links_p > a").removeClass("nav_items_black")
		$("#footer").addClass("footer_white")
		$("#footer").removeClass("footer_black")
	});

	$("#gallery").on('click', function(e){
		e.preventDefault();
		$("#gallery").addClass("current_link_black")
		$("#menu").removeClass("current_link_black")
		$("#contact").removeClass("current_link_black")
		$("#home").removeClass("current_link_black")
		$("#menu").removeClass("current_link_white")
		$("#contact").removeClass("current_link_white")
		$("#home").removeClass("current_link_white")
		$("#menu_container").css("display","none")
		$("#contact_container").css("display","none")
		$("#logo_container").css("display","none")
		$("#gallery_container").css("display","inline-block")
		$("nav").addClass("nav_black")
		$("nav").removeClass("nav_white")
		$("#links_p > a").addClass("nav_items_black")
		$("#links_p > a").removeClass("nav_items_white")
		$("#footer").addClass("footer_black")
		$("#footer").removeClass("footer_white")

	});

	$("#contact").on('click',function(e){
		e.preventDefault();
		$("#contact").addClass("current_link_white")

		$("#menu").removeClass("current_link_white")
		
		$("#gallery").removeClass("current_link_white")
		
		$("#home").removeClass("current_link_white")		
		$("#menu").removeClass("current_link_black")
		
		$("#gallery").removeClass("current_link_black")
		
		$("#home").removeClass("current_link_black")		
		
		
		$("#menu_container").css("display","none")
		$("#gallery_container").css("display","none")
		$("#logo_container").css("display","none")
		$("#contact_container").css("display","inline-block")
		$("nav").addClass("nav_white")
		$("nav").removeClass("nav_black")
		$("#links_p > a").addClass("nav_items_white")
		$("#links_p > a").removeClass("nav_items_black")
		$("#footer").addClass("footer_white")
		$("#footer").removeClass("footer_black")
	})

})