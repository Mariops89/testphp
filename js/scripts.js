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

        // console.log("Hola");
        // $('.counter').setCountDownTimer({
        //     time: "00:01:00", // 1 minuto
        //     afterCountText: 'El tiempo se ha acabado',
        //     button:  $('input:checkbox'),
        // });

    let cont = 20;
    let elemento = $('.counter .cont1');
    let inicio = moment();
    let interval = setInterval(function () {
        let diff = moment().diff(inicio, 'seconds');
        let segundos = cont - diff;
        let html = moment().startOf('day').add(segundos, 'seconds').format('mm:ss');
        elemento.html(html);

        if (segundos <= 5) {
            elemento.css('color', 'red');
            if (segundos <= 0) {
                clearInterval(interval);
                $('input:checkbox').prop('disabled', true);
            }
        }
    }, 200);


});

