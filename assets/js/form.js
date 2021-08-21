$(document).ready(function () {
	$("#romaSubmit").click(function (e) {
		e.preventDefault();
		RomaniaForm();
	});
});
function RomaniaForm() {
	var data = new FormData();
	var formData = $("#romaniaForm").serializeArray();
	$.each(formData, function (i, v) {
		data.append(v.name, v.value);
	});
	$.ajax({
		type: "POST",
		url: baseUrl + "roma-form-submit",
		data: data,
		processData: false,
		contentType: false,
		dataType: "JSON",
		success: function (response) {
			bootbox.alert({
				message: response.msg,
				callback: function () {
					window.location.href = baseUrl;
				},
			});
		},
	});
}
