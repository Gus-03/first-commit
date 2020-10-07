$(".site-header__cart-toggle").click(function (e) {
  e.preventDefault();
  $("body").toggleClass(["js-drawer-open", "js-drawer-open-right"]);
})
$(".js-close-drawer").click(function () {
  $("body").removeClass(["js-drawer-open", "js-drawer-open-right"]);
})
$(".js-cartmask").click(function () {
  $("body").removeClass(["js-drawer-open", "js-drawer-open-right", "shifter-open"]);
})
$('.shifter-handle').click(function () {
  $("body").addClass("shifter-open");
})
window.onload = function () {
  var swidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth
  if (swidth < 980) {
    $("body").addClass("js-drawer-enabled");
  } else {
    $("body").removeClass("js-drawer-enabled");
  }
}
window.addEventListener("resize", function (e) {
  var swidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth
  if (swidth < 980) {
    $("body").addClass("js-drawer-enabled");
  } else {
    $("body").removeClass(["js-drawer-enabled", "shifter-open"]);
  }
})