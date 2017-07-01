$(document).ready(function () {
    $("#gotoAbout").click(function () {
        $("html,body").scrollTop($("#about").offset()-$(".navbar-header.navbar-fixed-top.mod").height());
    });
    $("#gotoProds").click(function () {
        $("html,body").animate({scrollTop: $("#prods").offset().top-$(".navbar-header.navbar-fixed-top.mod").height()}, 700);
    });
    $("#gotoConts").click(function () {
        $("html,body").animate({scrollTop: $("#contacts").offset().top-$(".navbar-header.navbar-fixed-top.mod").height()}, 800);
    });
});
