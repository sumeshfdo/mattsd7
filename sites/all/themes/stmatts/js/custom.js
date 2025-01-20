// (function ($) {
//   $(document).ready(function () {
//     alert('test');
//   });
// })(jQuery);

// jQuery(window).load(function () {

//    jQuery("#main-nav-bar").sticky({ topSpacing: 0 });

// });

// jQuery(window).load(function () {
//    jQuery(".loader").fadeOut("slow");
// })


(function ($) {
  $(window).load(function () {
    $("#main-nav-bar").sticky({ topSpacing: 0 });
  });

})(jQuery);


jQuery(window).load(function () {
  jQuery(".loader").fadeOut("slow");
})


function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);
