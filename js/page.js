$(document).ready(function() {
  $(".mobile-nav").on("click", navToggle);
});
  
function navToggle(e) {
  navLink = $(this).attr("href");
  $(navLink).slideToggle();
  e.preventDefault();
};