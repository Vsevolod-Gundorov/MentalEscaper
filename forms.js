////////// Скрипт для окна входа

$(document).ready(function() {
    $("#loginLink").click(function( event ){
           event.preventDefault();
           $(".overlay").fadeToggle("fast");
     });

    $(".overlayLink").click(function(event){
        event.preventDefault();
        var action = $(this).attr('data-action');

        $("#loginTarget").load("ajax/" + action);

        $(".overlay").fadeToggle("fast");
    });

    $(".close").click(function(){
        $(".overlay").fadeToggle("fast");
    });

    $(document).keyup(function(e) {
        if(e.keyCode == 27 && $(".overlay").css("display") != "none" ) {
            event.preventDefault();
            $(".overlay").fadeToggle("fast");
        }
    });
});


//////// Скрипт для окна регистрации

$(document).ready(function() {
    $("#registerLink").click(function( event ){
           event.preventDefault();
           $(".overlay1").fadeToggle("fast");
     });

    $(".overlayLink1").click(function(event){
        event.preventDefault();
        var action = $(this).attr('data-action');

        $("#registerTarget").load("ajax/" + action);

        $(".overlay1").fadeToggle("fast");
    });

    $(".close1").click(function(){
        $(".overlay1").fadeToggle("fast");
    });

    $(document).keyup(function(e) {
        if(e.keyCode == 27 && $(".overlay1").css("display") != "none" ) {
            event.preventDefault();
            $(".overlay1").fadeToggle("fast");
        }
    });
});



////////// Серипт для окна входа админа

$(document).ready(function() {
    $("#loginAdmLink").click(function( event ){
           event.preventDefault();
           $(".overlay2").fadeToggle("fast");
     });

    $(".overlayLink2").click(function(event){
        event.preventDefault();
        var action = $(this).attr('data-action');

        $("#loginAdmTarget").load("ajax/" + action);

        $(".overlay2").fadeToggle("fast");
    });

    $(".close2").click(function(){
        $(".overlay2").fadeToggle("fast");
    });

    $(document).keyup(function(e) {
        if(e.keyCode == 27 && $(".overlay2").css("display") != "none" ) {
            event.preventDefault();
            $(".overlay2").fadeToggle("fast");
        }
    });
});
