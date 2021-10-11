// event pada saat di click
$(".page-select").on("click", function () {
  $(".page-select").removeClass("active");
  $(this).addClass("active");
});

$(".page-scroll").on("click", function (e) {
  //ambil isi href
  var target = $(this).attr("href");

  //ambil isi href
  var elementTarget = $(target);

  if (target == "#about") {
    console.log("true");
    $("html, body").animate(
      {
        scrollTop: elementTarget.offset().top + 125,
      },
      1250,
      "easeInOutExpo"
    );
  } else {
    console.log("false");
    $("html, body").animate(
      {
        scrollTop: elementTarget.offset().top - 75,
      },
      1250,
      "easeInOutExpo"
    );
  }

  e.preventDefault();
});

// slides
// $(window).on("load", function () {
//   $("section#about")
//     .css({
//       image: "url(../img/backpack-guy.jpg)",
//     })
//     .slidesjs({
//       play: { auto: true, interval: 6000 },
//       navigation: false,
//     });
// });

// $(".slides").slidesjs({
//   play: { auto: true, interval: 6000 },
//   navigation: false,
// });

//paralax
$(window).scroll(function () {
  var wScroll = $(this).scrollTop();

  // console.log(wScroll);
  // jumbotron

  // $(".jumbotron img").css({
  //   transform: "translate(0px, " + wScroll / 4 + "%)",
  // });

  // $(".jumbotron h1").css({
  //   transform: "translate(0px, " + wScroll / 2 + "%)",
  // });

  // $(".jumbotron p").css({
  //   transform: "translate(0px, " + wScroll / 1.2 + "%)",
  // });

  //portfolio
  if (wScroll > $(".portfolio").offset().top - 500 && wScroll < $("#contact").offset().top - 500) {
    $(".portfolio .tm-gallery-item").each(function (i) {
      setTimeout(function () {
        $(".portfolio .tm-gallery-item").eq(i).addClass("muncul");
      }, 200 * i);
    });
  } else {
    $(".portfolio .tm-gallery-item.muncul").each(function (i) {
      setTimeout(function () {
        $(".portfolio .tm-gallery-item.muncul").eq(i).removeClass("muncul");
      }, 200 * i);
    });
  }
});
