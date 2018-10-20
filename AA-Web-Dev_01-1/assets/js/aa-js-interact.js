//	AA Web Portfolio
//	Scripts: Interactions

//	––––––––––––––––––––––––––––––––––––––––––––––––––––
//	––––––––––––––––––––––––––––––––––––––––––––––––––––

//	––––––– MENU INTERACTION –––––––
//	––––––––––––––––––––––––––––––––

// Open Main Menu
function mainmenu_toggle() {
  var menu = $("#MainMenu");
  var subMenu = $("#FooterMenu");
  var filterMenu = $("#FilterMenu");
  var menuBtn = $("#MainMenuButton");
  var menuSec1 = $("#MainMenu_about");
  var menuSec2 = $("#MainMenu_contact");
  var menuSec3 = $("#MainMenu_shop");
  var menuSec4 = $("#MainMenu_work");

  var pageLocation = $(".main-container");

  if (menu.hasClass("menu--state--closed")) {
    menuSec1.removeClass("hidden--vis");
    menuSec2.removeClass("hidden--vis");
    menuSec3.removeClass("hidden--vis");
    menuSec4.removeClass("hidden--vis");
    subMenu.removeClass("hidden--dis");
    menu.removeClass("menu--state--closed");
    menu.addClass("menu--state--open");
    filterMenu.addClass("hidden--dis");

    // set page content inactive
    if (pageLocation.attr("data-namespace").indexOf("home") > -1) {
      $("#contentHome").addClass("hidden--interact");
      $("body").addClass("scroll--none");
    } else {
      if (pageLocation.attr("data-namespace").indexOf("projekt") > -1) {
        $(".main-carousel").addClass("hidden--interact");
      } else {
        console.log("I do not know where we are");
      }
    }
  } else {
    menuSec1.addClass("hidden--vis");
    menuSec2.addClass("hidden--vis");
    menuSec3.addClass("hidden--vis");
    menuSec4.addClass("hidden--vis");
    subMenu.addClass("hidden--dis");
    menu.addClass("menu--state--closed");
    menu.removeClass("menu--state--open");
    filterMenu.removeClass("hidden--dis");

    // set page content active
    if (pageLocation.attr("data-namespace").indexOf("home") > -1) {
      $("#contentHome").removeClass("hidden--interact");
      $("body").removeClass("scroll--none");
    } else {
      if (pageLocation.attr("data-namespace").indexOf("projekt") > -1) {
        $(".main-carousel").removeClass("hidden--interact");
      } else {
        console.log("I do not know where we are :(");
      }
    }
  }
}

// Open Filter Menu
function filtermenu_toggle() {
  var button = $("#FilterMenuButton");

  button.siblings(".menu--navbar--bottom--button").toggleClass("hidden--op");
}

// Close menu if click occurs outside of menu
function mainmenu_close() {
  var menu = $("#MainMenu");

  $("html").on("click.closeMenu", function(e) {
    // Check if menu is open…
    if (menu.hasClass("menu--state--open")) {
      if (
        !$(e.target)
          .parent()
          .hasClass("menu--navbar--top-wrapper")
      ) {
        mainmenu_toggle();
      }
    }
    // …in case menu is closed
    else {
      console.log("Main Menu closed");
      if ($(e.target).is("#brandIcon", "#MainMenuButton")) {
        mainmenu_toggle();
      }
    }
  });
}
//	––––––––––––––––––––––––––––––––
//	––––––––––––––––––––––––––––––––

// **************************************************
// **************************************************

//	–––––– BUTTON INTERACTION ––––––
//	––––––––––––––––––––––––––––––––

// Filter-Button(s)
var unmatched = $();
var matched = $();

var detached_matched = [];
var detached_unmatched = [];

$("document").ready(function() {
  // Define button
  var button = $("#FilterMenu").children(
    ".menu--navbar--bottom--button.default"
  );
  // Elements
  var orgContainer = $("#contentHome");
  var column1_org = orgContainer.children("#column1");
  var column2_org = orgContainer.children("#column2");
  var column3_org = orgContainer.children("#column3");
  var col1_items_org = column1_org.children(".grid--item");
  var col2_items_org = column2_org.children(".grid--item");
  var col3_items_org = column3_org.children(".grid--item");

  var copyContainer = $("#grid-copy");
  var column1_copy = copyContainer.children("#column1");
  var column2_copy = copyContainer.children("#column2");
  var column3_copy = copyContainer.children("#column3");
  var col1_items_copy = column1_copy.children(".grid--item");
  var col2_items_copy = column2_copy.children(".grid--item");
  var col3_items_copy = column3_copy.children(".grid--item");
  var allCopies = copyContainer
    .children(".grid--column")
    .children(".grid--item");
  //
  button.click(function() {
    var filter = "." + $(this).data("filter");
    // Filter items from originals & copies
    var copies_unmatched_col1 = col1_items_copy.not(filter);
    var copies_matched_col1 = col1_items_copy.filter(filter);
    var unmatched_col1 = col1_items_org.not(filter);
    var matched_col1 = col1_items_org.filter(filter);

    var copies_unmatched_col2 = col2_items_copy.not(filter);
    var copies_matched_col2 = col2_items_copy.filter(filter);
    var unmatched_col2 = col2_items_org.not(filter);
    var matched_col2 = col2_items_org.filter(filter);

    var copies_unmatched_col3 = col3_items_copy.not(filter);
    var copies_matched_col3 = col3_items_copy.filter(filter);
    var unmatched_col3 = col3_items_org.not(filter);
    var matched_col3 = col3_items_org.filter(filter);
    //
    if (filter == ".all") {
      // Set button active
      $(this).addClass("active");
      // Reset all filter buttons
      $("#FilterMenu .menu--navbar--bottom--button.default")
        .not($(this))
        .removeClass("active");
      // Empty the visible grid
      var allOriginals = orgContainer
        .children(".grid--column")
        .children(".grid--item");
      allOriginals.remove();
      // Refill with copies
      var allCopies = copyContainer
        .children(".grid--column")
        .children(".grid--item");
      setTimeout(function() {
        $.each(allCopies, function(i, v) {
          var column = $(this).data("column");
          //
          if (column == "column1") {
            column1_org.append($(this).clone());
          }
          if (column == "column2") {
            column2_org.append($(this).clone());
          }
          if (column == "column3") {
            column3_org.append($(this).clone());
          }
        });
      }, 10);
      // Reset infinite scroll waypoint
      Waypoint.refreshAll();
    } else {
      if ($(this).hasClass("active")) {
        // Remove all items from grid
        unmatched.detach();
        matched.detach();
        // Set button inactive
        $(this).removeClass("active");
        // Merge matched & unmatched items
        var allItems = $.merge(unmatched, matched);
        var allItemsOrdered = allItems.prevObject;
        // Sort all items back into columns
        $.each(allItemsOrdered, function(i, v) {
          var column = $(this).data("column");
          //
          if (column == "column1") {
            $("#column1").append(v);
          }
          if (column == "column2") {
            $("#column2").append(v);
          }
          if (column == "column3") {
            $("#column3").append(v);
          }
        });
      } else {
        // Remove all items from grid
        unmatched.detach();
        matched.detach();
        // Set button active
        $(this).addClass("active");
        // Reset all filter buttons
        $("#FilterMenu .menu--navbar--bottom--button.default")
          .not($(this))
          .removeClass("active");
        // Sort matched items back into columns
        var columnCounter = 1;
        //
        $.each(matched, function(i, v) {
          if (columnCounter == 1) {
            column1.append(v);
            columnCounter++;
          } else {
            if (columnCounter == 2) {
              column2.append(v);
              columnCounter++;
            } else {
              if (columnCounter == 3) {
                column3.append(v);
                columnCounter = 1;
              }
            }
          }
        });
      }
    }
  });
});
//	––––––––––––––––––––––––––––––––
//	––––––––––––––––––––––––––––––––

// **************************************************
// **************************************************

//	–––––– OVERLAY INTERACTION –––––
//	––––––––––––––––––––––––––––––––

function fadeInCover_toggle_smooth() {
  var cover = $("#fadeInCover");

  if (cover.hasClass("hidden--dis")) {
    cover.removeClass("hidden--dis");
    /////////////////////////
    setTimeout(function() {
      cover.removeClass("hidden--op");
    }, 20);
    /////////////////////////
    setTimeout(function() {
      console.log("%cCover turned on.", "background:black ; color: white");
    }, 320);
  } else {
    cover.addClass("hidden--op");
    /////////////////////////
    setTimeout(function() {
      cover.addClass("hidden--dis");
    }, 310);
    /////////////////////////
    setTimeout(function() {
      console.log("%cCover turned off.", "background:black ; color: white");
    }, 320);
  }
}

function fadeInCover_toggle_hardbreak() {
  var cover = $("#fadeInCover");

  if (cover.hasClass("hidden--dis")) {
    cover.removeClass("hidden--dis");
    /////////////////////////
    setTimeout(function() {
      cover.removeClass("hidden--op");
    }, 10);
    /////////////////////////
    setTimeout(function() {
      console.log("%cCover turned on.", "background:black ; color: white");
    }, 20);
  } else {
    cover.addClass("hidden--op");
    /////////////////////////
    setTimeout(function() {
      cover.addClass("hidden--dis");
    }, 10);
    /////////////////////////
    setTimeout(function() {
      console.log("%cCover turned off.", "background:black ; color: white");
    }, 20);
  }
}

//	––––––––––––––––––––––––––––––––
//	––––––––––––––––––––––––––––––––
