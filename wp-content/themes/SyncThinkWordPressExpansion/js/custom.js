// ------- RESPONSIVE MENU ------ //
//$(function() {
//		var pull 		= $('#pull_menu');
//			menu 		= $('.navigation ul.hdr_menu');
//
//			menuHeight	= menu.height();
//
//		pull.on('click', function(e) {
//			e.preventDefault();
//			menu.slideToggle();
//		});
//
//		$(window).resize(function(){
//			var w = $(window).width();
//			if(w > 320 && menu.is(':hidden')) {
//				menu.removeAttr('style');
//			}
//		});
//	});

/* --------------- STICKY HEADER -----------------*/
$(document).ready(function(){
 $(document).on("scroll", function(){
  if($(window).width() > 767){
    if($(document).scrollTop() > 50){
      $('#header').addClass("shrink");
    }
    else
    {
        $('#header').removeClass("shrink"); 
    }
    }
}); 
    $('.archive .currentsTags a').click(function(e){
			//e.preventDefault();
			var cname = $(this).attr('id');
			$('.archive .post').css('display','none');
			$('.archive .post.'+cname).css('display','block');
			 $('.archive .currentsTags a').removeClass('active');
			$(this).addClass('active');
			
		});
		
		
		
    
    
/* --------------- TEAM BANNER -----------------*/
var imgsrc = $('.team_bnr img').attr('src');
$('.team_bnr img').css('opacity','0');
$('.team_bnr').css('background-image','url('+imgsrc+')');
$('.team_bnr').css('background-position','center');
$('.team_bnr').css('background-size','cover');
$('.map iframe').on('load', function(){
    $('.place-card').css('display','none');
    console.log('load the iframe',$('.place-card'))
});

 $('.map iframe').addClass('scrolloff'); // set the pointer events to none on doc ready

        $('.headq_wrap').on('click', function () {
            $('.map iframe').removeClass('scrolloff'); // set the pointer events true on click
        });

        // you want to disable pointer events when the mouse leave the canvas area;

        $(".map iframe").mouseleave(function () {
            $('.map iframe').addClass('scrolloff'); // set the pointer events to none when mouse leaves the map area
        });
    
});


