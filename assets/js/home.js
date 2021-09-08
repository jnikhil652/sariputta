(function ($) {
	// your standard jquery code goes here with $ prefix
	// best used inside a page with inline code,
	// or outside the document ready, enter code here

	var filterButton = $(".filter-button"),
		galleryProductImg = $(".gallery-product-img");

	filterButton.click(function () {
		var value = $(this).attr("data-filter"),
			filterObj = $(".filter");

		if (value === "all") {
			//$('.filter').removeClass('hidden');
			filterObj.show("1000");
		} else {
			filterObj.not("." + value).hide("3000");
			filterObj.filter("." + value).show("3000");
		}

		$(this).addClass("active").siblings().removeClass("active");
	});
	// $(".imageZoom").click(function () {
	// 	var imgSource = $(this).attr("src");
	// 	var dialog = bootbox.dialog({
	// 		message:
	// 			'<img class="img-thumbnail" style="width:530px" src="' +
	// 			imgSource +
	// 			'">',
	// 	});
	// 	dialog.find(".modal-content").css({
	// 		"background-color": "transparent",
	// 	});
	// });

	galleryProductImg.hover(
		function () {
			$(this).find(".img-overlay").css("display", "block");
		},
		function () {
			$(this).find(".img-overlay").css("display", "none");
		}
	);

	galleryProductImg.click(function () {
		var bg = $(this).css("background-image");
		var size = $(this).attr("title");
		bg = bg.replace("url(", "").replace(")", "").replace(/\"/gi, "");

		bootbox.dialog({
			backdrop: true,
			onEscape: true,
			closeButton: false,
			size: size,
			centerVertical: true,
			scrollable: true,
			message:
				'<img class="img-responsive" style="width:100%" src="' + bg + '" />',
		});
	});
})(jQuery);
