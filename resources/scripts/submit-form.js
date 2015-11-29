$(document).ready(function(){
    var section_shown = 0;
    $("#push").hide();
    var form_sections = ["#general", "#section-a", "#section-b", "#additional-comments"];
    var animation_running = false;

    for(var i = 0; i < form_sections.length; i++){
        $(form_sections[i]).hide()
    }
    $(form_sections[section_shown]).show();

    $("#prev-arrow").mousedown(function(){
        if(section_shown > 0 && !animation_running){
            animation_running = true;
            $(form_sections[section_shown]).hide("slide", { direction: "right" }, 300);
            $(form_sections[section_shown - 1]).show("slide", { direction: "left" }, 300, function(){
                animation_running = false;
            });
            section_shown -= 1;
            if(section_shown == 1){
                $(".content").css("min-height", "1750px");
            } else {
                $(".content").css("min-height", "0px");
            }
        }
    })
    $("#next-arrow").mousedown(function(){
        if(section_shown < form_sections.length - 1 && !animation_running){
            animation_running = true;
            $(form_sections[section_shown]).hide("slide", { direction: "left" }, 300);
            $(form_sections[section_shown + 1]).show("slide", { direction: "right" }, 300, function(){
                animation_running = false;
            });
            section_shown += 1
            if(section_shown == 1){
                $(".content").css("min-height", "1750px");
                $(".content").css("margin-bottom", "15px");                
            } else {
                $(".content").css("min-height", "0px");
                $(".content").css("margin-bottom", "0px");                
            }
        }
    });

    $(".question-information-row").hide();

    $('input[name=question-1]').click(function() {
        if($('input[name=question-1]:checked').val() == "yes"){
            $(".question-1-information-row").show();
        } else {
            $(".question-1-information-row").hide();            
        }
    });

    $('input[name=question-2]').click(function() {
        if($('input[name=question-2]:checked').val() == "yes"){
            $(".question-2-information-row").show();
        } else {
            $(".question-2-information-row").hide();            
        }
    });

    $('input[name=question-3]').click(function() {
        if($('input[name=question-3]:checked').val() == "yes"){
            $(".question-3-information-row").show();
        } else {
            $(".question-3-information-row").hide();            
        }
    });

    $('input[name=question-4]').click(function() {
        if($('input[name=question-4]:checked').val() == "yes"){
            $(".question-4-information-row").show();
        } else {
            $(".question-4-information-row").hide();            
        }
    });

    $('input[name=question-5]').click(function() {
        if($('input[name=question-5]:checked').val() == "yes"){
            $(".question-5-information-row").show();
        } else {
            $(".question-5-information-row").hide();            
        }
    });

    $('input[name=question-6]').click(function() {
        if($('input[name=question-6]:checked').val() == "yes"){
            $(".question-6-information-row").show();
        } else {
            $(".question-6-information-row").hide();            
        }
    });

    $('input[name=question-7]').click(function() {
        if($('input[name=question-7]:checked').val() == "yes"){
            $(".question-7-information-row").show();
        } else {
            $(".question-7-information-row").hide();            
        }
    });



});