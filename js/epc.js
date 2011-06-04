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
      $("#banner-menu li a").hover(function(e){
//        $(this).parent().animate({
//          color: "red"
//        }, 1000);
        $(this).mousemove(function(j) {
          bm.settings(null, null, j.pageX, j.pageY-50);
          bm.addBubbles(3);          
          bm.removeBubbles(); 
          $(this).unbind("mousemove")          
        })
      }, function(){                
        bm.removeBubbles();        
      });     
    }
  }

}();

jQuery(document).ready(function() {
  EPC.init();
});