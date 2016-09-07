$(function() {
    $(".show-code > a").on("click", function(e) {
        e.preventDefault();
        $(this).parent().find(".code").slideDown(100);
        $(this).hide();
    });
    
    $("#header-contact-link").click(function(e) {
        e.preventDefault();
        $("#header-contact").toggleClass("contact-activated");
    });
});
