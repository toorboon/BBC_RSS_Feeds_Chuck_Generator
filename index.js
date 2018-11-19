$(document).ready(function(){

	$('.joke_button').on('click',function(){
		type = $(this).attr('id');
			make_jokes(type);
	});
	
	setInterval(function() {
	    var date = new Date();
	    $('#clock-wrapper').html(
	        (date.getDate()) + "." + (date.getMonth()+1) + "." + date.getFullYear() + "," +  date.getHours() + ":" + (( date.getMinutes() < 10 ? "0" : "" ) + date.getMinutes()) + ":" + (( date.getSeconds() < 10 ? "0" : "" ) + date.getSeconds())
	        );
		}, 500)
   	;

   	$('#BBC').on('click',function(){
	   	call_BBC();
	});

	

	function call_BBC() {
		swal("How many BBC News you want to see?", {
	      input: "text",
	      content: 'Enter the number here!',
	      content: "input"
		})
		.then((value) => {
		  	$.ajax({
	            url:"process_rss.php",
	            method: "post",
	           	data:{'count':value},
	          	dataType:"text",
	            success:function(data)

	            {
	              	$('#news_container').html(data);
	              	$('#bbc_chuck').on('click',function(){
						make_jokes('chuck');
						setTimeout(function () {call_BBC();},5000);
					});
	            }
	    	});
		});
	}

	function make_jokes(type){
		$.ajax({
	            url:"make_jokes.php",
	            method: "post",
	            data:{'type':type},
	            dataType:"text",
	            success:function(data)

	            {
	              $('#jokes').html(data);
	            }
	    });
	}

});//end of document.got ready function