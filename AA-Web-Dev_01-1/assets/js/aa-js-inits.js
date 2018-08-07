//	AA Web Portfolio
//	Scripts: Initilizations 

//	––––––––––––––––––––––––––––––––––––––––––––––––––––
//	––––––––––––––––––––––––––––––––––––––––––––––––––––


//	––––––– ICON ANIMATIONS –––––––
//	–––––––––––––––––––––––––––––––
		
		// Animation Setup
		function icon_animate_init() {

			var iconContainer = $('#MainMenuButton')
			var iconImage			=	$('#brandIcon')

			// Load images of set
			var iconsPathPre	= '/assets/images/brandicon/';

				// Set #1
				var iconSet1_frame1	= iconsPathPre + 'icon-01/Portrait-Icon-01-Augenrollen-01-1_1.svg';
				var iconSet1_frame2	= iconsPathPre + 'icon-01/Portrait-Icon-01-Augenrollen-01-1_2.svg';
				var iconSet1_frame3	= iconsPathPre + 'icon-01/Portrait-Icon-01-Augenrollen-01-1_3.svg';
				var iconSet1_frame4	= iconsPathPre + 'icon-01/Portrait-Icon-01-Augenrollen-01-1_4.svg';
			
			// Animation #1
			function icon_animation01() {
				// Loading initial frame (the default icon)
				console.log('%cBrand-Icon: Loading 1st frame of first set …', 'background:tomato ; color: white');
				iconImage.attr("src", iconSet1_frame1);
				
				// Set up frames
				function icon_animation01_play() {
					setTimeout(function() {
						console.log('%cBrand-Icon: Loading 2nd frame of first set …', 'background:Lightgreen ; color: black');
						iconImage.attr("src", iconSet1_frame2);
					}, 90);
					/////////////////////////
					setTimeout(function() {
						console.log('%cBrand-Icon: Loading 3rd frame of first set …', 'background:Lightgreen ; color: black');
						iconImage.attr("src", iconSet1_frame3);
					}, 180);
					/////////////////////////
					setTimeout(function() {
						console.log('%cBrand-Icon: Loading 4th frame of first set …', 'background:Lightgreen ; color: black');
						iconImage.attr("src", iconSet1_frame4);
					}, 270);
					/////////////////////////
					setTimeout(function() {
						console.log('%cBrand-Icon: Loading 5th (1st) frame of first set …', 'background:Lightblue ; color: black');
						iconImage.attr("src", iconSet1_frame1);
					}, 360);
				}

				// Play frames
				setInterval(icon_animation01_play, 15000)
			}

			// Call Animation #1
			icon_animation01();
		}

//	–––––––––––––––––––––––––––––––
//	–––––––––––––––––––––––––––––––


// **************************************************
// **************************************************