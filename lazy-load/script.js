$(document).ready(function(){
    $(document).on("scroll", function(){
        var image = $(".lazy-img img");
        url = image.data("url");
        image.attr("src", url);
        if (isOnScreen ($(".lazy-img"))){
            $("article").css("background-color", "red");
        }
        // else{
        //     $("article").css("background-color","");
        // }
    });
});

function isOnScreen(element){
    var win = $(window);
    
    var elementTop = element.offset().top;
    var elementBottom = elementTop + element.height();

    var screenTop = win.scrollTop();
    var screenBottom = screenTop + win.height();
    

    return elementBottom > screenTop && elementTop < screenBottom;
}

// var loadImages;
// 
// $(document).ready(function(){
    // $(document).on("scroll", function(){
        // loadImages();
    // });
// 
    // (loadImages = function(){
        // $.each ($(".lazy.img"), function(){
            // var block = $(this);
            // var image = block.find("img");
// 
            // if(isOnScreen(block)){
                // var url = img.data("url");
                // if(image.attr("src")!=url){
                    // image.attr("src", url);
                // };
            // }
        // });
    // })();
    // $(".lazy-img").on('load',function(){
        // $(this).addClass("loaded");
    // });
// });