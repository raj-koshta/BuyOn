// -------------------------------
// DARK / LIGHT MODE TOGGLE
// -------------------------------
$(document).ready(function () {

    // Load theme from localStorage
    if (localStorage.getItem("theme") === "dark") {
        $("html").addClass("dark");
    }

    $("#theme-toggle").on("click", function () {
        $("html").toggleClass("dark");

        localStorage.setItem("theme",
            $("html").hasClass("dark") ? "dark" : "light"
        );
    });

    // SIDEBAR COLLAPSE (DESKTOP)
    $("#desktop-sidebar-toggle").on("click", function () {
        $("#sidebar").toggleClass("collapsed");
    });

    // MOBILE SIDEBAR
    $("#mobile-menu").on("click", function () {
        $("#sidebar").toggleClass("mobile-open");
    });

});