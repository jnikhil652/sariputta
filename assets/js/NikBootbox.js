$(document).ready(function () {
	var nik =
		"<h4>Nikhil Jadhav</h4>" +
		'<a href="tel:+917391976596"><i class="fas fa-phone"></i> +91 73-919-765-96</a><br>' +
		'<a href="mailto:nikhil.jadhav@sariputtaedutech.co.in"><i class="fas fa-envelope"></i> nikhil.jadhav@sariputtaedutech.co.in</a>';
	// var html =
	// 	"<form id='devForm'>" +
	// 	'<div class="form-group">' +
	// 	"<label>Name</label>" +
	// 	'<input type="text" name="name" class="form-control" placeholder="Enter Name">' +
	// 	"</div>" +
	// 	'<div class="form-group">' +
	// 	'<label for="exampleInputEmail1">Email address</label>' +
	// 	'<input type="email" name="email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email">' +
	// 	"</div>" +
	// 	'<div class="form-group">' +
	// 	"<label>Phone</label>" +
	// 	'<input type="text" name="phone" class="form-control" placeholder="Enter Phone">' +
	// 	"</div>" +
	// 	'<div class="form-group">' +
	// 	"<label>Comments</label>" +
	// 	'<textarea class="form-control" name="comments" rows="3"></textarea>' +
	// 	"</div>" +
	// 	'<a href="javascript:void(0);" id="submit" class="btn btn-primary">Contact Developer</a>' +
	// 	"</form>";
	$("#contact").click(function (e) {
		e.preventDefault();
		bootbox.dialog({
			title: "Contact Developer",
			message: nik,
		});
	});
	$("#submit").click(function (e) {
		e.preventDefault();
		var val = $("#devForm").val();
		var data = new FormData();
		$.each(val, function (i, value) {
			data.append(params[i].name, $.trim(val.value));
		});
		console.log(data);
		console.log("test");
	});
});
