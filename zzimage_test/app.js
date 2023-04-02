$(document).ready(function() {
	$("#submit").on("click", function() {
		var file_data = $('#file').prop('files')[0];
		var product_name = $('#product_name').val();
		var form_data = new FormData();
		form_data.append('file', file_data);
		form_data.append('product_name', product_name);
		$.ajax({
			url: 'upload.php',
			type: 'post',
			data: form_data,
			contentType: false,
			processData: false,
			success: function(response) {
				$("#message").html(response);
			}
		});
	});
});
