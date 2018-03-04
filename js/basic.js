var topBar = $("nav#gnb").offset();

$(window).scroll(function(){
        
    var docScrollY = $(document).scrollTop()
    var barThis = $("nav#gnb")


    if( docScrollY > topBar.top ) {
        barThis.addClass("top_bar_fix");

    }else{
        barThis.removeClass("top_bar_fix");

    }

});