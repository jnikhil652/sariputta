$(document).ready(function () {
	$("#romaAddPosition").click(function (e) {
		e.preventDefault();
		romaAddPopup();
	});
	$("#romaPositionSubmit").click(function (e) {
		e.preventDefault();
		romaAddPosition();
	});
});
function romaAddPopup() {
	var html =
		'<div class="form-group">' +
		'<label>Enter position<span class="text-danger">*</span></label>' +
		'<input type="text" name="position" class="form-control" id="romaPosition">' +
		"</div>" +
		'<a class="btn btn-danger" href="javascript:void(0);" id="romaPositionSubmit">Submit</a>';
	bootbox.alert({
		message: html,
		callback: function () {
			var val = $("#romaPosition").val();
			var data = { position: val };
			$.ajax({
				type: "POST",
				url: baseUrl + "roma-form-position",
				data: data,
				processData: false,
				contentType: false,
				dataType: "JSON",
				success: function (response) {
					bootbox.prompt({
						message: response.msg,
						buttons: {
							confirm: {
								label: "Submit",
								className: "btn-success",
							},
							cancel: {
								label: "Canel",
								className: "btn-danger",
							},
						},
						callback: function (result) {
							window.location.href = baseUrl + "admin/Romania";
						},
					});
				},
			});
		},
	});
}
function romaAddPosition() {
	var val = $("#romaPosition").val();
	var data = { position: val };
	$.ajax({
		type: "POST",
		url: baseUrl + "roma-form-position",
		data: data,
		processData: false,
		contentType: false,
		dataType: "JSON",
		success: function (response) {
			bootbox.alert({
				message: response.msg,
				callback: function () {
					window.location.href = baseUrl + "admin/Romania";
				},
			});
		},
	});
}
