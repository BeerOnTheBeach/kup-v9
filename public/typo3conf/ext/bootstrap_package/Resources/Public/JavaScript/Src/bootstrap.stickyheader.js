var stickyheader = document.getElementsByClassName("navbar-fixed-top");
function animateHeader() {
	150<window.scrollY ? stickyheader[0].classList.add("navbar-transition") : stickyheader[0].classList.remove("navbar-transition");
}
['scroll', 'resize', 'DOMContentLoaded'].forEach(function(e) {
  window.addEventListener(e, animateHeader);
});
