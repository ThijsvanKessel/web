$(document).ready(function()
{
    $string = "";
    $Time = "";
    $Clicks = "";
    //click hide event
    $("#js-hide-paragraph").on("click", function(){
        $("p").hide();
    })

    //click show event
    $("#js-show-paragraph").on("click", function(){
        $("p").show();
    })

    //Css With Jquery
    $("#js-change-color").on("click", function(){
        $("p").css({'color': 'red', 
                    'font-size': '40px'});
    })

    //text method example
    $("#js-add-text").on("click", function(){
        $("p").text("Test");})
    

    //create an Alert with the following message
    //Yeah! Finished in (time) with (amount) clicks 
    $("#js-amount-click").on("click", function(){
        var getTime = $("#js-time").text();
        var getClicks = $("#js-clicks").text();
        alert("Yeah! Finished in " + getTime + " with " + getClicks + " clicks");})
});