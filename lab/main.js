$(".abas nav a").click(function() {
    $(".active").removeClass("active")
    $(this).addClass("active")
    var aba = $(this).data("aba")
    $("#aba" + aba).addClass("active")
})