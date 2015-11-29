$(document).ready(function(){
    var sectionShown = 0;
    var formSections = ["#general", "#section-a", "#section-b", "#additional-comments"];
    var animationRunning = false;

    for(var i = 0; i < formSections.length; i++){
        $(formSections[i]).hide()
    }
    $(formSections[sectionShown]).show();

    $("#prev-arrow").mousedown(function(){
        if(sectionShown > 0 && !animationRunning){
            animationRunning = true;
            $(formSections[sectionShown]).hide("slide", { direction: "right" }, 300);
            $(formSections[sectionShown - 1]).show("slide", { direction: "left" }, 300, function(){
                animationRunning = false;
                sectionShown -= 1;
                if(formSections[sectionShown] == "#section-a"){
                    $(".content").css("min-height", min_height.toString() + "px");
                    $(".content").css("margin-bottom", "5px");                
                } else {
                    $(".content").css("min-height", "0px");
                    $(".content").css("margin-bottom", "0px");                
                }
            });
        }
    })

    $("#next-arrow").mousedown(function(){
        if(sectionShown < formSections.length - 1 && !animationRunning){
            animationRunning = true;
            $(formSections[sectionShown]).hide("slide", { direction: "left" }, 300);
            $(formSections[sectionShown + 1]).show("slide", { direction: "right" }, 300, function(){
                animationRunning = false;
                sectionShown += 1
                if(formSections[sectionShown] == "#section-a"){
                    $(".content").css("min-height", min_height.toString() + "px");
                    $(".content").css("margin-bottom", "5px");                
                } else {
                    $(".content").css("min-height", "0px");
                    $(".content").css("margin-bottom", "0px");                
                }
            });
        }
    });

    $(".question-information-row").hide();

    var APPROXIMATE_ROW_HEIGHT = 50;
    var min_height = 600;

    $('input[name=question-1]').change(function() {
        if(!this.checked){
            return;
        }
        if($('input[name=question-1]:checked').val() == "yes"){
            $(".question-1-information-row").show();
            min_height += APPROXIMATE_ROW_HEIGHT * 3;
        } else {
            $(".question-1-information-row").hide();            
            min_height -= APPROXIMATE_ROW_HEIGHT * 3;
        }
        $(".content").css("min-height", min_height.toString() + "px");
        $(".content").css("margin-bottom", "5px");                
    });

    $('input[name=question-2]').change(function() {
        if(!this.checked){
            return;
        }
        if($('input[name=question-2]:checked').val() == "yes"){
            $(".question-2-information-row").show();
            min_height += APPROXIMATE_ROW_HEIGHT * 4;
        } else {
            $(".question-2-information-row").hide();            
            min_height -= APPROXIMATE_ROW_HEIGHT * 4;
        }
        $(".content").css("min-height", min_height.toString() + "px");
        $(".content").css("margin-bottom", "5px");                
    });

    $('input[name=question-3]').change(function() {
        if(!this.checked){
            return;
        }
        if($('input[name=question-3]:checked').val() == "yes"){
            $(".question-3-information-row").show();
            min_height += APPROXIMATE_ROW_HEIGHT * 1;
        } else {
            $(".question-3-information-row").hide();            
            min_height -= APPROXIMATE_ROW_HEIGHT * 1;
        }
        $(".content").css("min-height", min_height.toString() + "px");
        $(".content").css("margin-bottom", "5px");                
    });

    $('input[name=question-4]').change(function() {
        if(!this.checked){
            return;
        }
        if($('input[name=question-4]:checked').val() == "yes"){
            $(".question-4-information-row").show();
            min_height += APPROXIMATE_ROW_HEIGHT * 7;
        } else {
            $(".question-4-information-row").hide();            
            min_height -= APPROXIMATE_ROW_HEIGHT * 7;
        }
        $(".content").css("min-height", min_height.toString() + "px");
        $(".content").css("margin-bottom", "5px");                
    });

    $('input[name=question-5]').change(function() {
        if(!this.checked){
            return;
        }
        if($('input[name=question-5]:checked').val() == "yes"){
            $(".question-5-information-row").show();
            min_height += APPROXIMATE_ROW_HEIGHT * 3;
        } else {
            $(".question-5-information-row").hide();            
            min_height -= APPROXIMATE_ROW_HEIGHT * 3;
        }
        $(".content").css("min-height", min_height.toString() + "px");
        $(".content").css("margin-bottom", "5px");                
    });

    $('input[name=question-6]').change(function() {
        if(!this.checked){
            return;
        }
        if($('input[name=question-6]:checked').val() == "yes"){
            $(".question-6-information-row").show();
            min_height += APPROXIMATE_ROW_HEIGHT * 3;
        } else {
            $(".question-6-information-row").hide();            
            min_height -= APPROXIMATE_ROW_HEIGHT * 3;
        }
        $(".content").css("min-height", min_height.toString() + "px");
        $(".content").css("margin-bottom", "5px");                
    });

    $('input[name=question-7]').change(function() {
        if(!this.checked){
            return;
        }
        if($('input[name=question-7]:checked').val() == "yes"){
            $(".question-7-information-row").show();
            min_height += APPROXIMATE_ROW_HEIGHT * 6;
        } else {
            $(".question-7-information-row").hide();            
            min_height -= APPROXIMATE_ROW_HEIGHT * 6;
        }
        $(".content").css("min-height", min_height.toString() + "px");
        $(".content").css("margin-bottom", "5px");                
    });
});