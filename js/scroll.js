$(document).scroll(function(){
    var a=$("header").height();
    if($(window).width()>600){a+=23}
    if($(document).scrollTop()>=a){
        $("search").addClass("fixed");
        $("ul").addClass("fixed_ul")
    }
    else{
        $("search").removeClass("fixed");
        $("ul").removeClass("fixed_ul")
    }
});