$(document).ready(function() {
    $("#advicesLink").click(function( event ){
           event.preventDefault();
           $(".overlay4").fadeToggle("slow");
     });

    $(".overlayLink4").click(function(event){
        event.preventDefault();
        var action = $(this).attr('data-action');

        $("#advicesTarget").load("ajax/" + action);

        $(".overlay4").fadeToggle("slow");
    });

    $(".close4").click(function(){
        $(".overlay4").fadeToggle("slow");
    });

    $(document).keyup(function(e) {
        if(e.keyCode == 27 && $(".overlay4").css("display") != "none" ) {
            event.preventDefault();
            $(".overlay4").fadeToggle("slow");
        }
    });
});
