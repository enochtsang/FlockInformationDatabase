'use strict';

$(document).ready(function(){

    var sectionShown = 0;
    var formSections = ['#general', '#section-a', '#section-b', '#additional-comments'];
    var animationRunning = false;

    var APPROXIMATE_ROW_HEIGHT = 50;
    var minHeight = 600;

    formSections.forEach(function(formSection) {
        $(formSection).hide();
    });

    $(formSections[sectionShown]).show();
    $('.question-information-row').hide();

    updateContentHeight();

    function updateContentHeight(){
        if(formSections[sectionShown] == '#general'){
            $('.content').css('min-height', '750px').css('margin-bottom', '5px');
        } else if (formSections[sectionShown] == '#section-a'){
            $('.content').css('min-height', minHeight.toString() + 'px').css('margin-bottom', '5px');
        } else if (formSections[sectionShown] == '#section-b'){
            $('.content').css('min-height', '680px').css('margin-bottom', '5px');
        } else if (formSections[sectionShown] == '#additional-comments'){
            $('.content').css('min-height', '700px').css('margin-bottom', '5px');
        } else {
            alert("section out of bounds");
        }
    }

    function toggleQuestionSection(questionNumber,numRows){
        var qNum = questionNumber.toString();

        if(!$('input[name=question-' + qNum + ']'.checked)){
            return;
        }

        if($('input[name=question-' + qNum + ']:checked').val() == 'yes'){
            $('.question-' + qNum + '-information-row').show();
            minHeight += APPROXIMATE_ROW_HEIGHT * numRows;
        } else {
            $('.question-' + qNum + '-information-row').hide();
            minHeight -= APPROXIMATE_ROW_HEIGHT * numRows;
        }
        updateContentHeight();
    }

    $('#prev-arrow').mousedown(function(){
        if(sectionShown > 0 && !animationRunning){
            animationRunning = true;
            $(formSections[sectionShown]).hide('slide', { direction: 'right' }, 300);
            $(formSections[sectionShown - 1]).show('slide', { direction: 'left' }, 300, function(){
                animationRunning = false;
                sectionShown -= 1;
                updateContentHeight();
            });
        }
    });

    $('#next-arrow').mousedown(function(){
        if(sectionShown < formSections.length - 1 && !animationRunning){
            animationRunning = true;
            $(formSections[sectionShown]).hide('slide', { direction: 'left' }, 300);
            $(formSections[sectionShown + 1]).show('slide', { direction: 'right' }, 300, function(){
                animationRunning = false;
                sectionShown += 1;
                updateContentHeight();
            });
        }
    });

    $('input[name=question-1]').change(function(){
        toggleQuestionSection(1, 3);
    });

    $('input[name=question-2]').change(function(){
        toggleQuestionSection(2 ,4);
    });

    $('input[name=question-3]').change(function(){
        toggleQuestionSection(3 ,1);
    });

    $('input[name=question-4]').change(function(){
        toggleQuestionSection(4 ,7);
    });

    $('input[name=question-5]').change(function(){
        toggleQuestionSection(5 ,3);
    });

    $('input[name=question-6]').change(function(){
        toggleQuestionSection(6 ,3);
    });

    $('input[name=question-7]').change(function(){
        toggleQuestionSection(7 ,6);
    });
});
