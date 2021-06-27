$(document).ready(function () 
{

  if ($('#enquiry1').length) {
      $("#enquiry1").click(function () {
            bootbox.dialog({
               title: "Enquiry details",
               message: $('#enquiryDetails').html(),
               centerVertical: true,
              
         });
        });
    }
 
  if ($('#enquiry2').length) {
      $("#enquiry2").click(function () {
            bootbox.dialog({
               title: "Enquiry details",
               message: $('#enquiryDetails').html(),
               centerVertical: true,
              
         });
        });
    }
 
  if ($('#enquiry3').length) {
      $("#enquiry3").click(function () {
            bootbox.dialog({
               title: "Enquiry details",
               message: $('#enquiryDetails').html(),
               centerVertical: true,
              
         });
        });
    }
 
if ($('#enquiry4').length) {
      $("#enquiry4").click(function () {
            bootbox.dialog({
               title: "Enquiry details",
               message: $('#enquiryDetails').html(),
               centerVertical: true,
              
         });
        });
    }
  
if ($('#enquiry5').length) {
      $("#enquiry5").click(function () {
            bootbox.dialog({
               title: "Enquiry details",
               message: $('#enquiryDetails').html(),
               centerVertical: true,
              
         });
        });
    }
  
  if ($('#enquiry6').length) {
      $("#enquiry6").click(function () {
            bootbox.dialog({
               title: "Enquiry details",
               message: $('#enquiryDetails').html(),
               centerVertical: true,
              
         });
        });
    }
  if ($('#enquiry7').length) {
      $("#enquiry7").click(function () {
            bootbox.dialog({
               title: "Enquiry details",
               message: $('#enquiryDetails').html(),
               centerVertical: true,
              
         });
        });
    }
  if ($('#enquiry7').length) {
      $("#enquiry7").click(function () {
            bootbox.dialog({
               title: "Enquiry details",
               message: $('#enquiryDetails').html(),
               centerVertical: true,
              
         });
        });
    }

});


// function sendMail(elem) {
//     var closestForm = $(elem).closest('form'),
//             data = new FormData(),
//             params = $(closestForm).serializeArray(),
//             paramData = {},
//             errors = new Array();

//     $.each(params, function (i, val) {
//         paramData[params[i].name] = $.trim(val.value);
//         data.append(params[i].name, $.trim(val.value));
//     });

//     if (data.get("full_name") === '') {
//         errors.push("Please enter name");
//     }
//     if (data.get("email") === '') {
//         errors.push("Please enter email");
//     }
//     if (data.get("number") === '') {
//         errors.push("Please enter contact number");
//     }
//     if (data.get("textarea_value") === '') {
//         errors.push("Please enter message");
//     }
//      if (errors.length > 0) {
//         bootbox.alert({
//             message: errors.join("<br>"),
//             centerVertical: true
//         });
//         return false;
//     }
    
//     $.ajax({
//         type: 'POST',
//         url: baseUrl + 'send-email',
//         cache: false,
//         processData: false,
//         contentType: false,
//         data: data,
//         dataType: 'JSON',
//         success: function (response) {
//             if (response.success) {
//                 bootbox.alert({
//                     message: response.statusMsg,
//                     centerVertical: true
//                 });
//             } else {
//                 bootbox.alert({
//                     message: response.statusMsg,
//                     centerVertical: true
//                 });
//             }
//         }
//     });
// }
