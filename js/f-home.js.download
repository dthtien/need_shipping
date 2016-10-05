$(document).ready(function () {

    $('.s5h-menuicon').click(function () {
        $('.s5h-menu').toggleClass('s5h-mnshow');
    });

    wow = new WOW({
        animateClass: 'animated',
        offset: 60
    });
    wow.init();

    var swiper1 = new Swiper('.s5h-slide-shop', {
        slidesPerView: 1,
        spaceBetween: 5,
        paginationClickable: true,
        nextButton: '.s5h-slide-shop .swiper-button-next',
        prevButton: '.s5h-slide-shop .swiper-button-prev',
        preventClicks: false,
        preventClicksPropagation: true
    });

    var swiper2 = new Swiper('.s5h-slide-ship', {
        slidesPerView: 1,
        spaceBetween: 5,
        paginationClickable: true,
        nextButton: '.s5h-slide-ship .swiper-button-next',
        prevButton: '.s5h-slide-ship .swiper-button-prev',
        preventClicks: false,
        preventClicksPropagation: true
    });

    $(document).scroll(function () {

        if ($(this).scrollTop() > 100) {
            $('.s5h-header').addClass('mini-header');
        } else {
            $('.s5h-header').removeClass('mini-header');
        }

    });

    $('.link-contact').click(function (e) {
        e.preventDefault();

        $("html, body").animate({ scrollTop: $('.s5h-footer').offset().top }, 500);
    });

    $('.link-guide').click(function (e) {
        e.preventDefault();

        $("html, body").animate({ scrollTop: $('.s5h-slide').offset().top }, 500);
    });

    $("#contact").validate({
        rules: {
            name: {
                required: true
            },
            phone: {
                required: true,
                minlength: 9,
                number: true
            }
        },
        messages: {
            name: 'Bạn vui lòng nhập tên',
            phone: 'Bạn vui lòng nhập số điện thoại'
        },
        submitHandler: function () {

            if ($('#contact .s5h-ft-btn').hasClass('posting')) {
                return;
            }

            $('#contact .s5h-ft-btn').addClass('posting').text('đang gửi thông tin...');

            $.post('/ajax/Home/AddContact', {
                name: $('#contact input[name="name"]').val(),
                phone: $('#contact input[name="phone"]').val(),
                email: $('#contact input[name="email"]').val(),
                content: $('#contact textarea[name="content"]').val()
            }, function (res) {
                $('#contact .s5h-ft-btn').removeClass('posting').text('Gửi');
                if(res.error){
                    toastr.warning(res.message);
                } else {
                    toastr.success(res.message);
                }
            });

            return false;
        }
    });

});