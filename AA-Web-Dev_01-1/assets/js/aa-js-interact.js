//	AA Web Portfolio
//	Scripts: Interactions 

//	––––––––––––––––––––––––––––––––––––––––––––––––––––
//	––––––––––––––––––––––––––––––––––––––––––––––––––––


//	––––––– MENU INTERACTION –––––––
//	––––––––––––––––––––––––––––––––


$links = $("li[data-pk-type*='foo']");

	// Open Main Menu
	function mainmenu_toggle() {
		var menu 					= $('#MainMenu');
		var subMenu				= $('#FooterMenu'); 
		var menuBtn 			= $('#MainMenuButton');
		var menuSec1 			= $('#MainMenu_about');
		var menuSec2 			= $('#MainMenu_contact');
		var menuSec3 			= $('#MainMenu_shop');
		var menuSec4 			= $('#MainMenu_work');

		var pageLocation	=	$('.main-container');

		if (menu.hasClass('menu--state--closed')) {
			menuSec1.removeClass('hidden--vis')
			menuSec2.removeClass('hidden--vis')
			menuSec3.removeClass('hidden--vis')
			menuSec4.removeClass('hidden--vis')
			subMenu.removeClass('hidden--dis')
			menu.removeClass('menu--state--closed')
			menu.addClass('menu--state--open')

			// set page content inactive
			if (pageLocation.attr('data-namespace').indexOf('home') > -1) {
				$('#contentHome').addClass('hidden--interact');
			} else {
					if (pageLocation.attr('data-namespace').indexOf('projekt') > -1) {
						$('.main-carousel').addClass('hidden--interact');
				} else {
					console.log('I do not know where we are');
				}
			}
		} else {
			menuSec1.addClass('hidden--vis')
			menuSec2.addClass('hidden--vis')
			menuSec3.addClass('hidden--vis')
			menuSec4.addClass('hidden--vis')
			subMenu.addClass('hidden--dis')
			menu.addClass('menu--state--closed')
			menu.removeClass('menu--state--open')
			
			// set page content active
			if (pageLocation.attr('data-namespace').indexOf('home') > -1) {
				$('#contentHome').removeClass('hidden--interact');
			} else {
					if (pageLocation.attr('data-namespace').indexOf('projekt') > -1) {
						$('.main-carousel').removeClass('hidden--interact');
				} else {
					console.log('I do not know where we are :(');
				}
			}
		}
	}

	// Open Filter Menu
	function filtermenu_toggle() {
		var menu 		= $('#FilterButtons');
		var button 	= $('#FilterMenuButton');

		if (menu.hasClass('menu--closed')) {
			menu.removeClass('hidden--vis')
			menu.removeClass('menu--closed')
		} else {
			menu.addClass('hidden--vis')
			menu.addClass('menu--closed')
		}
	}

//	––––––––––––––––––––––––––––––––
//	––––––––––––––––––––––––––––––––


// **************************************************
// **************************************************


//	–––––– BUTTON INTERACTION ––––––
//	––––––––––––––––––––––––––––––––

//	––––––––––––––––––––––––––––––––
//	––––––––––––––––––––––––––––––––


// **************************************************
// **************************************************


//	–––––– OVERLAY INTERACTION –––––
//	––––––––––––––––––––––––––––––––

	function fadeInCover_toggle() {
		var cover = $('#fadeInCover');

		if (cover.hasClass('hidden--dis')) {
			cover.removeClass('hidden--dis')
			/////////////////////////
			setTimeout(function(){
				cover.removeClass('hidden--op')
			}, 20);
			/////////////////////////
			setTimeout(function(){
				console.log('%cCover turned on.', 'background:black ; color: white');
			}, 320);
		} else {
			cover.addClass('hidden--op')
			/////////////////////////
			setTimeout(function(){
				cover.addClass('hidden--dis')
			}, 310);
			/////////////////////////
			setTimeout(function(){
				console.log('%cCover turned off.', 'background:black ; color: white');
			}, 320);
		}

	}

//	––––––––––––––––––––––––––––––––
//	––––––––––––––––––––––––––––––––
