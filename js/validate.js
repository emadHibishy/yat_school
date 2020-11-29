$(function(){

    // vlidate signup
    $('#signup-tab-form ').on('submit',function(event){
        let validate = $('#signup-tab-form .validate');
        let siblings = $('#signup-tab-form .btn').siblings('input');
        validate.hide();
        validate.empty();
        for(sibling of siblings){
            let siblingTxt = $(sibling).attr('placeholder');
            if ($(sibling).val() == ""){
                event.preventDefault();
                validate.append('<p class="lead">please fill up the ' + siblingTxt)+' field<p>';
                validate.fadeIn(500);
            }
            if(sibling == siblings[6] && $('#password').val() != $('#re-password').val()){
                event.preventDefault();
                let errMsg = '<p class="lead">password confirm is not equal to password<p>';
                validate.append(errMsg);
                validate.fadeIn(500);
            }
        }
        
    });

    // validate student register
    $('#student-tab-form').on('submit',function(event){
        let validate = $('#student-tab-form .validate');
        let siblings = $('#student-tab-form .container').children('input,select').not(':last');
        validate.hide();
        validate.empty();
        if ($(siblings[0]).val() == 'Month'||
        $(siblings[1]).val() == 'Day'  ||
        $(siblings[2]).val() == 'Year' ||
        $(siblings[3]).val() == 'Stage'||
        $(siblings[4]).val() == 'Grade'||
        $(siblings[5]).val() == ''){
            event.preventDefault();
            validate.append('<p class="lead">please fill all the field<p>');
            validate.fadeIn(500);
        }
        if(($(siblings[3]).val() == 'middle school'||
        $(siblings[3]).val() == 'high school') && parseInt($(siblings[4]).val()) > 3){
            event.preventDefault();
            validate.append("<p class='lead'>the grade doesn't match with the stage<p>");
            validate.fadeIn(500);
        }
            
    });


    // validate teacher register
    $('#teacher-tab-form').on('submit',function(event){
        let validate = $('#teacher-tab-form .validate');
        let siblings = $('#teacher-tab-form .container').children('input,select').not(':last');
        validate.hide();
        validate.empty();
        if ($(siblings[0]).val() == 'Month'||
        $(siblings[1]).val() == 'Day'  ||
        $(siblings[2]).val() == 'Year' ||
        $(siblings[3]).val() == 'Stage'||
        $(siblings[4]).val() == ''||
        $(siblings[5]).val() == ''||
        $(siblings[6]).val() == ''||
        $(siblings[7]).val() == ''||
        $(siblings[8]).val() == 'Experience'||
        $(siblings[9]).val() == ''){
            event.preventDefault();
            validate.append('<p class="lead">please fill all the field<p>');
            validate.fadeIn(500);
        }  
    });

    // validate teacher update
    $('.popup form').on('submit',function(event){
        let validate = $('form .validate');
        validate.empty();
        if($('#teacher-experience').val()==0){
            event.preventDefault();
            validate.append('<p class="lead">please check experience field<p>');
            validate.fadeIn(500);
        }else if($('#teacher-stage').val()==0){
            event.preventDefault();
            validate.append('<p class="lead">please check stage field<p>');
            validate.fadeIn(500);
        }
    });

    // validate student update
    $('.popup form').on('submit',function(event){
        let validate = $('form .validate');
        validate.empty();
        if($('#stage').val()==0){
            event.preventDefault();
            validate.append('<p class="lead">please check stage field<p>');
            validate.fadeIn(500);
        }else if($('#grade').val()==0){
            event.preventDefault();
            validate.append('<p class="lead">please check grade field<p>');
            validate.fadeIn(500);
        } 
    });
});