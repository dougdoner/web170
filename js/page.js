function navToggle(e) {
  var navLink = $(this).attr("href");
  $(navLink).slideToggle();
  e.preventDefault();
};

function imgBorderStopper() {
  var imgParent = $("img").parent("a");
  imgParent.addClass("image-inside");
}

$(document).ready(function() {
  $(".mobile-nav").on("click", navToggle);
  imgBorderStopper();
});