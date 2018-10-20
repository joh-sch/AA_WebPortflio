$("document").ready(function() {
  // Extending Barba.BaseView object

  // Page: »Home«
  var home = Barba.BaseView.extend({
    namespace: "home",
    onEnter: function() {
      console.log("%conEnter fired.", "background:orchid ; color: white");
      /////////////////////////
      console.log("Entering »Home« …");
      /////////////////////////
      console.log("… setting Brand-Icon & animation …");
      //icon_animate_init();
    },
    onEnterCompleted: function() {
      console.log("… »Home« loaded successfully!");
      // Set up click-listener for main menu
      mainmenu_close();
      /////////////////////////
      console.log("%cpage content ready.", "background:orchid ; color: white");
      /////////////////////////
      var marker = $("#waypoint");
      var waypoint = new Waypoint({
        element: document.getElementById("waypoint"),
        handler: function(direction) {
          if (direction == "down") {
            console.log("Waypoint reached.");
            // Copy+Paste grid items
            extend_grid();
            setTimeout(function() {
              Waypoint.refreshAll();
            }, 2000);
          }
        },
        offset: "bottom-in-view"
      });
      /////////////////////////
      setTimeout(fadeInCover_toggle_hardbreak, 100);
    },
    onLeave: function() {
      console.log("%conLeave fired.", "background:orchid ; color: white");
      /////////////////////////
      fadeInCover_toggle_hardbreak();
      /////////////////////////
      console.log("Leaving »Home« …");
    },
    onLeaveCompleted: function() {}
  });

  // Init the view
  home.init();
  // ------------

  // Page: »Projekt«
  var projekt = Barba.BaseView.extend({
    namespace: "projekt",
    onEnter: function() {
      console.log("%conEnter fired.", "background:orchid ; color: white");
      /////////////////////////
      console.log("Entering project page …");
      /////////////////////////
      console.log("… setting Brand-Icon & animation …");
      //icon_animate_init();
    },
    onEnterCompleted: function() {
      console.log("… project page loaded successfully!");
      /////////////////////////
      console.log("Setting up slider …");
      $(".main-carousel").flickity({
        // options
        cellAlign: "left",
        contain: true,
        draggable: false,
        pageDots: false,
        wrapAround: false,
        selectedAttraction: 0.01,
        friction: 0.15,
        imagesLoaded: true
      });
      console.log("… slider ready!");
      /////////////////////////
      console.log("Setting slide counter …");
      var $carousel = $(".main-carousel").flickity();
      var $carouselStatus = $(".slider--counter");
      var flkty = $carousel.data("flickity");

      function updateStatus() {
        var cellNumber = flkty.selectedIndex + 1;
        $carouselStatus.text(cellNumber + "/" + flkty.slides.length);
      }
      updateStatus();
      $carousel.on("change.flickity", updateStatus);
      console.log("… slide counter ready!");
      /////////////////////////
      console.log("Setting last-slide detector …");
      var $carousel = $(".main-carousel").flickity();
      var flkty = $carousel.data("flickity");
      var nextProjectBtn = $(".slider--NextProject-btn-container");

      function detectLast() {
        if (flkty.selectedIndex == flkty.cells.length - 1) {
          console.log("This is the last slide.");
          nextProjectBtn.removeClass("hidden--dis");
        } else {
          console.log("This is not the last slide.");
          nextProjectBtn.addClass("hidden--dis");
        }
      }
      $carousel.on("change.flickity", detectLast);
      detectLast();
      console.log("… last-slide detector ready!");
      /////////////////////////
      console.log("Setting first-slide detector …");
      var $carousel = $(".main-carousel").flickity();
      var flkty = $carousel.data("flickity");
      var prevProjectBtn = $(".slider--PrevProject-btn-container");

      function detectFirst() {
        if (flkty.selectedIndex == flkty.cells.length - flkty.cells.length) {
          console.log("This is the first slide.");
          prevProjectBtn.removeClass("hidden--dis");
        } else {
          console.log("This is not the first slide.");
          prevProjectBtn.addClass("hidden--dis");
        }
      }
      $carousel.on("change.flickity", detectFirst);
      detectFirst();
      console.log("… first-slide detector ready!");
      /////////////////////////
      console.log("%cpage content ready.", "background:orchid ; color: white");
      /////////////////////////
      setTimeout(fadeInCover_toggle_hardbreak, 100);
    },
    onLeave: function() {
      console.log("%conLeave fired.", "background:orchid ; color: white");
      /////////////////////////
      fadeInCover_toggle_hardbreak();
      /////////////////////////
      console.log("Closing navbar …");
      if ($("#MainMenu").hasClass("menu--state--open")) {
        mainmenu_toggle();
        console.log("… navbar closed …");
      } else {
        console.log("… Navbar cannot be closed b/c it is not open …");
      }
      /////////////////////////
      console.log("… leaving project page …");
    },
    onLeaveCompleted: function() {}
  });

  // Init the view
  projekt.init();
  // ------------

  // -------------------------------
  var transEffect = Barba.BaseTransition.extend({
    start: function() {
      console.log("%cBarba starting …", "background:red ; color: white");
      this.newContainerLoading.then(val =>
        this.fadeInNewcontent($(this.newContainer))
      );
    },
    fadeInNewcontent: function(nc) {
      nc.hide();
      var _this = this;
      $(this.oldContainer)
        .fadeOut(300)
        .promise()
        .done(() => {
          nc.css("visibility", "visible");
          /////////////////////////
          nc.fadeIn(300, function() {
            _this.done();
          });
        });
    }
  });
  Barba.Pjax.getTransition = function() {
    return transEffect;
  };
  Barba.Pjax.start();
});
