var checkClick = false;
$('.btn-type').click(function(e) {
    e.preventDefault();
    if (checkClick == false) {
        checkClick = true;
        var type = $(this).attr('data-type');
        var student = $('.student .show-down');
        var techer = $('.teacher .show-down');
        if (type == 0) {
            if (student.hasClass('showtype')) {
                student.removeClass('showtype');
                student.addClass('hidetype');

                setTimeout(() => {
                    student.removeClass('hidetype');
                    teacherRun();
                }, 950);
            } else {
                teacherRun();
            }

        }

        if (type == 1) {
            if (techer.hasClass('showtype')) {
                techer.removeClass('showtype');
                techer.addClass('hidetype');

                setTimeout(() => {
                    techer.removeClass('hidetype');
                    studentRun();
                }, 950);
            } else {
                studentRun();
            }

        }
        setTimeout(() => {
            checkClick = false;
        }, 960);
    }
});

function studentRun() {
    var student = $('.student .show-down');

    if (student.hasClass('showtype')) { // show
        student.removeClass('showtype');
        student.addClass('hidetype');

        setTimeout(() => {
            student.removeClass('hidetype');
        }, 610);
    } else {
        $('.student .show-down').addClass('showtype');
    }
}

function teacherRun() {
    var techer = $('.teacher .show-down');

    if (techer.hasClass('showtype')) { // show
        techer.removeClass('showtype');
        techer.addClass('hidetype');

        setTimeout(() => {
            techer.removeClass('hidetype');
        }, 700);
    } else {
        $('.teacher .show-down').addClass('showtype');
    }
}


$('#carosel6').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    autoplayHoverPause: true,
    autoplay: true,
    autoplayTimeout: 3000,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});

$('#carosel7').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    autoplayHoverPause: true,
    autoplay: true,
    autoplayTimeout: 3000,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});
