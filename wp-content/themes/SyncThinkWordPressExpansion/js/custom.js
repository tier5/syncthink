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

var arr=[];
var patentsarr=[];
var newsarr=[];
$(document).ready(function(){
	//var tagcon="";
	//var vax=0;
	i=0;
	
	
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

    $('.patents_tag_list').click(function(f){
			f.preventDefault();
			//var tagname = $(this).attr('name');
			var cname = $(this).attr('id');
			$('.archive .post').css('display','none');
			
			$('.archive .post.'+cname).css('display','block');
			
			//$('.archive .currentsTags a').removeClass('curtag');
			
			//$(this).addClass('tagactive');
			var found=jQuery.inArray(cname,patentsarr)
			if(found >=0)
			{
				patentsarr.splice(found,1);
				$(this).removeClass('active');
			}
			else
			{
				patentsarr.push(cname);
				$(this).addClass('active');
			}
			
			var NumberString = patentsarr.join('+');
			//alert(NumberString);
			console.log(patentsarr);
			$.ajax({method: "POST",
				url: "http://syncthink.com/wp-content/themes/SyncThinkWordPressExpansion/search_patents.php",
				data: { pname: NumberString },
				success: function(result){
				//$('#patentsdefault_list').css('display','none');
				$('#patentsdefault_list').remove();	
				$('#patentscurrent_list').html(result);	
				//alert(result);
				simplepage();
				}
			});
				
			 	
		});
		$('.news_tag_list').click(function(r){
			r.preventDefault();
			//var tagname = $(this).attr('name');
			var cname = $(this).attr('id');
			$('.archive .post').css('display','none');
			
			$('.archive .post.'+cname).css('display','block');
			
			//$('.archive .currentsTags a').removeClass('curtag');
			
			//$(this).addClass('tagactive');
			var found=jQuery.inArray(cname,newsarr)
			if(found >=0)
			{
				newsarr.splice(found,1);
				$(this).removeClass('active');
			}
			else
			{
				newsarr.push(cname);
				$(this).addClass('active');
			}
			
			var NumberString = newsarr.join('+');
			//alert(NumberString);
			console.log(newsarr);
			$.ajax({method: "POST",
				url: "http://syncthink.com/wp-content/themes/SyncThinkWordPressExpansion/search_news.php",
				data: { nname: NumberString },
				success: function(result){
				//$('#newsdefault_list').css('display','none');
				$('#newsdefault_list').remove();	
				$('#newscurrent_list').html(result);	
				//alert(result);
				simplepage();
				}
			});
				
			 	
		});
    $('.tag_list').click(function(e){
			e.preventDefault();
			//alert('hii');
			
			var cname = $(this).attr('id');
			
			
			$('.archive .post').css('display','none');
			
			$('.archive .post.'+cname).css('display','block');
			
			//$('.archive .currentsTags a').removeClass('curtag');
			
			//$(this).addClass('tagactive');
			var found=jQuery.inArray(cname,arr)
			if(found >=0)
			{
				arr.splice(found,1);
				$(this).removeClass('active');
			}
			else
			{
				arr.push(cname);
				$(this).addClass('active');
			}
			
			var NumberString = arr.join('+');
			//alert(NumberString);
			console.log(arr);
			$.ajax({method: "POST",
				url: "http://syncthink.com/wp-content/themes/SyncThinkWordPressExpansion/searchnew.php",
				data: { name: NumberString },
				success: function(result){
				//alert(result);
				//$('#default_list').css('display','none');	
				$('#default_list').remove();
				$('#current_list').html(result);
					
				simplepage();
				
				}
			});
			
				
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
		
		$( document ).on( "click", ".tag_listresarch", function(f) {
			f.preventDefault();
			//alert('hii');
			
			var cname = $(this).attr('id');
			
			
			$('.archive .post').css('display','none');
			
			$('.archive .post.'+cname).css('display','block');
			
			//$('.archive .currentsTags a').removeClass('curtag');
			
			//$(this).addClass('tagactive');
			var found=jQuery.inArray(cname,arr)
			if(found >=0)
			{
				arr.splice(found,1);
				$('#'+cname).removeClass('active');
			}
			else
			{
				arr.push(cname);
				//alert(cname);
				$('#'+cname).addClass('active');
			}
			
			var NumberString = arr.join('+');
			//alert(NumberString);
			console.log(arr);
			$.ajax({method: "POST",
				url: "http://syncthink.com/wp-content/themes/SyncThinkWordPressExpansion/searchnew.php",
				data: { name: NumberString },
				success: function(result){
				//alert(result);
				//$('#default_list').css('display','none');	
				$('#patentsdefault_list').remove();
				$('#current_list').html(result);	
				
				}
			});
	});

	//$(document).delegate(".patenttag_list", "click", function(){	
	$( document ).on( "click", ".patenttag_list", function(f) {
			//e.preventDefault();
			//alert('hii');
			
			var cname = $(this).attr('id');
			$('.archive .post').css('display','none');
			
			$('.archive .post.'+cname).css('display','block');
			
			//$('.archive .currentsTags a').removeClass('curtag');
			
			//$(this).addClass('tagactive');
			var found=jQuery.inArray(cname,patentsarr)
			if(found >=0)
			{
				patentsarr.splice(found,1);
				$('#'+cname).removeClass('active');
			}
			else
			{
				patentsarr.push(cname);
				$('#'+cname).addClass('active');
			}
			
			var NumberString = patentsarr.join('+');
			//alert(NumberString);
			console.log(patentsarr);
			$.ajax({method: "POST",
				url: "http://syncthink.com/wp-content/themes/SyncThinkWordPressExpansion/search_patents.php",
				data: { pname: NumberString },
				success: function(result){
				//$('#patentsdefault_list').css('display','none');
				$('#patentsdefault_list').remove();	
				$('#patentscurrent_list').html(result);	
				//alert(result);
				}
			});
	});
	$( document ).on( "click", ".newstag_list", function(f) {
			//e.preventDefault();
			//alert('hii');
			
			var cname = $(this).attr('id');
			$('.archive .post').css('display','none');
			
			$('.archive .post.'+cname).css('display','block');
			
			//$('.archive .currentsTags a').removeClass('curtag');
			
			//$(this).addClass('tagactive');
			var found=jQuery.inArray(cname,newsarr)
			if(found >=0)
			{
				newsarr.splice(found,1);
				$('#'+cname).removeClass('active');
			}
			else
			{
				newsarr.push(cname);
				$('#'+cname).addClass('active');
			}
			
			var NumberString = newsarr.join('+');
			//alert(NumberString);
			console.log(newsarr);
			$.ajax({method: "POST",
				url: "http://syncthink.com/wp-content/themes/SyncThinkWordPressExpansion/search_news.php",
				data: { nname: NumberString },
				success: function(result){
				//$('#newsdefault_list').css('display','none');	
				$('#newsdefault_list').remove();
				$('#newscurrent_list').html(result);	
				//alert(result);
				simplepage();
				}
			});
	});

jQuery(function simplepage($) {
    // Grab whatever we need to paginate
    var pageParts = $(".post");

    // How many parts do we have?
    var numPages = pageParts.length;
    //alert(numPages);
    // How many parts do we want per page?
    var perPage = 20;

    // When the document loads we're on page 1
    // So to start with... hide everything else
    pageParts.slice(perPage).hide();

    // Apply simplePagination to our placeholder
    
    $("#page-nav").pagination({
        items: numPages,
        itemsOnPage: perPage,
        cssTheme: "light-theme",
        // We implement the actual pagination
        //   in this next function. It runs on
        //   the event that a user changes page
        onPageClick: function(pageNum) {
            // Which page parts do we show?
            var start = perPage * (pageNum - 1);
            var end = start + perPage;

            // First hide all page parts
            // Then show those just for our page
            pageParts.hide()
                     .slice(start, end).show();
        }
    });

});
