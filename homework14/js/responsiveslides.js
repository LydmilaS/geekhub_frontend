(function ($) {
var mySlideSpeed = 700;
var myTimeOut = 3000;
var myNeedLinks = true;

$(document).ready(function(e) {
  $('.slide').hide().eq(0).show();
  var slideNumber = 0;
  var slideTime;
  slideCount = $("#slider .slide").size();
  var animateSlide = function(arrow){
    clearTimeout(slideTime);
    $('.slide').eq(slideNumber).fadeOut(mySlideSpeed);
    if(arrow == "next"){
      if(slideNumber == (slideCount-1)){
        slideNumber = 0;
      }
      else {
        slideNumber++
      }
    }
    else if(arrow == "prew")
    {
      if(slideNumber == 0){
        slideNumber = slideCount-1;
      }
      else{
        slideNumber--
      }
    }
    else{
      slideNumber = arrow;
      }
    $('.slide').eq(slideNumber).fadeIn(mySlideSpeed, rotator);
    $(".control-slide.active").removeClass("active");
    $('.control-slide').eq(slideNumber).addClass('active');
    }
if(myNeedLinks){
  $('#nextbutton').click(function(){
    animateSlide("next");
    return false;
    })
  $('#prewbutton').click(function(){
    animateSlide("prew");
    return false;
    })
}
  var $adderSpan = '';
  $('.slide').each(function(index) {
      $adderSpan += '<span class = "control-slide">' + index + '</span>';
    });
  $('<div class ="sli-links">' + $adderSpan +'</div>').appendTo('#slider-wrap');
  $(".control-slide:first").addClass("active");
  $('.control-slide').click(function(){
  var goToNumber = parseFloat($(this).text());
  animateSlide(goToNumber);
  });
  var pause = false;
  var rotator = function(){
      if(!pause){slideTime = setTimeout(function(){animateSlide('next')}, myTimeOut);}
      }
  $('#slider-wrap').hover(  
    function(){clearTimeout(slideTime); pause = true;},
    function(){pause = false; rotator();
    });
  rotator();
});
})(jQuery);