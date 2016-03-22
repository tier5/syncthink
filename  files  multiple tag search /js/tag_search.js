
/* --------------- STICKY HEADER -----------------*/

var arr=[];
var patentsarr=[];
var newsarr=[];
var temp_path=	$('#template_path').val();
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

    $('.patents_tag_list').click(function(f){
			f.preventDefault();
	
			var cname = $(this).attr('id');
			$('.archive .post').css('display','none');
			
			$('.archive .post.'+cname).css('display','block');
			
			
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
				url: temp_path+"/search_patents.php",
				data: { pname: NumberString },
				success: function(result){
				
				$('#patentsdefault_list').remove();	
				$('#patentscurrent_list').html(result);	
				//alert(result);
				simplepage();
				}
			});
				
			 	
		});
		$('.news_tag_list').click(function(r){
			r.preventDefault();
			
			var cname = $(this).attr('id');
			$('.archive .post').css('display','none');
			
			$('.archive .post.'+cname).css('display','block');
			
			
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
			
			console.log(newsarr);
			$.ajax({method: "POST",
				url: temp_path+"/search_news.php",
				data: { nname: NumberString },
				success: function(result){
				
				$('#newsdefault_list').remove();	
				$('#newscurrent_list').html(result);	
				
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
				url: temp_path+"/searchnew.php",
				data: { name: NumberString },
				success: function(result){
				//alert(result);
				$('#default_list').remove();
				$('#current_list').html(result);	
				simplepage();
				
				}
			});
			
				
		});	
	$( document ).on( "click", ".tag_listresarch", function(f) {
			f.preventDefault();
			
			//alert('hii');
			
			var cname = $(this).attr('id');
			
			
			$('.archive .post').css('display','none');
			
			$('.archive .post.'+cname).css('display','block');
			
			
			var found=jQuery.inArray(cname,arr)
			if(found >=0)
			{
				arr.splice(found,1);
				$('#'+cname).removeClass('active');
			}
			else
			{
				arr.push(cname);
				$('#'+cname).addClass('active');
			}
			
			var NumberString = arr.join('+');
			
			console.log(arr);
			$.ajax({method: "POST",
				url: temp_path+"/searchnew.php",
				data: { name: NumberString },
				success: function(result){
				
				$('#patentsdefault_list').remove();
				$('#current_list').html(result);	
				
				}
			});
	});

	
	$( document ).on( "click", ".patenttag_list", function(f) {
			
			
			var cname = $(this).attr('id');
			$('.archive .post').css('display','none');
			
			$('.archive .post.'+cname).css('display','block');
			
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
			
			console.log(patentsarr);
			$.ajax({method: "POST",
				url: temp_path+"/search_patents.php",
				data: { pname: NumberString },
				success: function(result){
				
				$('#patentsdefault_list').remove();	
				$('#patentscurrent_list').html(result);	
				
				}
			});
	});
	$( document ).on( "click", ".newstag_list", function(f) {
			
			var cname = $(this).attr('id');
			$('.archive .post').css('display','none');
			
			$('.archive .post.'+cname).css('display','block');
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
			
			console.log(newsarr);
			$.ajax({method: "POST",
				url: temp_path+"/search_news.php",
				data: { nname: NumberString },
				success: function(result){
				$('#newsdefault_list').remove();
				$('#newscurrent_list').html(result);	
				simplepage();
				}
			});
	});

jQuery(function simplepage($) {
    // Grab whatever we need to paginate
    var pageParts = $(".post");

    // How many parts do we have?
    var numPages = pageParts.length;
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
            pageParts.hide().slice(start, end).show();
        }
    });

});
