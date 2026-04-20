(function ($) {

  /* ------------------------------- */

  $(function(){

    load_event();

	menuFunc();
	
	if($(window).width() > 768){
		pagetop();
	}
	
	$(window).on("load resize scroll",function(e){
    	$('#contents').css('margin-top', $('#header').height());	
	});

    // ------------------------------

    // UA

    // ------------------------------

    var window_width  = window.innerWidth;
	
    agent = navigator.userAgent;

    mobile       = false;

    iPhone       = false; /* iPhone */

    iPad         = false; /* iPad */

    androidphone = false; /* Android Phone only */

    android      = false; /* Android Phone and Tablet */

    OSX          = false; /* Mac OSX */



    if (agent.search(/iPhone/) != -1 || agent.search(/iPod/) != -1 || agent.search(/Android/) != -1) { mobile = true } else { mobile = false };

    if (agent.search(/Mac/) != -1)    { OSX    = true };

    if (agent.search(/iPad/) != -1)   { iPad   = true };

    if (agent.search(/iPhone/) != -1) { iPhone = true };

    if (agent.search(/Android/) != -1 && agent.search(/Mobile/) != -1) { androidphone = true };

    if (agent.search(/Android/) != -1 && androidphone == false)        { android      = true };



    // ------------------------------

    // UA機種別に命令したい場合

    // ------------------------------


    /* iPhone */

    if (iPhone == true) {

    }


    /* iPad */

    if (iPad == true) {

      $(window).load(function() {

        //$('meta[name=viewport]').attr('content','width=1100px');

      });

    }

    /* Android Phone and Tablet */

    if (android == true) {}

    /* Android phone */

    if (androidphone == true) {}

    /* MacOS */

    if (OSX == true) {}


    // ------------------------------

    // スクロール

    // ------------------------------

    $('a[href^=#], area[href^=#]').click(function () {

      var speed = 800;

      var href = $(this).attr("href");

      var target = $(href == "#" || href == "" ? 'html' : href);

      var position = target.offset().top;

      $("html, body").animate({

        scrollTop: position

      }, speed, "easeInOutExpo");

      return false;

    });

  });

  
   // user agent

    $('.pc_text,.sp_text').hide();

	$(function(){

	 // user agent

	 if (mobile == true) {

	 $('.sp_text').show();

	 }else {

	 $('.pc_text').show();

	 }

	});

})(jQuery);

/*image rollover*/

var load_event = function(){

  $('a>img[src*="-out-"],input[src*="-out-"]').each(function(){

    var $$ = $(this);

    $$.mouseover(function(){ $(this).attr('src', $(this).attr('src').replace(/-out-/,'-on-')) });

    $$.mouseout (function(){

      if ( $(this).attr('wws') != 'current' ) { $(this).attr('src', $(this).attr('src').replace(/-on-/,'-out-')) }

    });

  });

}


/* menuFunc*/

var menuFunc = function(){
	$("#menu_btn").bind("click" ,function(){
		var disVal=$(this).next().css("display");
		if(disVal!=="none"){
			$(this).removeClass("current");
			$(this).next().slideUp(500);
		}else{
			$(this).addClass("current");
			$(this).next().slideDown(500);
		}
	});

	$( window ).resize(function() {
		 w_width = $(window).width();
		 if( w_width >= 769){
			$("#navi").attr("style","");
		 }
	});
	
	$("#navi li a").bind("click", function() {		
        if ($('#menu_btn').hasClass('current')) {
            $('#menu_btn').removeClass("current");			
            $('#menu_btn').next('#navi').slideUp('slow');
        }		
    })	
}

/**/
var pagetop = function(){
	$(window).scroll(function () {
		if ($(this).scrollTop() > 500) {
			$('#pagetop').fadeIn();
		} else {
			$('#pagetop').fadeOut();
		}
	})
	$('#pagetop a').click(function () {
		$("html, body").animate({
			scrollTop: 0
		}, 500, "easeInOutExpo");
	})	
}




