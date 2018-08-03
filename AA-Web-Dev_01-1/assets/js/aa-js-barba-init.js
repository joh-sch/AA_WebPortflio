$('document').ready(function(){

  // Extending Barba.BaseView object

    // Page: »Home«
      var home = Barba.BaseView.extend({
        namespace: 'home',
        onEnter: function() {
          console.log('%conEnter fired.', 'background:orchid ; color: white');
          ///////////////////////// 
          console.log('Entering »Home« …')
        },
        onEnterCompleted: function() {
          console.log('… »Home« loaded successfully!');

          console.log('Initializing grid …');

						var $grid = $('.grid').isotope({
							// options
							itemSelector: '.grid-item',
							layoutMode: 'masonry',
							transitionDuration: 0
						});
            // bind filter button click
            $('.filters').on( 'click', 'button', function() {
            	if ($(this).hasClass('checked')) {
            		$grid.isotope({ filter: '*' });
            	} else {
            		var filterValue = $( this ).attr('data-filter');
              	$grid.isotope({ filter: filterValue });
            	}          
            });
            // Change checked class on filter-buttons
            $('.filters').each( function( i, filters ) {
							var $buttonGroup = $( filters );

							$buttonGroup.on( 'click', 'button', function() {
								if ($(this).hasClass('checked')) {
									$( this ).removeClass('checked');
									$( this ).children('.appended').remove();
								} else {
									$( this ).addClass('checked');
									$( this ).append('<img class="appended" src="assets/icons/AA-Web_CheckMark-01-1.svg">');
									$( this ).siblings().children('.appended').remove();
									$( this ).siblings().removeClass('checked');
								}
							});
            });
					console.log('… grid running!');
          /////////////////////////
          console.log('%cpage content ready.', 'background:orchid ; color: white');
          /////////////////////////
          setTimeout(fadeInCover_toggle, 500)
        },
        onLeave: function() {
          console.log('%conLeave fired.', 'background:orchid ; color: white');
          /////////////////////////
          fadeInCover_toggle();
          ///////////////////////// 
        	console.log('Leaving »Home« …')
        },
        onLeaveCompleted: function() {

        }
      });

      // Init the view
      home.init();
    // ------------

    // Page: »Projekt«
      var projekt = Barba.BaseView.extend({
        namespace: 'projekt',
        onEnter: function() {
          console.log('%conEnter fired.', 'background:orchid ; color: white');
          /////////////////////////
          console.log('Entering project page …');
        },
        onEnterCompleted: function() {
          console.log('… project page loaded successfully!');
          ///////////////////////// 
          console.log('Setting up slider …')
						$('.main-carousel').flickity({
							// options
							cellAlign: 'left',
							contain: true,
							draggable: false,
							pageDots: false,
							wrapAround: false,
							selectedAttraction: 0.01,
							friction: 0.15,
							imagesLoaded: true
						});
					console.log('… slider ready!')
          ///////////////////////// 
					console.log('Setting slide counter …')
						var $carousel 			= $('.main-carousel').flickity();
						var $carouselStatus = $('.slider--counter');
						var flkty 					= $carousel.data('flickity');

						function updateStatus() {
						  var cellNumber = flkty.selectedIndex + 1;
						  $carouselStatus.text( cellNumber + '/' + flkty.slides.length );
						}
						updateStatus();
						$carousel.on( 'change.flickity', updateStatus );
					console.log('… slide counter ready!')
					/////////////////////////
					console.log('Setting last-slide detector …')
						var $carousel 				= $('.main-carousel').flickity();
						var flkty 						= $carousel.data('flickity');
						var nextProjectBtn		=	$('.slider--NextProject-btn-container')

						function detectLast() {
							if ( flkty.selectedIndex == flkty.cells.length - 1 ) {
								console.log('This is the last slide.');
								nextProjectBtn.removeClass('hidden--dis')
							} else {
								console.log('This is not the last slide.');
								nextProjectBtn.addClass('hidden--dis')
							}	
						}
						$carousel.on( 'change.flickity', detectLast );
            detectLast();
					console.log('… last-slide detector ready!')
          /////////////////////////
          console.log('Setting first-slide detector …')
            var $carousel         = $('.main-carousel').flickity();
            var flkty             = $carousel.data('flickity');
            var prevProjectBtn    = $('.slider--PrevProject-btn-container')

            function detectFirst() {
              if ( flkty.selectedIndex == flkty.cells.length - flkty.cells.length ) {
                console.log('This is the first slide.');
                prevProjectBtn.removeClass('hidden--dis')
              } else {
                console.log('This is not the first slide.');
                prevProjectBtn.addClass('hidden--dis')
              } 
            }
            $carousel.on( 'change.flickity', detectFirst );
            detectFirst();
          console.log('… first-slide detector ready!')
          /////////////////////////
          console.log('%cpage content ready.', 'background:orchid ; color: white');
          /////////////////////////
          setTimeout(fadeInCover_toggle, 500)
        },
        onLeave: function() {
          console.log('%conLeave fired.', 'background:orchid ; color: white');
          /////////////////////////
          fadeInCover_toggle();
          /////////////////////////
          console.log('Closing navbar …');
            if ($('#MainMenu').hasClass('menu--state--open')) {
              mainmenu_toggle();
              console.log('… navbar closed …');
            } else {
              console.log('… Navbar cannot be closed b/c it is not open …');
            }
          ///////////////////////// 
          console.log('… leaving project page …');
        },
        onLeaveCompleted: function() {
        }
      });

      // Init the view
      projekt.init();
    // ------------

  // -------------------------------
  var transEffect = Barba.BaseTransition.extend({
      start: function(){
        console.log('%cBarba starting …', 'background:red ; color: white');
        this.newContainerLoading.then(val => this.fadeInNewcontent($(this.newContainer)));
      },
      fadeInNewcontent: function(nc) {
        nc.hide();
        var _this = this;
        $(this.oldContainer).fadeOut(300).promise().done(() => {
          nc.css('visibility','visible');
          /////////////////////////
          nc.fadeIn(300, 
            function(){
            _this.done();
          });
        });
      }
  });
  Barba.Pjax.getTransition = function() {
    return transEffect;
  }
  Barba.Pjax.start();
});