// JavaScript Document
window.onscroll = function() {myFunction()};
			function myFunction() {
				
			    var height = $( document ).height();
				var windowh = $( window ).height();
				
			   if(Math.round(document.body.scrollTop+windowh) == height || 
			      Math.round(document.documentElement.scrollTop+windowh) == height){
				   feed();
				   }
				   
			   if(document.body.scrollTop == 1 || document.documentElement.scrollTop == 1){
				   newfeed();
				   }					
				
			   if(window.innerWidth > 720){
				if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
					$("li a").css("padding", "10px 16px 0 16px");
					$("li a.l").css("padding", "8px 16px 5px 0px");
					$("input.search").css("margin", "15px 50px 0 0px");
				}else{
					$("li a").css("padding", "18px 16px 0px 16px");
					$("li a.l").css("padding", "12px 16px 12px 0px");
					$("input.search").css("margin", "23px 50px 0 0px");
				}}
				if (document.body.scrollTop >= 1000 || document.documentElement.scrollTop >= 1000) {
					$(".imgup").css("display","block");
				}else{
					$(".imgup").css("display","none");
				 }
				}