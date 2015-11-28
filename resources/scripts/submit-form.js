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
        }
    });

});