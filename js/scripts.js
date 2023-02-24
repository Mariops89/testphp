$(function () {

    $('input:checkbox').on('change', function () {
        if ($(this).is(':checked')) {
            let name = $(this).attr('name');
            let id = $(this).attr('id')
            $(`input[name="${name}"]:not(#${id}):checked`).prop('checked', false);
        }
    });
});