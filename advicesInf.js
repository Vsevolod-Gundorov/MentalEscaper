$(document).ready(function() {
    $("#advicesLink").click(function( event ){
           event.preventDefault();
           $(".overlay").fadeToggle("slow");
     });

    $(".changes1").click(function(event){
        event.preventDefault();
        var action = $(this).attr('data-action');

        $("#advicesTarget").load("ajax/" + action);

        $(".overlay").fadeToggle("slow");
    });

    $(".close").click(function(){
        $(".overlay").fadeToggle("slow");
    });

    $(document).keyup(function(e) {
        if(e.keyCode == 27 && $(".overlay").css("display") != "none" ) {
            event.preventDefault();
            $(".overlay").fadeToggle("slow");
        }
    });
});
