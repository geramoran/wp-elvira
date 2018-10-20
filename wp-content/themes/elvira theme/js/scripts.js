/* When your mouse cursor enter the background, the fading won't pause and keep playing */ 
$('.carousel').carousel({
    pause: "false" /* Change to true to make it paused when your mouse cursor enter the background */
});

$(window).scroll(function () {
	if ($(window).scrollTop() >= 50) {
		$('nav').css('background','#000');
	} else {
		$('nav').css('background','transparent');
	}
});

$(window).resize(function(){     
	if ($('#buttonResponsive').css('display') != 'none'){
		$('#navbarSidebar').css('display', 'none');
	} else{
		$('#navbarSidebar').css('display', 'block');
	}
	/* */
});

$('#buttonResponsive').on('click', function(){
	if ($('#navbarSidebar').css('display') != 'none'){
		$('#navbarSidebar').css('display', 'none');
	} else{
		$('#navbarSidebar').css('display', 'block');
	}
});

$('#menu-principal li a').addClass("nav-link");
$('.current_page_item').addClass("active");
$('.menu-item-has-children').addClass("dropdown");
$('#menu-principal a.nav-link:contains("Management")').siblings('.sub-menu').addClass('dropdown-menu');
//console.log($('#menu-principal a.nav-link:contains("Management")').siblings('.sub-menu').find('li a').html());
$('#menu-principal a.nav-link:contains("Management")').siblings('.sub-menu').find('li a').addClass('dropdown-item');

/*
$('#menu-principal li.dropdown').hover(function() {
  $(this).find('.sub-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.sub-menu').stop(true, true).delay(200).fadeOut(500);
});
*/
$('#menu-principal a.nav-link:contains("Management")').on('click', function() {
	if($('a.nav-link:contains("Management")').siblings('.sub-menu').css('display') != 'none'){
		$('a.nav-link:contains("Management")').siblings('.sub-menu').css('display', 'none');
	}else{
		$('a.nav-link:contains("Management")').siblings('.sub-menu').css('display', 'block');
	}
});

var titleTalent = $('.about-us .title-tax a').text();
$('.about-us .title-tax a').remove();
$('.about-us .title-tax').html(titleTalent);