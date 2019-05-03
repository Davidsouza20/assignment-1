$(document).ready(function(){
    $("#btn").click(function() {
        alert("You Clicked!");
    })

    $("#chColor").click(function() {
        var color = $("#color").val();
        $("#one").css('background-color', color);
    })

    $("#hide").click(function() {
        $('#three').fadeToggle("slow", function() {
            var text = $("#btn-text").text() == "Show div #3" ? $('#btn-text').text("Hide div #3") : $('#btn-text').text("Show div #3");
        });      
    })
})
