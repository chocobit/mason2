/************************Change lang header*************************/ 

$(document).delegate('#lang_th', 'click', function(event) {
			$.post('lang.php', {
				'lang' : "th"
			}, function(response) {
				window.location.reload();
			});
	
});

$(document).delegate('#lang_en', 'click', function(event) {
			$.post('lang.php', {
				'lang' : 'en'
			}, function(response) {
				window.location.reload();
			});
	
});
/************************Change lang header*************************/ 

