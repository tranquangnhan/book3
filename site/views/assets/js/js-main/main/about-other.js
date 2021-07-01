var checkClick = false;
$('.btn-type').click(function (e) { 
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
                }, 600);
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
                }, 600);
            } else {
                studentRun();
            }
            
        }
        setTimeout(() => {
            checkClick = false; 
        }, 610);
    }
});

function studentRun() {
    var student = $('.student .show-down');

    if (student.hasClass('showtype')) { // show
        student.removeClass('showtype');
        student.addClass('hidetype');
        
        setTimeout(() => {
            student.removeClass('hidetype');
        }, 600);
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
        }, 600);
    } else {                
        $('.teacher .show-down').addClass('showtype');                   
    }
}