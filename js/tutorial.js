function scrolltop(){
	// Go Top
	var offset = 200;
	var duration = 500;
	$(window).scroll(function(){
		if ($(this).scrollTop() > offset) {
			$('.top').fadeIn(duration);
		} else {
			$('.top').fadeOut(duration);
		}
	});

	// Go Top Click event
	$('.top').click(function(event){
		event.preventDefault();
		$('html, body').animate({scrollTop:0}, 'slow');
	});
	$('.top').fadeOut(duration);

	// Go Top Click event
	$('#topic span').click(function(event){
		event.preventDefault();
		$('html, body').animate({scrollTop:0}, 'slow');
	});
}

function accordion(){
	// Accordion
	$('.heading h5').click(function(){
		$(this).parents('.accordion').find('.description').slideToggle('2000','linear');
	});
	$('.description').slideUp();
}

function select_box(){

	$("#select1").change(function() {
		if ($(this).data('options') == undefined) {
			/*Taking an array of all options-2 and kind of embedding it on the select1*/
			$(this).data('options', $('#select2 option').clone());
		}
		var id = $(this).val();
		var options = $(this).data('options').filter('[value=' + id + ']');
		$('#select2').html(options);
	});

	$("#select2").change(function() {
		if ($(this).data('options') == undefined) {
			/*Taking an array of all options-2 and kind of embedding it on the select1*/
			$(this).data('options', $('#select3 option').clone());
		}
		var id = $(this).val();
		var options = $(this).data('options').filter('[value=' + id + ']');
		$('#select3').html(options);
	});
}

function checkurl(){
	$("#url").change(function(){
	var checkurl = $("#url").val();
	$.ajax({
		url: "select.php",
		type: "POST",
		data: {
				'checkurl': checkurl
			  },
		success: function(data){
			$('#message').html(data);
			// window.setTimeout(function(){
			// 	window.location.href = "main_page.php";
			// }, 2000);
		}
	});
	});
}

function submitform(){

	var select1 = $("#select1").val();
	var select2 = $("#select2 :selected").text();
	var org_sub = $("#org_sub").text();

	var select3 = $("#select3 :selected").text();
	var org_sub_sub = $("#org_sub_sub").text();

	var opturl = $("#url").val();
	var org_url = $("#org_url").val();
	var description = $("#description").val();

	$.ajax({
		url: "select.php",
		type: "POST",
		data: {
				'select1': select1,
				'select2': select2,
				'select3': select3,
				'opturl': opturl,
				'description': description,

				'org_sub': org_sub,
				'org_sub_sub': org_sub_sub,
				'org_url': org_url
			  },
		success: function(data){
			$('#message').html(data);
			// $('#message').html('<div class="alert alert-success">Successfully inserted tutorial-1, Thankyou </div>');
			window.setTimeout(function(){
				window.location.href = "main_page.php";
			}, 2000);
		}

	});
	// document.getElementById("myForm").submit();
}

// This is for move to("Move to other language && other tech")
function submitform_moveto(){

	var select1 = $("#select1").val();
	var select2 = $("#select2 :selected").text();
	var org_sub = $("#org_sub").val();

	var select3 = $("#select3 :selected").text();
	var org_sub_sub = $("#org_sub_sub").val();

	var opturl = $("#url").val();
	var org_url = $("#org_url").val();

	var description = $("#description").val();
	$.ajax({
		url: "select.php",
		type: "POST",
		data: {
				'select1': select1,
				'select2': select2,
				'select3': select3,
				'opturl_moveto': opturl,
				'description': description,

				'org_sub': org_sub,
				'org_sub_sub': org_sub_sub,
				'org_url': org_url
			  },
		success: function(data){
			$('#message').html('<div class="alert alert-success">Successfully inserted tutorial-2, Thankyou </div>');
			window.setTimeout(function(){
				window.location.href = "main_page.php";
			}, 2000);
		}

	});
	// document.getElementById("myForm").submit();
}

// This is for Editing data
function submitformupdate(){

	var select1 = $("#up_select1").val();
	var select2 = $("#up_select2").val();
	var org_sub = $("#org_sub").val();

	var select3 = $("#up_select3").val();
	var org_sub_sub = $("#org_sub_sub").val();

	var opturl = $("#up_url").val();
	var org_url = $("#org_url").val();

	var description = $("#description").val();

	$.ajax({
		url: "select.php",
		type: "POST",
		data: {
				'select1': select1,
				'select2': select2,
				'select3': select3,
				'optur_update': opturl,
				'description': description,

				'org_sub': org_sub,
				'org_sub_sub': org_sub_sub,
				'org_url': org_url
			  },
		success: function(data){
			$('#message').html('<div class="alert alert-success">Updated Successfully tutorial-3-999, Thankyou </div>');
			window.setTimeout(function(){
				window.location.href = "main_page.php";
			}, 2000);
		}

	});
	// document.getElementById("myForm").submit();

}

// $('#topic h5').click(function(){
$('#topic span').click(function(){
	var sub_topic = $(this).text();
	$.ajax({
		type: 'POST',
		url: 'select.php',
		// data: {topic:topic, sub_sub_topic:sub_sub_topic},
	    // data: 'value1='+val1+'&value2='+val2,
		data: {sub_topic:sub_topic},
		success: function(content){
			$('#data_present').html(content);
		}
	});
});

$("#select1").change(function(){
	var main_topic = $("#select1").val();
	$.ajax({
		type: 'POST',
		url: 'select.php',
		data: {main_topic:main_topic},
		success: function(main_topic){
			$('#data_present2').html(main_topic);
		}
	});
});

$("#search_button").click(function(){
	var search_for = $('.search-query').val();
	$.ajax({
		type: 'POST',
		url: 'select.php',
		data: {search_for:search_for},
		success: function(search_for){
			$('#data_present4').html(search_for);
			if( $('#data_present4:contains(search_for)') ){
				$("#data_present4").css( "color", "#808000" );
			} else {
				alert("pass");
			}
			// $( "#data_present4:contains('')" ).css( "color", "blue" );
		}
	});

});

// $( "#data_present4:contains('PHP')" ).css( "text-decoration", "underline" );

function logout(){
	$('#logout').click(function(){
		alert('test');
	});
	window.setTimeout(function(){
		window.location.href = "index.php";
	}, 2000);
}


$(document).ready(function(){
	scrolltop();
	accordion();
	checkurl();
	// logout();
	// select_box();
	// second_select();
	// alert('Testing..');
	// $( ".action h4:contains('AddingD')" ).css( "color", "yellow" );
	$('body').click(function(){
		// alert('Test..');
		// $(":contains('Important')").html(function(_, html) { 
		$(".action_box tr td:contains('Important')").html(function(_, html) {
		   return html.replace(/(Important)/g, '<span class="imp_text">$1</span>');
		});
	});
	$(".action_box tr td:contains('Important')").html(function(_, html) {
	   return html.replace(/(Important)/g, '<span class="imp_text">$1</span>');
	});
});

$(window).load(function(){
	alert('Testing..');
	$( "#data_present4:contains('php')" ).css( "color", "yellow" );
});