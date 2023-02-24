$(function () {
    let contador = 0;

    $('input:checkbox').on('change', function () {
        if ($(this).is(':checked')) {
            let name = $(this).attr('name');
            let id = $(this).attr('id')
            if (!$(`input[name="${name}"]:not(#${id})`).is(':checked')) {
                contador++;
            }
            $(`input[name="${name}"]:not(#${id}):checked`).prop('checked', false);

        } else {
            contador--;
        }

        $('.contador span').html(contador);
    });
});