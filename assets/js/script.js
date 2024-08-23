// начало код срабатывания бургер меню на чистом javascript
var burgerCtr = document.querySelector("#burger-menu");
var menuCtr = document.querySelector("#mobile-menu");
burgerCtr.addEventListener("click", function () {
  this.classList.toggle("active");
  menuCtr.classList.toggle("show_mobile_menu");
});
// конец бургера
$(document).ready(function () {
  //плавный скролл
  var $page = $("html, body");
  $('a[href*="#"]').click(function () {
    $page.animate(
      {
        scrollTop: $($.attr(this, "href")).offset().top,
      },
      400
    );
    return false;
  });
  //
  //закрытие меню при клике
  $("#mobile-menu ul a").click(function () {
    $("#mobile-menu").removeClass("show_mobile_menu");
    $("#burger-menu").removeClass("active");
  });
  //
});
