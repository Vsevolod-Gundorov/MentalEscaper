$(document).ready(function() {
    $("#okLink").click(function( event ){
           event.preventDefault();
           $(".overlay1").fadeToggle("slow");
     });

    $(".overlayLink1").click(function(event){
        event.preventDefault();
        var action = $(this).attr('data-action');

        $("#okTarget").load("ajax/" + action);

        $(".overlay1").fadeToggle("slow");
    });

    $(".close4").click(function(){
        $(".overlay1").fadeToggle("slow");
    });

    $(document).keyup(function(e) {
        if(e.keyCode == 27 && $(".overlay1").css("display") != "none" ) {
            event.preventDefault();
            $(".overlay1").fadeToggle("slow");
        }
    });
});

$(document).ready(function() {
    $("#noLink").click(function( event ){
           event.preventDefault();
           $(".overlay2").fadeToggle("slow");
     });

    $(".overlayLink1").click(function(event){
        event.preventDefault();
        var action = $(this).attr('data-action');

        $("#noTarget").load("ajax/" + action);

        $(".overlay2").fadeToggle("slow");
    });

    $(".close4").click(function(){
        $(".overlay1").fadeToggle("slow");
    });

    $(document).keyup(function(e) {
        if(e.keyCode == 27 && $(".overlay2").css("display") != "none" ) {
            event.preventDefault();
            $(".overlay2").fadeToggle("slow");
        }
    });
});
