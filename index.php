<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<div class="container">

    <?php
    include "includes/cabecera.php";
    ?>
    <div class="row scroll">
        <div class="col">
            <div class="instruccion">
                <p>
                    Nombre y apellidos: _____________________________________________________________________________________________________
                    Fecha: ____ /____ / 20____
                </p>
                <p>
                    <b>
                        Este test consta de 10 preguntas. Cada pregunta sumará 1 punto si es correcta y restará 0,5 puntos si es incorrecta.
                        Las preguntas sin contestar se considerarán nulas y no restarán puntos.
                        La puntuación se obtiene sobre 10. Este test es cronometrado y no se podrá seguir una vez finalizado el tiempo.
                    </b>
                </p>
            </div>

            <?php
            include "includes/formulario.php";

            ?>
        </div>

    </div>
</div>

<?php include "includes/modal.php";?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
<script src="js/jquery-3.6.3.min.js"></script>
<script src="js/countdowntimer.js"></script>
<script src="js/moment-with-locales.min.js"></script>
<script src="js/scripts.js"></script>

</body>

</html>