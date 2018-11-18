// JavaScript Document
				window.onscroll = function() {myFunction()};
				function myFunction() {
				
			   if(document.body.scrollTop == 1 || document.documentElement.scrollTop == 1){
				   newpost();
				   }				
				   
			   if(window.innerWidth > 720){
				if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
					$("li a").css("padding", "10px 16px 0 16px");
					$("li a.l").css("padding", "8px 16px 5px 0px");
					$("input.search").css("margin", "15px 50px 0 0px");
				}else{
					$("li a").css("padding", "18px 16px 0px 16px");
					$("li a.l").css("padding", "12px 16px 12px 0px");
					$("input.search").css("margin", "23px 50px 0 0px");
				}}
				if (document.body.scrollTop <= 1000 || document.documentElement.scrollTop <= 1000) {
					$(".imgup").css("display","none");
				}else{
					$(".imgup").css("display","block");
				 }
				}
				
				$(document).keypress(function( event ){
					if(event.keyCode == 27 || event.which == 27){
						closeimg();
						hidelogoutmenu();
						}
				});