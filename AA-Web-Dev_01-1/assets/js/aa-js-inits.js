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

			// Load location prefix (path)
			var iconsPathPre	= '/assets/images/brandicon/';

			//////////////////////////////////////////////////

			// Animation #1
			function icon_animation01() {

				// Animation #1 – Frames
				var iconSet1_frame1	= iconsPathPre + 'icon-01/Portrait-Icon-01-Augenrollen-01-1_1.svg';
				var iconSet1_frame2	= iconsPathPre + 'icon-01/Portrait-Icon-01-Augenrollen-01-1_2.svg';
				var iconSet1_frame3	= iconsPathPre + 'icon-01/Portrait-Icon-01-Augenrollen-01-1_3.svg';
				var iconSet1_frame4	= iconsPathPre + 'icon-01/Portrait-Icon-01-Augenrollen-01-1_4.svg';

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

			//////////////////////////////////////////////////

			// Animation #2
			function icon_animation02() {

				// Animation #2 – Frames
				var iconAnim2_frame1	= iconsPathPre + 'icon-02/Portrait-Icon-02-ZungeRaus-02-1_1.svg';
				var iconAnim2_frame2	= iconsPathPre + 'icon-02/Portrait-Icon-02-ZungeRaus-02-1_2.svg';
				var iconAnim2_frame3	= iconsPathPre + 'icon-02/Portrait-Icon-02-ZungeRaus-02-1_3.svg';

				// Loading initial frame (the default icon)
				console.log('%cBrand-Icon: Loading 1st frame (default icon) …', 'background:tomato ; color: white');
				iconImage.attr("src", iconAnim2_frame1);
				
				// Set up frames
				function icon_animation02_play() {
					setTimeout(function() {
						console.log('%cBrand-Icon: Loading Animation #2, 2nd frame …', 'background:Lightgreen ; color: black');
						iconImage.attr("src", iconAnim2_frame2);
					}, 140);
					/////////////////////////
					setTimeout(function() {
						console.log('%cBrand-Icon: Loading Animation #2, 3nd frame …', 'background:Lightgreen ; color: black');
						iconImage.attr("src", iconAnim2_frame3);
					}, 280);
					/////////////////////////
					setTimeout(function() {
						console.log('%cBrand-Icon: Loading Animation #2, last frame (default icon) …', 'background:Lightblue ; color: black');
						iconImage.attr("src", iconAnim2_frame1);
					}, 560);
				}

				// Play frames
				setInterval(icon_animation02_play, 5000)
			}


			//////////////////////////////////////////////////


			// Choose & call animation

				// Set up function for random selection from array
				function randomFrom(array) {return array[Math.floor(Math.random() * array.length)];}

				// Set up array containing all animations (functions)
				var animArray = [
					function(){
				     icon_animation01();
				    },
					function(){
						icon_animation02();
					}
				];

				function icon_animation_random_play(){ 
					randomFrom(animArray).call();
				};

				// Call function to randomly select animation
				icon_animation_random_play();
		}
//	–––––––––––––––––––––––––––––––
//	–––––––––––––––––––––––––––––––


// **************************************************
// **************************************************