$(document).ready(function() {
    /*header menu */
    $(".menu_block_mob_top").click(function() {
        $(".mobile_menu_container").slideToggle("fast");
    });
    /* Smooth Scrolling */
    $(function() {
        // $('a[href*=#]:not([href=#])').click(function() {
        $("a[href*='#']:not([href='#'])").click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top - 70
                    }, 1000);
                    return false;
                }
            }
        });
    });
    /* Carousel */
    $('#header_carousel').carousel({
        interval: 3000
    });

    /* form  */
    $('#form_body').submit(function(e) {
        e.preventDefault();
        pib = $('#pib').val();
        mobile = $('#mobile').val();
        email = $('#email').val();
        msg = $('#msg').val();
        $.ajax({
            method: "POST",
            url: "action/form.php?type=js",
            dataType: "json",
            beforeSend: function() {
                //    new_bar.beforesend_start();
            },
            data: {
                pib: pib,
                mobile: mobile,
                email: email,
                msg: msg
            }
        }).done(function(data) {
            if (data.status === 'success') {
                // location.href = 'thanks.php';
                $('#contact').hide();
                $('.thanks').show();
            } else {
                $('.pib_error').hide();
                $('.mobile_error').hide();
                pib_data = data.pib;
                mobile_data = data.mobile;
                console.log(mobile_data);
                if (pib_data.status == true) {
                    $('.pib_error').show();
                    $('.pib_error').html(pib_data.message);
                }
                if (mobile_data.status == true) {
                    $('.mobile_error').show();
                    $('.mobile_error').html(mobile_data.message);
                }
            }
        }).fail(function(data) {
            alert('Помилка передачі... ): ');
        });
    });
});
