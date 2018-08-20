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
						console.log('%cBrand-Icon: Loading Animation #2, 4nd frame …', 'background:Lightgreen ; color: black');
						iconImage.attr("src", iconAnim2_frame2);
					}, 560);
					/////////////////////////
					setTimeout(function() {
						console.log('%cBrand-Icon: Loading Animation #2, last frame (default icon) …', 'background:Lightblue ; color: black');
						iconImage.attr("src", iconAnim2_frame1);
					}, 700);
				}

				// Play frames
				setInterval(icon_animation02_play, 15000)
			}

			//////////////////////////////////////////////////

			// Animation #3
			function icon_animation03() {

				// Animation #2 – Frames
				var iconAnim3_frame1	= iconsPathPre + 'icon-03/Portrait-Icon-03-Schielen1-01-1_1.svg';
				var iconAnim3_frame2	= iconsPathPre + 'icon-03/Portrait-Icon-03-Schielen1-01-1_2.svg';

				// Loading initial frame (the default icon)
				console.log('%cBrand-Icon: Loading Animation #3, 1st frame (default icon) …', 'background:tomato ; color: white');
				iconImage.attr("src", iconAnim3_frame1);
				
				// Set up frames
				function icon_animation03_play() {
					setTimeout(function() {
						console.log('%cBrand-Icon: Loading Animation #3, 2nd frame …', 'background:Lightgreen ; color: black');
						iconImage.attr("src", iconAnim3_frame2);
					}, 140);
					/////////////////////////
					setTimeout(function() {
						console.log('%cBrand-Icon: Loading Animation #3, last frame (default icon) …', 'background:Lightblue ; color: black');
						iconImage.attr("src", iconAnim3_frame1);
					}, 560);
				}

				// Play frames
				setInterval(icon_animation03_play, 15000)
			}

			//////////////////////////////////////////////////

			// Animation #4
			function icon_animation04() {

				// Animation #2 – Frames
				var iconAnim4_frame1	= iconsPathPre + 'icon-04/Portrait-Icon-04-Schielen2-01-1_1.svg';
				var iconAnim4_frame2	= iconsPathPre + 'icon-04/Portrait-Icon-04-Schielen2-01-1_2.svg';
				var iconAnim4_frame3	= iconsPathPre + 'icon-04/Portrait-Icon-04-Schielen2-01-1_3.svg';
				var iconAnim4_frame4	= iconsPathPre + 'icon-04/Portrait-Icon-04-Schielen2-01-1_4.svg';

				// Loading initial frame (the default icon)
				console.log('%cBrand-Icon: Loading Animation #4, 1st frame (default icon) …', 'background:tomato ; color: white');
				iconImage.attr("src", iconAnim4_frame1);
				
				// Set up frames
				function icon_animation04_play() {
					setTimeout(function() {
						console.log('%cBrand-Icon: Loading Animation #4, 2nd frame …', 'background:Lightgreen ; color: black');
						iconImage.attr("src", iconAnim4_frame2);
					}, 140);
					/////////////////////////
					setTimeout(function() {
						console.log('%cBrand-Icon: Loading Animation #4, 3nd frame …', 'background:Lightgreen ; color: black');
						iconImage.attr("src", iconAnim4_frame3);
					}, 560);
					/////////////////////////
					setTimeout(function() {
						console.log('%cBrand-Icon: Loading Animation #4, 4nd frame …', 'background:Lightgreen ; color: black');
						iconImage.attr("src", iconAnim4_frame4);
					}, 700);
					/////////////////////////
					setTimeout(function() {
						console.log('%cBrand-Icon: Loading Animation #4, last frame (default icon) …', 'background:Lightblue ; color: black');
						iconImage.attr("src", iconAnim4_frame1);
					}, 1120);
				}

				// Play frames
				setInterval(icon_animation04_play, 15000)
			}

			//////////////////////////////////////////////////

			// Animation #5
			function icon_animation05() {

				// Animation #2 – Frames
				var iconAnim5_frame1	= iconsPathPre + 'icon-05/Portrait-Icon-05-Sonnenbrille-01-1_1.svg';
				var iconAnim5_frame2	= iconsPathPre + 'icon-05/Portrait-Icon-05-Sonnenbrille-01-1_2.svg';
				var iconAnim5_frame3	= iconsPathPre + 'icon-05/Portrait-Icon-05-Sonnenbrille-01-1_3.svg';
				var iconAnim5_frame4	= iconsPathPre + 'icon-05/Portrait-Icon-05-Sonnenbrille-01-1_4.svg';

				// Loading initial frame (the default icon)
				console.log('%cBrand-Icon: Loading Animation #5, 1st frame (default icon) …', 'background:tomato ; color: white');
				iconImage.attr("src", iconAnim5_frame1);
				
				// Set up frames
				function icon_animation05_play() {
					setTimeout(function() {
						console.log('%cBrand-Icon: Loading Animation #5, 2nd frame …', 'background:Lightgreen ; color: black');
						iconImage.attr("src", iconAnim5_frame2);
					}, 1000);
					/////////////////////////
					setTimeout(function() {
						console.log('%cBrand-Icon: Loading Animation #5, 3nd frame …', 'background:Lightgreen ; color: black');
						iconImage.attr("src", iconAnim5_frame3);
					}, 1400);
					/////////////////////////
					setTimeout(function() {
						console.log('%cBrand-Icon: Loading Animation #5, 4th frame …', 'background:Lightgreen ; color: black');
						iconImage.attr("src", iconAnim5_frame4);
					}, 1800);
					/////////////////////////
					setTimeout(function() {
						console.log('%cBrand-Icon: Loading Animation #5, last frame (default icon) …', 'background:Lightblue ; color: black');
						iconImage.attr("src", iconAnim5_frame1);
					}, 2200);
				}

				// Play frames
				setInterval(icon_animation05_play, 15000)
			}

			//////////////////////////////////////////////////


			// Pick & play/call animation (randomly)

				// Set up function for random selection from array
				function randomFrom(array) {return array[Math.floor(Math.random() * array.length)];}

				// Set up array containing all animations (functions)
				var animArray = [
					function(){
						icon_animation02();
					},
					function(){
						icon_animation02();
					},
					function(){
						icon_animation02();
					},
					function(){
						icon_animation02();
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