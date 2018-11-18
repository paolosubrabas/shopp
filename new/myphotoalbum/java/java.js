// JavaScript Document
			
			function editimages(){
				$('#edit1').show();
				$('#edit2,#edit3').hide();
				}
			
			function editinfo(){
				$('#edit2').show();
				$('#edit1,#edit3').hide();
				}
			
			function editpass(){
				$('#edit3').show();
				$('#edit2,#edit1').hide();
				}
			
			$(document).ready(function(){
			  $(".imgdisable").bind("contextmenu",function(e){
				return false;
			  });
			  gotorefreshnotif();
			});
			
			function gotorefreshnotif() {
				refreshnotif();
				setTimeout(function(){ gotorefreshnotif() }, 10000);
			}
			var messto,m;
			
			function refreshnewmessage(){
				newmessage(messto);
				m = setTimeout(function(){ refreshnewmessage() }, 1000);
				}
			
			function gotorefreshnewmessage(user){
				messto = user;
				refreshnewmessage();
				}
			
			var c,post_id;
			
			function refreshcomm() {
				viewcomment(post_id)
				c = setTimeout(function(){ refreshcomm() }, 2000);
			}
			
			function singlepostcomment(id){
				post_id = id;
				refreshcomm();
				}
			
			function imgmodal(pic,id){
				$('#Imgmodal'+id).css('display','block');
				document.getElementById("img"+id).src = "upload/"+pic;
				$('body').css("overflow", "hidden");
				post_id = id;
				refreshcomm();
			}
			
			function closeimg() { 
				$('.modal').css('display','none');
				$('body').css("overflow", "auto");
				clearTimeout(c);
				hidepicmenu();
			}
			
		    function account(account){
				window.location.href="profile.php?account="+account;
				}
			function gotopost(post){
				window.location.href="post.php?post="+post;
				}	
				
			function gotoedit(){
				window.location.href="editprofile.php";
				}
			function gotologout(){
				$('.modallogout').show();
				$('body').css("overflow", "hidden");
				closemess();
				}
			function hidelogoutmenu(){
				$('.modallogout').hide();
				$('body').css("overflow", "auto");
				}
			function logout(){
				if(window.XMLHttpRequest){
						xmlhttp = new XMLHttpRequest();
						}
					else{
						xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
						}
						xmlhttp.onreadystatechange=function(){
						if(this.readyState == 4 && this.status == 200){
						$('.logoutmenu').html(this.responseText);
						setTimeout(function(){ window.location.href="login/";},1000)
						}
					};
		
				xmlhttp.open("GET","process/logout.php", true);
				xmlhttp.send();		
				}
				
			function hide(){
				   $("#show1").hide();
				   $("#show2").hide();
				   $("#show3").hide();
				   $('#navhide1').html('unhide');
				   $('#navhide2').html('unhide');
				   $('#navhide3').html('unhide');
				}
			
			function show1(){
				if(document.getElementById('searchbar').value!=""){
				   searchuser();
				   $("#show1").show();
				   $("#show2").hide();
				   $("#show3").hide();
				   $('#navhide1').html('hide');
				   $('#navhide2').html('unhide');
				   $('#navhide3').html('unhide');
				}
			   else if(document.getElementById('searchbar').value==""){
				    $("#show1").hide();
			   		$('#navhide1').html('unhide');
					}
			}
			function show2(){
			   if(document.getElementById('navhide2').innerHTML=="unhide"){
				   $("#show2").show();
				   $("#show1").hide();
				   $("#show3").hide();
				   $('#navhide2').html('hide');
				   $('#navhide1').html('unhide');
				   $('#navhide3').html('unhide');
				}
			   else{$("#show2").hide();
			   		$('#navhide2').html('unhide');}
			}
			function show3(){
			   if(document.getElementById('navhide3').innerHTML=="unhide"){
				   $("#show3").show();
				   notification();
				   $("#show2").hide();
				   $("#show1").hide();
				   $('#navhide3').html('hide');
				   $('#navhide2').html('unhide');
				   $('#navhide1').html('unhide');
				   }
			   else{$("#show3").hide();
			        $('#navhide3').html('unhide');}
			}
			function changeSRC(page){
				document.getElementById('iframe').src=page;
				   $('.content').css("display","none");
				   $('.index').css("display","block");
				   $("#show2").css("display","none");
				   $("#show1").css("display","none");
				   $("#show3").css("display","none");
				}
        
			function gotoTop() {
				$('html,body').animate({ scrollTop: 1 }, 'slow');
			}
			
			function like(id,account){
				if(document.getElementById('likeunlike'+id).innerHTML=='like'){
				$('#like'+id).css('background-image','url(images/like.png)');
				$('#likeunlike'+id).html("unlike");
				addlike(id,account,1);
				}
				else{$('#like'+id).css('background-image','url(images/notification.png)');
				$('#likeunlike'+id).html("like");
				addlike(id,account,2);}
			}
		    function addlike(id,account,p){
					if(window.XMLHttpRequest){
						xmlhttp = new XMLHttpRequest();
						}
					else{
						xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
						}
						xmlhttp.onreadystatechange=function(){
						if(this.readyState == 4 && this.status == 200){
						document.getElementById('likenum'+id).innerHTML = this.responseText;	
						}
					};
		
				xmlhttp.open("GET","process/like.php?id="+id+"&&account="+account+"&&process="+p, true);
				xmlhttp.send();
			}
			
		function viewcomment(id){
			if(window.XMLHttpRequest){
						xmlhttp = new XMLHttpRequest();
						}
					else{
						xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
						}
						xmlhttp.onreadystatechange=function(){
						if(this.readyState == 4 && this.status == 200){
						document.getElementById('comments'+id).innerHTML=this.responseText;
						}
					};
		
				xmlhttp.open("GET","process/comment.php?id="+id, true);
				xmlhttp.send();
			}
			
		function addcomment(id,account){
			
			$('#comment'+id).keyup(function( event ) {
				var comment = $('#comment'+id).val();
				if ( event.which == 13 && comment != "") {
				document.getElementById('comment'+id).value="";	
				if(window.XMLHttpRequest){
						xmlhttp = new XMLHttpRequest();
						}
					else{
						xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
						}
						xmlhttp.onreadystatechange=function(){
						if(this.readyState == 4 && this.status == 200){
						document.getElementById('comments'+id).innerHTML=this.responseText;
						}
					};
		
				xmlhttp.open("GET","process/comment.php?id="+id+"&&account="+account+"&&comment="+comment, true);
				xmlhttp.send();
			  }});}
			  
			 function follow2(account){
				if(document.getElementById('follow'+account).value=="Follow"){
					 addfollow(account,1);
					}
				else{
					addfollow(account,2);
					}
			}
			  function follow(account){
				if(document.getElementById('follow').value=="Follow"){
					 addfollow(account,1);
					}
				else{
					addfollow(account,2);
					}
			}
			
			function addfollow(account,p){
					if(window.XMLHttpRequest){
						xmlhttp = new XMLHttpRequest();
						}
					else{
						xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
						}
						xmlhttp.onreadystatechange=function(){
						if(this.readyState == 4 && this.status == 200){
								$('div.follow').append(this.responseText);	
							    countfollowers(account);
						}
					};
		
				xmlhttp.open("GET","process/follow.php?account="+account+"&&process="+p, true);
				xmlhttp.send();
			}
			function countfollowers(account){
					if(window.XMLHttpRequest){
						xmlhttp = new XMLHttpRequest();
						}
					else{
						xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
						}
						xmlhttp.onreadystatechange=function(){
						if(this.readyState == 4 && this.status == 200){
								$('#followers'+account).html(this.responseText);	
						}
					};
		
				xmlhttp.open("GET","process/count.php?account="+account, true);
				xmlhttp.send();
			}
			
			function searchuser(){
				    $('div.box1').html("");
				    var user = document.getElementById('searchbar').value;
					if(window.XMLHttpRequest){
						xmlhttp = new XMLHttpRequest();
						}
					else{
						xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
						}
						xmlhttp.onreadystatechange=function(){
						if(this.readyState == 1 || this.readyState == 2 || this.readyState == 3){
								$('div.box1').html('<img src="images/loading.gif" width="30px" height="30px" />');	
						}
						if(this.readyState == 4 && this.status == 200){
								$('div.box1').html(this.responseText);	
						}
					};
		
				xmlhttp.open("GET","process/search.php?searchuser="+user, true);
				xmlhttp.send();
			}
			
			function notification(){
					if(window.XMLHttpRequest){
						xmlhttp = new XMLHttpRequest();
						}
					else{
						xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
						}
						xmlhttp.onreadystatechange=function(){
						if(this.readyState == 1 || this.readyState == 2 || this.readyState == 3){
								$('div.box3').html('<img src="images/loading.gif" width="30px" height="30px" />');	
						}
						else if(this.readyState == 4 && this.status == 200){
								$('div.box3').html(this.responseText);	
						}
					};
		
				xmlhttp.open("GET","notification.php", true);
				xmlhttp.send();
			}
			
			function feed(){
				var lastpost = document.getElementById('lastpost').value;
					if(window.XMLHttpRequest){
						xmlhttp = new XMLHttpRequest();
						}
					else{
						xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
						}
						xmlhttp.onreadystatechange=function(){
						if(this.readyState == 4 && this.status == 200){
								$('.content').append(this.responseText);	
						}
					};
		
				xmlhttp.open("GET","process/feed.php?lastpost="+lastpost, true);
				xmlhttp.send();
			}
			
			function newfeed(){
				var post = document.getElementById('post').value;
					if(window.XMLHttpRequest){
						xmlhttp = new XMLHttpRequest();
						}
					else{
						xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
						}
						xmlhttp.onreadystatechange=function(){
						if(this.readyState == 4 && this.status == 200){
								$('.content').prepend(this.responseText);	
						}
					};
		
				xmlhttp.open("GET","process/feed.php?newpost="+post, true);
				xmlhttp.send();
			}
			
			function newpost(){
				var newpost = document.getElementById('post').value;
				var account = document.getElementById('lastpost').value;
				if(window.XMLHttpRequest){
						xmlhttp = new XMLHttpRequest();
						}
					else{
						xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
						}
						xmlhttp.onreadystatechange=function(){
						if(this.readyState == 4 && this.status == 200){
								$('#profilepost').prepend(this.responseText);	
								countfollowers(account);
						}
					};
		
				xmlhttp.open("GET","process/post.php?newpost="+newpost+"&&account="+account, true);
				xmlhttp.send();
			}
			
			function upload(){
					if(window.XMLHttpRequest){
						xmlhttp = new XMLHttpRequest();
						}
					else{
						xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
						}
						xmlhttp.onreadystatechange=function(){
						if(this.readyState == 4 && this.status == 200){
								$('.uploadbox').append(this.responseText);	
						}
					};
		
				xmlhttp.open("GET","process/upload.php", true);
				xmlhttp.send();
			}
			
			
			function profinfoedit(){	
	   
			var data = $("#profinfo").serialize();
				
			$.ajax({
				
			type : 'POST',
			url  : 'process/editprofinfo.php',
			data : data,
			beforeSend: function(){
			
				$("#infobtn").val("Submitting");
			},
			success :  function(response){		
				 $('#edit2').append(response);
				 $("#infobtn").val("Submit");
				}
			});
		return false;
		}
		
		function profpassedit(){	
	   
			var data = $("#profpass").serialize();
				
			$.ajax({
				
			type : 'POST',
			url  : 'process/editprofpass.php',
			data : data,
			beforeSend: function(){
			
				$("#passbtn").val("Submitting");
			},
			success :  function(response){		
				 $('#edit3').append(response);
				 $("#passbtn").val("Submit");
				}
			});
		return false;
		}
	    function refreshnotif(){
					if(window.XMLHttpRequest){
						xmlhttp = new XMLHttpRequest();
						}
					else{
						xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
						}
						xmlhttp.onreadystatechange=function(){
						if(this.readyState == 4 && this.status == 200){
								$('#refreshnotif').html(this.responseText);		
						}
					};
		
				xmlhttp.open("GET","process/refreshnotif.php", true);
				xmlhttp.send();
			}
			
		function selectusertomessage(){
			     $('#messbox').show();
				 $('.createmess').hide();
					if(window.XMLHttpRequest){
						xmlhttp = new XMLHttpRequest();
						}
					else{
						xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
						}
						xmlhttp.onreadystatechange=function(){
						if(this.readyState == 4 && this.status == 200){
								$('.usershere').html(this.responseText);		
						}
					};
		
				xmlhttp.open("GET","process/message.php", true);
				xmlhttp.send();
			}
			
		function closemess(){
			$('.createmess').show();
			clearTimeout(m);
			$('.usershere').show('slow');
			$('.usershere').html("");
			$('.messhere').hide();
			$('.messhere').html("");
			
				if(window.XMLHttpRequest){
						xmlhttp = new XMLHttpRequest();
						}
					else{
						xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
						}
						xmlhttp.onreadystatechange=function(){
						if(this.readyState == 4 && this.status == 200){
						$('#messbox').hide();
						}
					};
		
				xmlhttp.open("GET","process/remove.php", true);
				xmlhttp.send();
			}
			
		function gotosearchusertomessage(){
			$('.messhere').hide();
			$('.usershere').show();
			clearTimeout(m);
			
			   if(window.XMLHttpRequest){
						xmlhttp = new XMLHttpRequest();
						}
					else{
						xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
						}
						xmlhttp.onreadystatechange=function(){
						if(this.readyState == 4 && this.status == 200){
							$('.messhere').html("");
						}
					};
		
				xmlhttp.open("GET","process/remove.php", true);
				xmlhttp.send();
			}
		
		 function searchusertomessage(){
			
			var searchuser = $('#searchusertomessage').val();
			
				if(window.XMLHttpRequest){
						xmlhttp = new XMLHttpRequest();
						}
					else{
						xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
						}
						xmlhttp.onreadystatechange=function(){
						if(this.readyState == 4 && this.status == 200){
						$('.usershere').html(this.responseText);
						}
					};
		
				xmlhttp.open("GET","process/searchmess.php?user="+searchuser, true);
				xmlhttp.send();
			  }
			  
		function showmessage(user){
			$("#show3").hide();
			$('#messbox').show();
			startmessage(user);
			}
			
		function startmessage(user){
					if(window.XMLHttpRequest){
						xmlhttp = new XMLHttpRequest();
						}
					else{
						xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
						}
						xmlhttp.onreadystatechange=function(){
						if(this.readyState == 4 && this.status == 200){
							    $('.usershere').hide();
								$('.messhere').show();
								$('.messhere').html(this.responseText);		
						}
					};
		
				xmlhttp.open("GET","process/startmess.php?user="+user, true);
				xmlhttp.send();
			}
			
	   function sendmessage(account){
			
			$('#usermess').keyup(function( event ) {
				var message = $('#usermess').val();
				if ( event.which == 13 && message != "") {
				document.getElementById('usermess').value="";	
				if(window.XMLHttpRequest){
						xmlhttp = new XMLHttpRequest();
						}
					else{
						xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
						}
						xmlhttp.onreadystatechange=function(){
						if(this.readyState == 4 && this.status == 200){
						$('#messages').append(this.responseText);
						}
					};
		
				xmlhttp.open("GET","process/sendmessage.php?account="+account+"&&message="+message, true);
				xmlhttp.send();
			  }});}
			
			function newmessage(user){
					if(window.XMLHttpRequest){
						xmlhttp = new XMLHttpRequest();
						}
					else{
						xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
						}
						xmlhttp.onreadystatechange=function(){
						if(this.readyState == 4 && this.status == 200){
								$('#messages').append(this.responseText);		
						}
					};
		
				xmlhttp.open("GET","process/newmessage.php?user="+user, true);
				xmlhttp.send();
			}
			function showpicmenu(){
				$('.picmenu').show();
				}
			function showpicmenu2(id){
				$('#picmenu'+id).show();
				}
				
			function hidepicmenu(){
				$('.picmenu').hide('fast');
				}
			function deletepost(id){
				closeimg();
				if(window.XMLHttpRequest){
						xmlhttp = new XMLHttpRequest();
						}
					else{
						xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
						}
						xmlhttp.onreadystatechange=function(){
						if(this.readyState == 4 && this.status == 200){
							$('#profilepost').html(this.responseText);
							countfollowers();		
						}
					};
		
				xmlhttp.open("GET","process/deletepost.php?postid="+id, true);
				xmlhttp.send();
				}
				
				function reportpost(id){
				if(window.XMLHttpRequest){
						xmlhttp = new XMLHttpRequest();
						}
					else{
						xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
						}
						xmlhttp.onreadystatechange=function(){
						if(this.readyState == 4 && this.status == 200){
						hidepicmenu();		
						}
					};
		
				xmlhttp.open("GET","process/report.php?postid="+id, true);
				xmlhttp.send();
				}