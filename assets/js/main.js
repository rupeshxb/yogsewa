(function ($) {
  $(".main-menu > ul > li:has(ul)").addClass("hassub");
  $(".hassub").append('<i class="fas fa-chevron-down"></i>	');

  $(".hamburger").on("click", function () {
    $("body").addClass("showSide-menu");
    $(".black-layer").fadeIn(400);
  });

  $(".black-layer,  .showSide-menu .hamburger ").on("click", function () {
    $("body").removeClass("showSide-menu");
    $(this).fadeOut(400);
  });

  $(".reviews  .owl-carousel").owlCarousel({
    loop: true,
    margin: 20,
    nav: false,
    dots: true,
    autoplay: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      768: {
        items: 3,
      },
    },
  });
  $("#btn--chat-call").click(function () {
    $(".mesgs").toggle();
  });

  $("#action_menu_btn").click(function () {
    $(".mesgs").hide();
  });
})(jQuery);

// ------- Dynamic, shrinking navbar ----------------- //

window.onscroll = function () {
  scrollNavbar();
};

function scrollNavbar() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("header").style.padding = "0px 0px";
    document.getElementById("header").style.backgroundColor = "#DBD5C9";
    document.getElementById("header").style.transition = "400ms";
    document.getElementById("get-appoint-btn").style.padding = "16px 30px";
    document.getElementById("get-appoint-btn").style.borderRadius = "0px";
    document.getElementById("get-appoint-btn").style.transition = "400ms";
    document.getElementById("navbar-logo").style.width = "150px";
    var allLists = document.querySelectorAll(".site-nav > div > ul > li");
    for (var i = 0; i < allLists.length; i++) {
      allLists[i].style.height = "50px";
    }
  } else {
    document.getElementById("navbar-logo").style.width = "175px";
    document.getElementById("header").style.padding = "15px 0px";
    document.getElementById("header").style.backgroundColor = "transparent";
    document.getElementById("get-appoint-btn").style = "none";
  }
}

// ------- Dynamic, shrinking navbar ----------------- //

// ------- slick slider jquery ------- //

$(".banner-slick").slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  infinite: true,
});

// ------- slick slider jquery ------- //
