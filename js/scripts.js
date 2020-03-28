// Clone the header contents into a fixed nav
// When the user scrolls down, show the nav, when they scroll up, hide the nav
// Only do this on desktop

if (document.querySelector('body').clientWidth > 1000) {

  var fixedHeader = document.createElement('div');
  fixedHeader.classList.add('c-header-fixed');
  document.querySelector('body').appendChild(fixedHeader);

  var nav = document.querySelector(".c-header");
  var fixedNav = document.querySelector(".c-header-fixed");

  var elementToBeCloned = document.querySelector('.c-header .c-nav-logo-holder');
  var clonedElement = elementToBeCloned.cloneNode(true);
  fixedNav.appendChild(clonedElement);

  window.onscroll = function (e) {

    var body = document.querySelector("body");
    var scrollPos = window.pageYOffset | document.body.scrollTop;

    if (scrollPos > 180) {
        nav.classList.add('fixed');
        fixedNav.classList.add('is-visible');
    } else {
        fixedNav.classList.remove('is-visible');
    }
  }

}
