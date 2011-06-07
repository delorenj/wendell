EPC = function() {

  var bm = $('fn').BubbleEngine({
    particleSizeMin:            10,
    particleSizeMax:            45,
    particleDirection:          'center',    
    particleAnimationDuration:  6000,
    particleAnimationVariance:  10,
    particleScatteringX:        30,
    particleScatteringY:        0,
    gravity:                    -200
  });
 
  return {
    init : function() {
      $("#banner-menu li[class!='active'] a").hover(function(e){
        $(this).mousemove(function(j) {
          bm.settings(null, null, j.pageX, j.pageY-50);
          bm.addBubbles(3);          
          bm.removeBubbles(); 
          $(this).unbind("mousemove")          
        })
      }, function(){                
        bm.removeBubbles();        
      });     

      $('#gallery').orbit({
       animation: 'fade',
       animationSpeed: 800,
       timer: true,
       advanceSpeed: 4000,
       pauseOnHover: false,
       startClockOnMouseOut: true,
       startClockOnMouseOutAfter: 1000,
       directionalNav: false,
       captions: false,
       captionAnimation: 'slideOpen',
       captionAnimationSpeed: 800,
       bullets: false,
       bulletThumbs: false,
       bulletThumbLocation: 'images/thumbs/'
      });      
      
      $(".timer").hide();
      $("select").selectmenu();
      $("input[name='date']").datepicker();
      $("button").button();
      
      $("select[name='contact']").bind("change", function() {
        switch($(this).val()) {
          case "Phone" :
            $("#email").slideUp("slow", function() {
              $("#phone").slideDown("slow");
            });
            break;
            
          case "Email" :
            $("#phone").slideUp("slow", function() {
              $("#email").slideDown("slow");
            });
            break;     
          
          default :
            $("#phone, #email").slideUp("slow");
        }
      });
      
    }
  }

}();

jQuery(document).ready(function() {
  EPC.init();
});