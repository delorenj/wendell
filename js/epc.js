jQuery(document).ready(function() {
  $("#banner-menu li").bind("click", function() {
    $(this).parent().find(".active").removeClass("active");
    $(this).addClass("active", 1500);
  });
  
  
});