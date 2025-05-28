$(document).ready(function() {
    $("#lessonsLink").click(function( event ){
           event.preventDefault();
           $(".overlay6").fadeToggle("slow");
     });

    $(".overlayLink6").click(function(event){
        event.preventDefault();
        var action = $(this).attr('data-action');

        $("#lessonsTarget").load("ajax/" + action);

        $(".overlay6").fadeToggle("slow");
    });

    $(".close4").click(function(){
        $(".overlay6").fadeToggle("slow");
    });

    $(document).keyup(function(e) {
        if(e.keyCode == 27 && $(".overlay6").css("display") != "none" ) {
            event.preventDefault();
            $(".overlay6").fadeToggle("slow");
        }
    });
});
