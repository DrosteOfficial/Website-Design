$(".jeden").hover(function() {
    console.log("aa")
    if ($(this).css("background-color") === "rgba(0, 0, 0, 0)" || $(this).css("background-color") === "transparent" || $(this).css("background-color") === "none") {
        $(this).css("background-color", "white");
        $(this).css("opacity", "70%");
    } else {
        $(this).css("background-color", "transparent");
    }
}),function(){
        $(this).css("background-color", "transparent");
    
};;
