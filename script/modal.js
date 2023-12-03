// $(document).ready(function () {
//   $("#contactForm").submit(function (event) {
//     submitForm();
//     return false;
//   });
// });


// function submitForm() {
//   $.ajax({
//     type: "POST",
//     url: "index.php?pages=user",
//     cache: false,
//     data: $("form#contactForm").serialize(),
//     success: function (response) {
//       $("#contact").html(response);
//       $("#contact-modal").modal("hide");
//     },
//     error: function () {
//       alert("Error");
//     },
//   });
// }


// personil
$(document).ready(function () {
  $("#contactForm").submit(function (event) {
    submitForm();
    return false;
  });
});

function submitForm() {
  $.ajax({
    type: "POST",
    url: "index.php?pages=personil",
    cache: false,
    data: $("form#contactForm").serialize(),
    success: function (response) {
      $("#contact").html(response);
      $("#contact-modal").modal("hide");
    },
    error: function () {
      alert("Error");
    },
  });
}
