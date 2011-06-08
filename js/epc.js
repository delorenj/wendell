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
      var start = $("ul.service-list li:first-child").position();
      var orig = $("#service-image").position();
      $("ul.service-list li.active").css("top", start.top).css("height", $("ul.service-list li:first-child").css("height"));
      $("ul.service-list li").hover(function() {
        var sel = $(this);
        $("ul.service-list li.active").animate({
          top: $(this).position().top,
          height: $(this).height()
        }, {
          duration: 350,
          easing: "easeOutBack",
          queue: false,
          complete: function() {

          }
        });

        $("#service-image").animate({
          left: "+=700"
        },{
          duration: 200, 
          complete: function() {
            $(this).html("<img src='images/is-service-" + sel.index() + ".jpg' alt='' />").hide().css("left", orig.left).fadeIn({duration: 500});
          },
          queue: false              
        });
      }, function(){
      });
     $("#service-image").stickyfloat({
       duration: 500,       
       lockBottom: true
     });
    }
  }

}();

jQuery(document).ready(function() {

  $.fn.stickyfloat = function(options, lockBottom) {
      var $obj 				= this;
      var parentPaddingTop 	= parseInt($obj.parent().css('padding-top'));
      var startOffset 		= $obj.parent().offset().top;
      var opts 				= $.extend({startOffset: startOffset, offsetY: parentPaddingTop, duration: 200, lockBottom:true}, options);

      $obj.css({position: 'absolute'});

      if(opts.lockBottom){
        var bottomPos = $obj.parent().height() - $obj.height() + parentPaddingTop; //get the maximum scrollTop value
        if( bottomPos < 0 )
          bottomPos = 0;
      }

      $(window).scroll(function () { 
        $obj.stop(); // stop all calculations on scroll event

        var pastStartOffset			= $(document).scrollTop() > opts.startOffset;	// check if the window was scrolled down more than the start offset declared.
        var objFartherThanTopPos	= $obj.offset().top > startOffset;	// check if the object is at it's top position (starting point)
        var objBiggerThanWindow 	= $obj.outerHeight() < $(window).height();	// if the window size is smaller than the Obj size, then do not animate.

        // if window scrolled down more than startOffset OR obj position is greater than
        // the top position possible (+ offsetY) AND window size must be bigger than Obj size
        if( (pastStartOffset || objFartherThanTopPos) && objBiggerThanWindow ){ 
          var newpos = ($(document).scrollTop() -startOffset + opts.offsetY );
          if ( newpos > bottomPos )
            newpos = bottomPos;
          if ( $(document).scrollTop() < opts.startOffset ) // if window scrolled < starting offset, then reset Obj position (opts.offsetY);
            newpos = parentPaddingTop;

          $obj.animate({top: newpos}, opts.duration );
        }
      });
    };  
  EPC.init();
});