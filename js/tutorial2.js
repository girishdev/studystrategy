function second_select(){
	if ($("#select2").length > 0){
		$("#select2").change(function(){
			var main_topic = $("#select1").val();
			var subtopic = $("#select2").val();
			// alert(subtopic);
			$.ajax({
				type: 'POST',
				url: 'select.php',
				data: {subtopic:subtopic},
				success: function(subtopic){
					$('#data_present23').html(subtopic);
				}
			});
		});
	}
}/**/

$('#sub_sub_topic h5').click(function(){
	var sub_sub_topic = $(this).text();
	$.ajax({
		type: 'POST',
		url: 'select.php',
		data: {sub_sub_topic:sub_sub_topic},
		success: function(content){
			$('#data_present').html(content);
		}
	});
});

function deletetable(){
	$('.delete').click(function(){
		var answer = confirm ("Are you sure you want to delete from the database?");
		if (answer){
			var href = $(this).closest('td').siblings().find('a.link').attr("href");
			alert(href);
			$.ajax({
				type: "POST",
				url: "select.php",
				data: {href: href},
				success: function(data){
					$('#delete_massage').html('<div class="alert alert-success">Deleted Successfully, Thankyou </div>');
					window.setTimeout(function(){
						window.location.href = "main_page.php";
					}, 2000);
				}
			});/**/
		}
	});
}

$(document).ready(function(){
	second_select();
	deletetable();
});
