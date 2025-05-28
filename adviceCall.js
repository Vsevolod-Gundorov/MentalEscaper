$(document).ready(function() {
    $("#listLink").click(function( event ){
           event.preventDefault();
           $(".call").fadeToggle("slow");
     });

    $(".advice").submit(function(event){
        event.preventDefault();
        var action = $(this).attr('data-action');

        $("#listTarget").load("ajax/" + action);

        $(".call").fadeToggle("slow");
    });

    $(".close").click(function(){
        $(".call").fadeToggle("slow");
    });

    $(document).keyup(function(e) {
        if(e.keyCode == 27 && $(".call").css("display") != "none" ) {
            event.preventDefault();
            $(".call").fadeToggle("slow");
        }
    });
});
