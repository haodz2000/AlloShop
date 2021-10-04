(function ($) {

 "use strict";



/*----------------------------

jQuery MeanMenu

------------------------------ */

	jQuery('nav#dropdown').meanmenu();

	$(".dropdown").hover(            

        function() {

            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");

            $(this).toggleClass('open');        

        },

        function() {

            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");

            $(this).toggleClass('open');       

        }

    );

	//home fore menu

	$('#menu-topo').hide();

	   var menuaberto = false;

	  $('.btn-collapse').click(function(event) {

	    event.preventDefault();

	    $('#menu-topo').toggle('');

	      if(menuaberto == true){

	        menuaberto = false;

	        $(".lista-collapse:nth-child(1)").removeClass('botao-lista-cima');

	        $(".lista-collapse:nth-child(2)").removeClass('hidden');

	        $(".lista-collapse:nth-child(3)").removeClass('botao-lista-baixo');

	      }else {

	        menuaberto = true;

	        $(".lista-collapse:nth-child(1)").addClass('botao-lista-cima');

	         $(".lista-collapse:nth-child(2)").addClass('hidden');

	        $(".lista-collapse:nth-child(3)").addClass('botao-lista-baixo');

	      }

	  });



/*----------------------------

wow js active

------------------------------ */

	new WOW().init();



/*----------------------------

Click on QUANTITY

------------------------------ */

	//Single product

	$(".btn-minus").on("click",function(){

		var now = $(".section > div > input").val();

		if ($.isNumeric(now)){

		if (parseInt(now) -1 > 0){ now--;}

		$(".pro-button > ul > li > input").val(now);

		}else{

			$(".pro-button > ul > li > input").val("1");

		}

	})            

	$(".btn-plus").on("click",function(){

		var now = $(".pro-button > ul > li > input").val();

		if ($.isNumeric(now)){

		$(".pro-button > ul > li > input").val(parseInt(now)+1);

		}else{

			$(".pro-button > ul > li > input").val("1");

		}

	})



	//Shipping product

	$(".minus1").on("click",function(){

		var now = $(".section > div > input").val();

		if ($.isNumeric(now)){

		if (parseInt(now) -1 > 0){ now--;}

		$(".order1 >  input").val(now);

		}else{

			$(".order1 >  input").val("1");

		}

	})            

	$(".plus1").on("click",function(){

		var now = $(".order1 >  input").val();

		if ($.isNumeric(now)){

		$(".order1 > input").val(parseInt(now)+1);

		}else{

			$(".order1 >  input").val("1");

		}

	})

	$(".minus2").on("click",function(){

		var now = $(".section > div > input").val();

		if ($.isNumeric(now)){

		if (parseInt(now) -1 > 0){ now--;}

		$(".order2 >  input").val(now);

		}else{

			$(".order2 >  input").val("1");

		}

	})            

	$(".plus2").on("click",function(){

		var now = $(".order2 >  input").val();

		if ($.isNumeric(now)){

		$(".order2 > input").val(parseInt(now)+1);

		}else{

			$(".order2 >  input").val("1");

		}

	})

	$(".minus3").on("click",function(){

		var now = $(".section > div > input").val();

		if ($.isNumeric(now)){

		if (parseInt(now) -1 > 0){ now--;}

		$(".order3 >  input").val(now);

		}else{

			$(".order3 >  input").val("1");

		}

	})            

	$(".plus3").on("click",function(){

		var now = $(".order3 >  input").val();

		if ($.isNumeric(now)){

		$(".order3 > input").val(parseInt(now)+1);

		}else{

			$(".order3 >  input").val("1");

		}

	})

/*----------------------------

owl active

------------------------------ */  

	$(".slider-two").owlCarousel({

		autoPlay: true, 

		slideSpeed:2000,

		pagination:true,

		navigation:false,	  

		items : 1,

		/* transitionStyle : "fade", */    /* [This code for animation ] */

		navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],

		itemsDesktop : [1199,1],

		itemsDesktopSmall : [980,1],

		itemsTablet: [768,1],

		itemsMobile : [479,1],

	});

	//Client slider

	$(".client-slider").owlCarousel({

		autoPlay: true, 

		slideSpeed:2000,

		pagination:false,

		navigation:false,	  

		items : 10,

		/* transitionStyle : "fade", */    /* [This code for animation ] */

		navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],

		itemsDesktop : [1199,5],

		itemsDesktopSmall : [980,3],

		itemsTablet: [768,2],

		itemsMobile : [479,2],

	});

	//product banner slider

	$(".product-banner-slider").owlCarousel({

		autoPlay: true, 

		slideSpeed:2000,

		pagination:true,

		navigation:false,	  

		items : 1,

		/* transitionStyle : "fade", */    /* [This code for animation ] */

		navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],

		itemsDesktop : [1199,1],

		itemsDesktopSmall : [980,1],

		itemsTablet: [768,1],

		itemsMobile : [479,1],

	});

	//Blog three slider

	$(".blog-slider-three").owlCarousel({

		autoPlay: true, 

		slideSpeed:2000,

		pagination:false,

		navigation:false,	  

		items : 3,

		/* transitionStyle : "fade", */    /* [This code for animation ] */

		navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],

		itemsDesktop : [1199,3],

		itemsDesktopSmall : [980,3],

		itemsTablet: [768,2],

		itemsMobile : [479,1],

	});



/*--------------------------

jarallax active

---------------------------- */

	$('.jarallax').jarallax({

		speed: 0.5

	});

/*----------------------------

slick active

------------------------------*/

	$('.blog-two-slider').slick({

	  centerMode: true,

	  slidesToShow: 3,

	  responsive: [

	    {

	      breakpoint: 768,

	      settings: {

	        arrows: false,

	        centerMode: true,

	        slidesToShow: 2

	      }

	    },

	    {

	      breakpoint: 480,

	      settings: {

	        arrows: false,

	        centerMode: true,

	        slidesToShow: 1

	      }

	    }

	  ]

	});

/*----------------------------

isotope active

------------------------------*/     

	var $grid = $('.grid').isotope({

    itemSelector: '.grid-item',

    stagger: 30

  });



  $('.product-menu').on( 'click', '.button', function() {

    var filterValue = $(this).attr('data-filter');

    $grid.isotope({ filter: filterValue });

  });



  // change is-checked class on buttons

  $('.filter').each( function( i, buttonGroup ) {

    var $buttonGroup = $( buttonGroup );

    $buttonGroup.on( 'click', '.button', function() {

      $buttonGroup.find('.is-checked').removeClass('is-checked');

      $( this ).addClass('is-checked');

    });

  });



/*--------------------------

 List-Grid view

---------------------------- */

	$('#list').on('click',function(event){

		event.preventDefault();

		$('#products .item').addClass('page-single-product');

	});



	$('#grid').on('click',function(event){

		event.preventDefault();

		$('#products .item').removeClass('page-single-product');

		$('#products .item').addClass('grid-group-item');

	});

/*--------------------------

 counterdown

---------------------------- */

	function e() {

	    var e = new Date;

	        e.setDate(e.getDate() + 3);

	    

	    var dd = e.getDate();

	    var mm = e.getMonth() + 1;

	    var y = e.getFullYear();

	    

	    var futureFormattedDate = mm + "/" + dd + "/" + y + ' 12:00:00';

	    

	    return futureFormattedDate;

	}

	$('.count-list').downCount({

		date: e(),

	    offset: 16

	});



/*----------------------------

magnific Popup active

------------------------------ */

	$('.gallery').magnificPopup({

		delegate: 'a',

		type: 'image',

		closeOnContentClick: false,

		closeBtnInside: false,

		mainClass: 'mfp-with-zoom mfp-img-mobile',

		image: {

			verticalFit: true,

			titleSrc: function(item) {

				return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';

			}

		},

		gallery: {

			enabled: true

		},

		zoom: {

			enabled: true,

			duration: 300, // don't foget to change the duration also in CSS

			opener: function(element) {

				return element.find('img');

			}

		}

		

	});



/*----------------------------

range-slider active

------------------------------ */  

	$( "#range-price" ).slider({

		range: true,

		min: 40,

		max: 600,

		values: [ 120, 420 ],

		slide: function( event, ui ) {

			$( "#price" ).val( "$" + ui.values[ 0 ] );

			$( "#price2" ).val( "$" + ui.values[ 1 ] );

		}

	});

	$( "#price" ).val( "$" + $( "#range-price" ).slider( "values", 0 ));  

	$( "#price2" ).val( "$" + $( "#range-price" ).slider( "values", 1 ));  

	 

/*--------------------------

scrollUp

---------------------------- */	

	$.scrollUp({

        scrollText: '<i class="fa fa-angle-up"></i>',

        easingType: 'linear',

        scrollSpeed: 900,

        animation: 'fade'

    }); 	   

 

})(jQuery); 