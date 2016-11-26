$(document).ready((function() {

    // $("#scroll").click(function() {
    //     $("body").animate({scrollTop: $("#form-wrap").offset().top});
    // });

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



}));