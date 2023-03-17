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
                // $('input:checkbox').prop('disabled', true);
            }
        }
    }, 200);


    $('#enviar').on('click', function(ev) {
        let datos =  $('#formulario').serializeArray()
        let success = 0;
        let errors = 0;
        $.post("results.php", datos, function (response) {

            //pinto en todas las preguntas, la solución
            $.each(response.solutions, function (question, solution) {
                $('#' + question + solution).parent().addClass('correcta');
            });
            //pinto el error en aquellas preguntas que he fallado
            $.each(response.wrong, function (k, question) {
                $('#' + question).parent().addClass('fallada');
            });
            //pinto el acierto en aquellas preguntas que he acertado
            $.each(response.success, function (k, question) {
                $('#' + question).parent().addClass('acertada');
            });


            // if (response.nota < 5) {
            //     $('.nota').css('color', 'red');
            // } else {
            //     $('.nota').css('color', 'green');
            // }

            let color = response.nota < 5 ? 'red' : 'green';
            $('.nota').html(response.nota.toString().replace('.',',')).css('color', color);
        }, 'json')
    })

});

