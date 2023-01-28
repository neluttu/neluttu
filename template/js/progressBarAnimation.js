$(window).scroll( function(){
    $('.skill').each( function(i){
        var bottom_of_object = $(this).offset().top + $(this).outerHeight();
        var bottom_of_window = $(window).scrollTop() + $(window).height();
        
        if( bottom_of_window > bottom_of_object ) {
            $(".skill .progress-bar span").each(function () {
                    $(this).animate({width: $(this).attr("data-progress") + "%",},2000);
                    $(this).text($(this).attr("data-progress") + "%");
                });                
        }
    }); 
});                