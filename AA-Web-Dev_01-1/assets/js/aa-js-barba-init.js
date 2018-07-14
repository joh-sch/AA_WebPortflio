$('document').ready(function(){

  // Extending Barba.BaseView object

    // Page: »Home«
      var home = Barba.BaseView.extend({
        namespace: 'home',
        onEnter: function() {
          console.log('Entering »Home« …')
        },
        onEnterCompleted: function() {
          console.log('… »Home« loaded successfully!');

          console.log('Initializing grid …');

						var $grid = $('.grid').isotope({
							// options
							itemSelector: '.grid-item',
							layoutMode: 'masonry',
							transitionDuration: 0,
						});
            // bind filter button click
            $('.filters').on( 'click', 'button', function() {
              var filterValue = $( this ).attr('data-filter');
              $grid.isotope({ filter: filterValue });
            });
            
					console.log('… grid running!');
        },
        onLeave: function() {
        	console.log('Leaving »Home« …')

        },
        onLeaveCompleted: function() {

        }
      });

      // Don't forget to init the view!
      home.init();
    // ------------

  // -------------------------------

  var transEffect = Barba.BaseTransition.extend({
      start: function(){
        this.newContainerLoading.then(val => this.fadeInNewcontent($(this.newContainer)));
      },
      fadeInNewcontent: function(nc) {
        nc.hide();
        var _this = this;
        $(this.oldContainer).fadeOut(200).promise().done(() => {
          nc.css('visibility','visible');
          nc.fadeIn(200, function(){
            _this.done();
          })
        });
      }
  });
  Barba.Pjax.getTransition = function() {
    return transEffect;
  }
  Barba.Pjax.start();
});