(function($){
	
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

	randomElements = jQuery(".widget_staff_widget li.competed").get().sort(function(){ 
		  return Math.round(Math.random())-0.5
		}).slice(0,2)
	randomElements2 = jQuery(".widget_staff_widget li.completed").get().sort(function(){ 
		  return Math.round(Math.random())-0.5
		}).slice(0,2)
	randomElements3 = jQuery(".widget_staff_widget li.participated").get().sort(function(){ 
		  return Math.round(Math.random())-0.5
		}).slice(0,2)
	randomElements4 = jQuery(".widget_have_widget li").get().sort(function(){ 
		  return Math.round(Math.random())-0.5
		}).slice(0,10)
	randomElements5 = jQuery(".widget_super_recent_posts_widget li").get().sort(function(){ 
		  return Math.round(Math.random())-0.5
		}).slice(0,10)

	$( ".widget_super_recent_posts_widget h1" ).wrap( "<span></span>" );
	$(randomElements).addClass('display')
	$(randomElements2).addClass('display')
	$(randomElements3).addClass('display')
	$(randomElements4).addClass('display')
	$(randomElements5).addClass('display')

// 	// 
// function(){
// 	var lis = $(".widget_have_widget li").get().sort(function(){ 
//             return Math.round(Math.random())-0.5; //so we get the right +/- combo
//            }).slice(0,10);
//       $(lis).appendTo(lis[0].parentNode).show();

//       var liscompeted = $(".widget_staff_widget li.competed").get().sort(function(){ 
//             return Math.round(Math.random())-0.5; //so we get the right +/- combo
//            }).slice(0,1);
//       $(liscompeted).appendTo(liscompeted[0].parentNode).show();

//       var liscompleted = $(".widget_staff_widget li.completed").get().sort(function(){ 
//             return Math.round(Math.random())-0.5; //so we get the right +/- combo
//            }).slice(0,1);
//       $(liscompleted).appendTo(liscompleted[0].parentNode).show();

//       var lisparticiapted = $(".widget_staff_widget li.participated").get().sort(function(){ 
//             return Math.round(Math.random())-0.5; //so we get the right +/- combo
//            }).slice(0,1);
//       $(lisparticiapted).appendTo(lisparticiapted[0].parentNode).show();
//   }

 // LIB
            setTimeout(function() {
              $('li.lib-item').each(function() {
                var $dropdown = $(this);

                $("a.lib-title", $dropdown).click(function(e) {
                  e.preventDefault();
                  $div = $("span.definition", $dropdown);
                  $div.toggle();
                  $("span.definition").not($div).hide();
                  return false;
                });

              });
                  
                $('html').click(function(){
                  $("span.definition").hide();
                });
            }, 1000);


})( jQuery );