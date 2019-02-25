/**
        $(function()
    {
        $(document).on('click', '.btn-add', function(e)
        {
            e.preventDefault();

            var controlForm = $('.controls form:first'),
                currentEntry = $(this).parents('.entry:first'),
                newEntry = $(currentEntry.clone()).appendTo(controlForm);

            newEntry.find('input').val('');
            controlForm.find('.entry:not(:last) .btn-add')
                .removeClass('btn-add').addClass('btn-remove')
                .removeClass('btn-success').addClass('btn-danger')
                .html('<span class="fas">-</span>');
        }).on('click', '.btn-remove', function(e)
        {
            $(this).parents('.entry:first').remove();

            e.preventDefault();
            return false;
        });
    });

**/

    $(document).ready(function(){
    $('.add_button1').click(function(){
        var kakoi=$(this).attr('fldnum');
        var insHTML = '<div class="input-group"> <select  name="fld_val1" class="form-control"><option >......</option><option value="caseNature1">Case Nature 1</option><option value="caseNature2">Case Nature 2</option><option value="caseNature3">Case Nature 3</option><option value="caseNature">Case Nature 4</option></select><div class="input-group-prepend"><button class="btn btn-danger btn-add add_button1 remove_button" fldnum="1" type="button"><span class="fas">x</span></button></div>';
        $("#fld1").append(insHTML);
    });

    $('.fld_wrap').on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parents(':eq(1)').remove();
    });
});

    $(document).ready(function(){
    $('.add_button2').click(function(){
        var kakoi=$(this).attr('fldnum');
        var insHTML = '<div class="input-group"> <select name="fld_val2"  class="form-control"><option >......</option><option value="agent1">Agent 1</option><option value="agent2">Agent 2</option><option value="agent3">Agent 3</option><option value="agent4">Agent 4</option></select><div class="input-group-prepend"><button class="btn btn-danger btn-add add_button2 remove_button" fldnum="2" type="button"><span class="fas">x</span></button></div>';
        $("#fld2").append(insHTML);
    });

    $('.fld_wrap').on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parents(':eq(1)').remove();
    });
});
    $(document).ready(function(){
    $('.add_button3').click(function(){
        var kakoi=$(this).attr('fldnum');
        var insHTML = '<div class="input-group"><input class="form-control" name="fld_val3" type="text" /><div class="input-group-prepend"><button class="btn btn-danger btn-add add_button3 remove_button" fldnum="3" type="button"><span class="fas">x</span></button></div></div>';
        $("#fld3").append(insHTML);
    });

    $('.fld_wrap').on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parents(':eq(1)').remove();
    });
});

$(document).ready(function(){
    $('.add_button4').click(function(){
        var kakoi=$(this).attr('fldnum');
        var insHTML = '<div class="input-group"><input class="form-control" name="fld_val4" type="text" /><div class="input-group-prepend"><button class="btn btn-danger btn-add add_button4 remove_button" fldnum="4" type="button"><span class="fas">x</span></button></div></div>';
        $("#fld4").append(insHTML);
    });

    $('.fld_wrap').on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parents(':eq(1)').remove();
    });
});
