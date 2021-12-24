$("#toggle-btn").click(function(){

    
    let x=$(".side-bar").hasClass("close")
    console.log(x);
    if (x==false)
    {
        $(".side-bar").addClass("close");
    }else
    {
        $(".side-bar").removeClass("close");
    }
    
})
$("button").click(function(){
    $(this).closest("li")
    .find("img")
    .clone()
    .addClass("zoom")
    .appendTo("body");
    setTimeout(function(){
        $(".zoom").remove();

    },1000);

})