$(document).ready(function() {
    $("#affirmLink").click(function( event ){
           event.preventDefault();
           $(".overlay5").fadeToggle("slow");
     });

    $(".overlayLink5").click(function(event){
        event.preventDefault();
        var action = $(this).attr('data-action');

        $("#affirmTarget").load("ajax/" + action);

        $(".overlay5").fadeToggle("slow");
    });

    $(".close4").click(function(){
        $(".overlay6").fadeToggle("slow");
    });

    $(document).keyup(function(e) {
        if(e.keyCode == 27 && $(".overlay5").css("display") != "none" ) {
            event.preventDefault();
            $(".overlay5").fadeToggle("slow");
        }
    });
});
