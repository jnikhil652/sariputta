function saveEnquiryUs(elem) {
	var url = baseUrl + "send-enquiry-email";
	sendMail(elem, url);
}

function saveContactUs(elem) {
	var url = baseUrl + "send-contact-email";
	sendMail(elem, url);
}

function sendMail(elem, url) {
	var closestForm = $(elem).closest("form"),
		data = new FormData(),
		params = $(closestForm).serializeArray(),
		paramData = {},
		isNumber = /^[0-9\b]+$/,
		errors = new Array();

	$.each(params, function (i, val) {
		paramData[params[i].name] = $.trim(val.value);
		data.append(params[i].name, $.trim(val.value));
	});

	if (data.get("name") === "") {
		errors.push("Please enter the your name");
	}
	if (data.get("email") === "") {
		errors.push("Please enter the email");
	}
	if (data.get("phone") === "") {
		errors.push("Please enter the phone number");
	} else if (!isNumber.test(data.get("phone"))) {
		errors.push("Please enter only number");
	} else if (data.get("phone").length < 10) {
		errors.push("please enter the 10 digit number");
	}
	if (data.get("message") === "") {
		errors.push("Please enter the message");
	}

	if (errors.length > 0) {
		bootbox.alert({
			message: errors.join("<br>"),
			centerVertical: true,
		});
		return false;
	}

	$.ajax({
		type: "POST",
		url: url,
		cache: false,
		processData: false,
		contentType: false,
		data: data,
		dataType: "JSON",
		success: function (response) {
			if (response.success) {
				bootbox.alert({
					message: response.statusMsg,
					centerVertical: true,
					callback: function () {
						location.reload(true);
					},
				});
			} else {
				bootbox.alert({
					message: response.statusMsg,
					centerVertical: true,
				});
			}
		},
	});
}
