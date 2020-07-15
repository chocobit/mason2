$(document).ready(function() {


	$( "#jobtype" ).change(function() {
  		
  		var jobtype_id = $( "#jobtype" ).val();

  		if(jobtype_id!=0){

	  		$.post('pages/home/action.php', {
					'action' : 'jobtype',
					'jobtype_id' : jobtype_id
					
				}, function(response) {
					console.log(response);
					// var obj = jQuery.parseJSON(response);
					 $( "#product" ).html(response);
			});
  		}else{
  			$.post('pages/home/action.php', {
					'action' : 'type_error',
					'jobtype_id' : jobtype_id
				}, function(response) {
					// console.log(response);
					// var obj = jQuery.parseJSON(response);
					 $( "#product" ).html(response);
			});
  		}
	});

	$( "#product" ).change(function() {
  		
  		var product_id = $( "#product" ).val();

  		$.post('pages/home/action.php', {
				'action' : 'Colour',
				'product_id' : product_id
				
			}, function(response) {
				console.log(response);
				// var obj = jQuery.parseJSON(response);
				 $( "#micron" ).html(response);

		});

	});


	$(document).delegate('#result', 'click', function(event) {

		var product_id = $( "#product" ).val() ;
		var area = $( "#area" ).val();
		var micron = $( "#micron" ).val();

		if($( "#micron" ).val() != ""  && $( "#area" ).val()!= ""  && $( "#product" ).val() != "") {

			window.location = "index.php?op=product-detail&product_id="+product_id+"&area="+area+"&micron="+micron
			
		} else {

			alert("กรุณากรอกข้อมูลให้ครบถ้วน");
			
		}
		return false;
	});

		$("#s_province").change(function(){

		    // alert("The text has been changed.");
		    
		    var s_keyword = $('#s_province').val();
			   
			if (s_keyword != "") {
				var keyword = '&s_category='+s_keyword;

			
			window.location = 'index.php?op=product-index' + keyword;
			}
		});

});

