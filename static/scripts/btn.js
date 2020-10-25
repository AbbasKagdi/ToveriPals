jQuery(document).ready(function($) {
    $(".btnc").click(function(){
        $(this).addClass("btn-dark");
        $(this).removeClass("btn-primary");
    });
});