$(function() {
	$('div.view_comment').html(function() {
		$.ajax({
			url: 'view.php',
			
			success: function(html) {
				$('div.view_comment').html(html);
			}
		});
	});
	
	
	
	
	
});