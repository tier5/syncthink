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
			
			var NumberString = patentsarr.join(', ');
			//alert(NumberString);
			console.log(patentsarr);
			$.ajax({method: "POST",
				url: "http://localhost/syncthinkbackup/wp-content/themes/SyncThinkWordPressExpansion/search_patents.php",
				data: { pname: NumberString },
				success: function(result){
				$('#patentsdefault_list').css('display','none');	
				$('#patentscurrent_list').html(result);	
				//alert(result);
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
			
			var NumberString = arr.join(', ');
			//alert(NumberString);
			console.log(arr);
			$.ajax({method: "POST",
				url: "http://localhost/syncthinkbackup/wp-content/themes/SyncThinkWordPressExpansion/searchnew.php",
				data: { name: NumberString },
				success: function(result){
				//alert(result);
				$('#default_list').css('display','none');	
				$('#current_list').html(result);	
				
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
		$(document).delegate(".tag_listresarch", "click", function(){	
			//e.preventDefault();
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
			
			var NumberString = arr.join(', ');
			alert(NumberString);
			console.log(arr);
			$.ajax({method: "POST",
				url: "http://localhost/syncthinkbackup/wp-content/themes/SyncThinkWordPressExpansion/searchnew.php",
				data: { name: NumberString },
				success: function(result){
				//alert(result);
				$('#default_list').css('display','none');	
				$('#current_list').html(result);	
				
				}
			});
	});
	$(document).delegate(".patenttag_list", "click", function(){	
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
				$(this).removeClass('active');
			}
			else
			{
				patentsarr.push(cname);
				$(this).addClass('active');
			}
			
			var NumberString = patentsarr.join(', ');
			//alert(NumberString);
			console.log(patentsarr);
			$.ajax({method: "POST",
				url: "http://localhost/syncthinkbackup/wp-content/themes/SyncThinkWordPressExpansion/search_patents.php",
				data: { pname: NumberString },
				success: function(result){
				$('#patentsdefault_list').css('display','none');	
				$('#patentscurrent_list').html(result);	
				//alert(result);
				}
			});
	});

