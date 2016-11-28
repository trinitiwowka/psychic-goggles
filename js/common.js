$(document).ready((function() {

    $("#scroll").click(function() {
        $("body").animate({scrollTop: $("#form").offset().top});
    });

    $(".popup-submit").on("click" , function () {
        $(".form-popup").hide();
    });

    //E-mail Ajax Send
    $("form").submit(function() { //Change
        var th = $(this);
        $.ajax({
            type: "POST",
            url: "mail.php", //Change
            data: th.serialize()
        }).done(function() {

            $(".form-popup").show();

            $('input[type="text"]').val('');

            setTimeout(function() {
                // Done Functions
                th.trigger("reset");
            }, 3000);
        });
        return false;
    });
//hide placeholder
    $(document).ready(function () {
        $('input,textarea').focus(function(){
            $(this).data('placeholder',$(this).attr('placeholder'))
            $(this).attr('placeholder','');
        });
        $('input,textarea').blur(function(){
            $(this).attr('placeholder',$(this).data('placeholder'));
        });
    });

}));