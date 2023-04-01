$(function () {
    const myModal = new bootstrap.Modal('#modal-submit');
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

    let cont = 10;
    let elemento = $('.counter .cont1');
    let inicio = moment();
    let interval = setInterval(intervalo, 200);

    function intervalo() {
        let diff = moment().diff(inicio, 'seconds');
        let segundos = cont - diff;
        let html = moment().startOf('day').add(segundos, 'seconds').format('mm:ss');
        elemento.html(html);

        if (segundos <= 5) {
            elemento.css('color', 'red');
            if (segundos <= 0) {
                $('.btn-form').remove();
                clearInterval(interval); //stop
                enviar(segundos);
            }
        }
    }


    $('.botones-form').on('click', '#enviar', function() {
        $('.btn-form').remove();
        clearInterval(interval);
        enviar();
    })


    function enviar(segundos) {
        let datos =  $('#formulario').serializeArray()
        $.post("results.php", datos, function (response) {
            $('input:checkbox').prop('disabled', true);

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

            let color = response.nota < 5 ? 'red' : 'green';
            $('.nota').html(response.nota.toString().replace('.',',')).css('color', color);
            if (segundos <= 0) {
                myModal.show();

            }
        }, 'json').fail(function () {
            $('.botones-form').html(
                `<button type="reset" class="btn btn-danger mb-3 btn-form">Borrar respuestas</button>
                <button type="button" id="enviar" class="btn btn-success mb-3 btn-form">He acabado</button>`
            );
            interval = setInterval(intervalo, 200);
        })
    }

});

