//	AA Web Portfolio
//	Scripts: Interactions 

//	––––––––––––––––––––––––––––––––––––––––––––––––––––
//	––––––––––––––––––––––––––––––––––––––––––––––––––––


//	––––––– MENU INTERACTION –––––––
//	––––––––––––––––––––––––––––––––

	// Open Main Menu
	function mainmenu_toggle() {
		var menu 				= $('#MainMenu');
		var subMenu			= $('#FooterMenu'); 
		var menuBtn 		= $('#MainMenuButton');
		var menuSec1 		= $('#MainMenu_about');
		var menuSec2 		= $('#MainMenu_contact');
		var menuSec3 		= $('#MainMenu_shop');

		if (menu.hasClass('menu--closed')) {
			menuSec1.removeClass('hidden--vis')
			menuSec2.removeClass('hidden--vis')
			menuSec3.removeClass('hidden--vis')
			subMenu.removeClass('hidden--dis')
			menu.removeClass('menu--closed')
			menu.addClass('menu--open')
		} else {
			menuSec1.addClass('hidden--vis')
			menuSec2.addClass('hidden--vis')
			menuSec3.addClass('hidden--vis')
			subMenu.addClass('hidden--dis')
			menu.addClass('menu--closed')
			menu.removeClass('menu--open')
		
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
