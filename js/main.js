$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").removeClass("invisible");
    $("#wrapper").toggleClass("toggled");
  });