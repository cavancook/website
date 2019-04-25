$(document).ready(function() {
    $(".exit-button").click(function(){
        var id = $(this).parent().attr("id");
        $('#'.concat(id)).fadeOut(1500);
    });
});