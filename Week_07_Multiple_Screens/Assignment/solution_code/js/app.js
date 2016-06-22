$(document).ready(function() {
  $('#hamburger').click(function(){
    $(this).addClass("active");
    $("nav").slideDown();
  });
});