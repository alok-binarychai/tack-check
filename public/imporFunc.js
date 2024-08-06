/**
 *
 *
 *
 *
 * Mobile menu functions written by prasenjeet symon
 */
$(document).ready(function () {
  // for the week end functions
  document.querySelector(".weekEndKnowMoreButton")
    ? document
        .querySelector(".weekEndKnowMoreButton")
        .addEventListener("click", function (e) {
          e.preventDefault();
          window.location.href = "/week-pop";
        })
    : null;

  // for the about us page attach navigation
  document.querySelector(".program-container")
    ? document
        .querySelector(".program-container")
        .querySelectorAll("div")
        .forEach((e) => {
          // change the cursor
          e.style.cursor = "pointer";
          e.addEventListener("click", function (e) {
            e.preventDefault();
            // goto the page guide
            window.location.href = "/guide";
          });
        })
    : null;

  // Show the popup when the button is clicked
  $("#btn-show-popup-mobile-menu").click(function () {
    console.log("clicked");
    $("#mobileMenuPopupMain").show();
  });

  // Hide the popup when the close button is clicked
  $("#close-btn-menu-mobile").click(function () {
    $("#mobileMenuPopupMain").hide();
  });

  const searchIcon = document.querySelector(".searchIconDesktop");
  searchIcon
    ? searchIcon.addEventListener("click", function (e) {
        e.preventDefault();
        const searchInput = document.querySelector(".searchInput");
        $(searchInput).slideToggle();
      })
    : null;

  const allMenuUpper = document.querySelectorAll(".menuItem");
  allMenuUpper
    ? allMenuUpper.forEach((item) => {
        // add event listener
        item.addEventListener("click", function (e) {
          // e.preventDefault();
          item.querySelectorAll(".menuWrapper").forEach((subMenu) => {
            $(subMenu).slideToggle();
          });
        });
      })
    : null;
});
/**
 *
 *
 *
 *
 *
 */
// For floating menu written by prasenjeet symon
$(document).ready(function () {
  $(document).click(function (e) {
    // if clicked outside menuItemHolder then close the menu
    if (
      !$(".stickyNavigationWrapper").is(e.target) &&
      $(".stickyNavigationWrapper").has(e.target).length === 0
    ) {
      $(".menuItemHolder").hide();
      $(".subMenuWrapper").hide();
    }
  });

  $(".menuItemHolder").hide();
  $(".subMenuWrapper").hide();
  $(".stickyNavigationWrapper")[0].style.visibility = "visible";

  $(".hamburgerMenu span i").click(function () {
    $(".menuItemHolder").toggle();
  });

  $(".menuItem > img").each(function () {
    $(this).hover(function () {
      $(".subMenuWrapper").not($(this).parent().find(".subMenuWrapper")).hide();
      $(this).parent().find(".subMenuWrapper").show();
    });
  });
});
/**
 *
 *
 *
 * For the universal popup written by prasenjeet symon
 */
$(document).ready(function () {
  // console.log($(".popup"));
  $(".popup").each(function () {
    $(this)[0].style.visibility = "visible";
  });
});

/**
 *
 *
 *
 *
 * Helper functions
 */
function getScreenSize() {
  const screenWidth = window.innerWidth;

  if (screenWidth < 768) {
    return "Mobile";
  } else if (screenWidth < 1024) {
    return "Tablet";
  } else {
    return "Desktop";
  }
}
/**
 *
 *
 * For tap to go top of screen button floating
 */
$(document).ready(function () {
  // add dummy hidden element to the body first make it invisible
  $("body").prepend("<div id='navToTopID'></div>");
  $("#navToTopID").css({
    visibility: "hidden",
  });
});
