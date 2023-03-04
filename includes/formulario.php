<div class="formulario">
    <div class="row">
        <div class="col">
            <form enctype="multipart/form-data" method="post" action="../results.php">
                <p>1. ¿En que lugar se ejecuta el código PHP?</p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p1" id="p1a" value="Cliente">
                    <label class="form-check-label" for="p1a">
                        Cliente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p1" id="p1b" value="Servidor">
                    <label class="form-check-label" for="p1b">
                        Servidor
                    </label>
                </div>


                <p class="mt-5">2. ¿Cuáles de estas son marcas para la inserción del código PHP en las páginas HTML?</p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p2" id="p2a" value="<code>&lt;?php</code> y <code>?></code>">
                    <label class="form-check-label" for="p2a">
                        <code>&lt;?php</code> y <code>?></code>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p2" id="p2b" value="<code>&lt;php>&lt;/php></code>">
                    <label class="form-check-label" for="p2b">
                        <code>&lt;php>&lt;/php></code>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p2" id="p2c" value="  <code>&lt;#</code> y <code>#></code>">
                    <label class="form-check-label" for="p2c">
                        <code>&lt;#</code> y <code>#></code>
                    </label>
                </div>
                <p class="mt-5">3. ¿En qué atributo de un formulario especificamos la página a la que se van a enviar los
                    datos del
                    mismo?</p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p3" id="p3a" value="Name">
                    <label class="form-check-label" for="p3a">
                        Name
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p3" id="p3b" value="File">
                    <label class="form-check-label" for="p3b">
                        File
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p3" id="p3c" value="Action">
                    <label class="form-check-label" for="p3c">
                        Action
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p3" id="p3d" value="description">
                    <label class="form-check-label" for="p3d">
                        description
                    </label>
                </div>
                <p class="mt-5"> 4. ¿Cuál de estas instrucciones está correctamente escrita en PHP?</p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p4" id="p4a" value="<code>if (a===0 print a</code>">
                    <label class="form-check-label" for="p4a">
                        <code>if (a===0 print a</code>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p4" id="p4b" value='<code>if (a===0) echo "hola mundo";</code>'>
                    <label class="form-check-label" for="p4b">
                        <code>if (a===0) echo "hola mundo";</code>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p4" id="p4c" value="<code>if (a===0) { echo ok }</code>">
                    <label class="form-check-label" for="p4c">
                        <code>if (a===0) { echo ok }</code>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p4" id="p4d" value="<code>if (a===0): print a;</code>">
                    <label class="form-check-label" for="p4d">
                        <code>if (a===0): print a;</code>
                    </label>
                </div>
                <p class="mt-5">5. ¿Cuál de estas instrucciones PHP imprimirá por pantalla correctamente el mensaje “Hola
                    Mundo” en
                    letra negrita?</p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p5" id="p5a" value="<code>print < strong >Hola Mundo < /strong>;</code>">
                    <label class="form-check-label" for="p5a">
                        <code>print < strong >Hola Mundo < /strong>;</code>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p5" id="p5b" value="<code>print (< strong>Hola Mundo< /strong>);</code>">
                    <label class="form-check-label" for="p5b">
                        <code>print (< strong>Hola Mundo< /strong>);</code>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p5" id="p5c" value='<code>print ("< strong>Hola Mundo < /strong>");</code>'>
                    <label class="form-check-label" for="p5c">
                        <code>print ("< strong>Hola Mundo < /strong>");</code>
                    </label>
                </div>
                <p class="mt-5">6. Dos de las formas de pasar los parámetros entre páginas PHP son:</p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p6" id="p6a" value="require e include">
                    <label class="form-check-label" for="p6a">
                        require e include
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p6" id="p6b" value="get y put">
                    <label class="form-check-label" for="p6b">
                        get y put
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p6" id="p6c" value="post y get">
                    <label class="form-check-label" for="p4c">
                        post y get
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p6" id="p6d" value="into e include">
                    <label class="form-check-label" for="p4d">
                        into e include
                    </label>
                </div>
                <p class="mt-5">7. ¿Cuál de estas instrucciones se utiliza para realizar una consulta a una base de datos
                    MySQL?</p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p7" id="p7a" value="mysql_query">
                    <label class="form-check-label" for="p7a">
                        mysql_query
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p7" id="p7b" value="mysql_access">
                    <label class="form-check-label" for="p7b">
                        mysql_access
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p7" id="p7c" value="mysql_db_access">
                    <label class="form-check-label" for="p7c">
                        mysql_db_access
                    </label>
                </div>
                <p class="mt-5">8. Un array es...</p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p8" id="p8a" value="Un conjunto de carácteres alfanuméricos">
                    <label class="form-check-label" for="p8a">
                        Un conjunto de carácteres alfanuméricos
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p8" id="p8b" value="Un sistema para convertir una variable de texto en un número">
                    <label class="form-check-label" for="p8b">
                        Un sistema para convertir una variable de texto en un número
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p8" id="p8c" value="Un conjunto de elementos">
                    <label class="form-check-label" for="p8c">
                        Un conjunto de elementos
                    </label>
                </div>
                <p class="mt-5"> 9. ¿Cómo se define una variable de tipo string en PHP?</p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p9" id="p9a" value="<code>char str;</code>">
                    <label class="form-check-label" for="p9a">
                        <code>char str;</code>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p9" id="p9b" value="<code>string str;</code>">
                    <label class="form-check-label" for="p9b">
                        <code>string str;</code>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p9" id="p9c" value="En PHP no se define el tipo de variables explícitamente">
                    <label class="form-check-label" for="p9c">
                        En PHP no se define el tipo de variables explícitamente
                    </label>
                </div>
                <p class="mt-5">10. Tenemos el siguiente código: <code>$a=”10”; $b=$a + 2;</code> ¿Cuál será el valor de $b?
                </p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p10" id="p10a" value="12">
                    <label class="form-check-label" for="p10a">
                        <code>"12"</code>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p10" id="p10b" value="12">
                    <label class="form-check-label" for="p10b">
                        <code>12</code>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p10" id="p10c" value="102">
                    <label class="form-check-label" for="p10c">
                        <code>"102"</code>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="p10" id="p10d" value="Ninguno(no se puede sumar un número a una cadena)">
                    <label class="form-check-label" for="p10d">
                        Ninguno(no se puede sumar un número a una cadena)
                    </label>
                </div>
                <div class="col-auto">
                    <button type="reset" class="btn btn-danger mb-3">Borrar respuestas</button>
                    <button type="submit" class="btn btn-success mb-3">He acabado</button>
                </div>
            </form>
        </div>
    </div>
</div>

