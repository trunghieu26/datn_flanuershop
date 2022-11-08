$(document).on("scroll", function(){
	if($(document).scrollTop() > 86){
		$(".navbar").removeClass('navbar-dark').addClass('navbar-light');
		$(".subnavbtn").css("color", "black");
		$(".dropdown-navbar").css("color", "black");
	}
	else{
		$(".navbar").removeClass('navbar-light').addClass('navbar-dark');
		$(".subnavbtn").css("color", "white");
		$(".dropdown-navbar").css("color", "white");
	}
});

$(".navbar-toggler").on("click",function(){
	$(".subnav").removeClass('navbar-dark').addClass('navbar-light');
})

$(".view_products").click(function() {
    $('html, body').animate({
        scrollTop: $(".card-img-top").offset().top
    }, 150);
});
