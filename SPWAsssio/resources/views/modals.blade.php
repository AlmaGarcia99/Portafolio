<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Test de resistencía</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="">
   <div class="form-group">
    <label for="exampleFormControlInput1">Nombre</label>
    <input required type="text" class="form-control" id="nombre" required placeholder="Nombre completo">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Fecha de nacimiento</label>
    <input type="date" class="form-control" id="nacimiento" required placeholder="Edad">
  </div>         
  <div class="form-group">
    <label for="exampleFormControlInput1">Correo electronico</label>
    <input required type="email" class="form-control" id="correo" required placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Para esta actividad deberás subir y bajar 20 veces un escalón de tu casa de aprox 20 cms. a un ritmo constante. Se realizarán 3 series con descansos de 15 segundos entre ellas. Al terminar con la actividad indica, ¿Qué tan difícil fue realizar la actividad? *</label>
    <select class="form-control" id="1-1" required name="1-1">
      <option value="" selected disabled hidden>Selecciona una opción</option>
      <option value="5">Muy facil</option>
      <option value="4">Facil</option>
      <option value="3">Neutral</option>
      <option value="2">Dificil</option>
      <option value="1">Muy dificil</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Deberás caminar de manera vigorosa una distancia de 200 mts. (2 cuadras aprox) a un ritmo constante . Al terminar con la actividad indica, ¿Qué tan difícil fue realizar la actividad? *</label>
    <select  class="form-control" id="1-2" required name="1-2">
      <option value="" selected disabled hidden>Selecciona una opción</option>
      <option value="5">Muy facil</option>
      <option value="4">Facil</option>
      <option value="3">Neutral</option>
      <option value="2">Dificil</option>
      <option value="1">Muy dificil</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Para esta actividad deberás de realizar una marcha en tu lugar por 1 minuto. Esta actividad se repetirá en 3 ocasiones con un descanso de 20 segundos entre cada una. Al terminar con la actividad indica, ¿Qué tan difícil fue realizar la actividad? *</label>
    <select  class="form-control" id="1-3" required name="1-3">
      <option value="" selected disabled hidden>Selecciona una opción</option>
      <option value="5">Muy facil</option>
      <option value="4">Facil</option>
      <option value="3">Neutral</option>
      <option value="2">Dificil</option>
      <option value="1">Muy dificil</option>
    </select>
  </div>
 

<script type="text/javascript">
function ShowSelected()
{
/* Para obtener el valor */
var a = document.getElementById("1-1").value;
var b = document.getElementById("1-2").value;
var c = document.getElementById("1-3").value;


var total = parseInt(a)+parseInt(b)+parseInt(c);

 
 if (total < 7) 
    { 
        alert("Tu condición física es deficiente por lo que es indispensable que empieces a moverte para revertirlo y mejorar tu calidad de vida");
    } else if (total > 6 && total < 10 ) 
    {
        alert("Tienes una condición física muy baja siendo importante que lleves a cabo un programa de ejercicio que te permita mejorarla");
    } else if (total > 9 && total < 13 ) 
    {
        alert("Tienes buena tu condición física pero puedes mejorarla a través de ejercicios aeróbicos que permitan una mayor resistencia");
    } else if (total > 12 && total < 16 ) 
    {
        alert("Felicidades¡¡¡ Tienes una excelente condición física. Sigue manteniendo tu nivel de resistencia por medio de un ejercicio aeróbico");
    }

}
</script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <input type="submit" onclick="ShowSelected()" value="Ver resultados" class="btn btn-primary">
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Test de flexibilidad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
   <div class="form-group">
    <label for="exampleFormControlInput1">Nombre</label>
    <input type="text" class="form-control" id="nombre" required placeholder="Nombre completo">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Fecha de nacimiento</label>
    <input type="date" class="form-control" id="nacimiento" required placeholder="Edad">
  </div>         
  <div class="form-group">
    <label for="exampleFormControlInput1">Correo electronico</label>
    <input type="email" class="form-control" id="correo" required placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Para esta actividad deberás colocarte de pie con los pies ligeramente abiertos a la altura de los hombros. Con la espalda recta deberás bajar lo mas que puedas buscando tocar el suelo con las puntas de los dedos de las manos sin hacer moelleo y mantener esta posición durante 15 segundos. Se realizarán 3 series con descansos de 15 segundos entre ellas. Al terminar con la actividad indica ¿Qué tan difícil fue realizar la actividad? *</label>
    <select class="form-control" id="2-1" required name="2-1">
      <option value="" selected disabled hidden>Selecciona una opción</option>
      <option value="5">Muy facil</option>
      <option value="4">Facil</option>
      <option value="3">Neutral</option>
      <option value="2">Dificil</option>
      <option value="1">Muy dificil</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Para esta actividad deberás estar de pie con las piernas abiertas a la altura de los hombros y las manos entrelazadas por atrás del cuerpo. A continuación realizarás una flexión del tronco al frente y al mismo tiempo subirás tus brazos entrelazados por atrás tratando de que se mantengan en posición vertical durante 10 segundos. Esta actividad la repetirás 3 veces con descansos de 10 segundos entre ellas. Al terminar con la actividad indica, ¿Qué tan difícil fue realizar la actividad? *</label>
    <select class="form-control" id="2-2" required name="2-2">
      <option value="" selected disabled hidden>Selecciona una opción</option>
      <option value="5">Muy facil</option>
      <option value="4">Facil</option>
      <option value="3">Neutral</option>
      <option value="2">Dificil</option>
      <option value="1">Muy dificil</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Para esta actividad deberás de colocarte de pie con las piernas abiertas y las manos en la cintura. Flexionas el tronco y con la mano derecha baja e intenta tocar tu pie izquierdo y regresa a la posición original y después intenta tocar el pie derecho con la mano izquierda. Esta actividad repitela 5 veces de manera alternada con descansos de 10 segundos entre ellas. Al terminar con la actividad indique, ¿Qué tan difícil fue realizar la actividad? *</label>
    <select class="form-control" id="2-3" required name="2-3">
      <option value="" selected disabled hidden>Selecciona una opción</option>
      <option value="5">Muy facil</option>
      <option value="4">Facil</option>
      <option value="3">Neutral</option>
      <option value="2">Dificil</option>
      <option value="1">Muy dificil</option>
    </select>
  </div>
 


<script type="text/javascript">
function ShowSelected2()
{
/* Para obtener el valor */
var a = document.getElementById("2-1").value;
var b = document.getElementById("2-2").value;
var c = document.getElementById("2-3").value;


var total = parseInt(a)+parseInt(b)+parseInt(c);

 
 if (total < 7) 
    { 
        alert("Tienes mucha rigidez de tu cuerpo siendo muy fácil que puedas tener algún desgarre o luxación, por lo que a la brevedad deberías empezar a realizar ejercicios de flexibilidad");
    } else if (total > 6 && total < 10 ) 
    {
        alert("Tienes rigidez de tus articulaciones lo que se puede disminuir llevando a cabo de manera constante ejercicios de flexibilidad que ayuden a tu cuerpo a tener mejor movilidad");
    } else if (total > 9 && total < 13 ) 
    {
        alert("Tienes buena flexibilidad pero es bueno que involucres mas ejercicios de flexibilidad en tu rutina diaria para tener una mejor calidad de vida");
    } else if (total > 12 && total < 16 ) 
    {
        alert("Excelente¡¡¡ Tienes una gran flexibilidad que te permite hacer mas fácilmente todas tus actividades físicas. Sigue así para mantener una adecuada calidad de vida");
    }

}
</script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <input type="submit" onclick="ShowSelected2()" value="Ver resultados" class="btn btn-primary">
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Test de fuerza</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
   <div class="form-group">
    <label for="exampleFormControlInput1">Nombre</label>
    <input type="text"  class="form-control" id="nombre" required placeholder="Nombre completo">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Fecha de nacimiento</label>
    <input type="date" class="form-control" id="nacimiento" required placeholder="Edad">
  </div>         
  <div class="form-group">
    <label for="exampleFormControlInput1">Correo electronico</label>
    <input type="email" class="form-control" id="correo" required placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">En esta prueba deberás sostener una pelota de esponja con una mano y apretarla 10 veces, al terminar deberás realizar la misma actividad con la otra mano. Se repetirán 3 series con descansos de 15 segundos entre ellas. Al terminar con la actividad indica, ¿Qué tan difícil fue realizar la actividad? *</label>
    <select class="form-control" id="3-1" name="3-1">
     <option value="" selected disabled hidden>Selecciona una opción</option>
      <option value="5">Muy facil</option>
      <option value="4">Facil</option>
      <option value="3">Neutral</option>
      <option value="2">Dificil</option>
      <option value="1">Muy dificil</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Para esta actividad deberás sentarte manteniendo una posición erguida con las manos sobre las rodillas y sostener dos mancuernas de 500 gr. o dos botellas de agua de 500 ml. En esta posición deberás flexionar tus brazos subiendo los pesos a la altura de los hombros y bajarlas 15 veces. Se realizarán 3 series con descansos de 15 segundos entre ellas. Al terminar con la actividad indica, ¿Qué tan difícil fue realizar la actividad? *</label>
    <select class="form-control" id="3-2" name="3-2">
      <option value="" selected disabled hidden>Selecciona una opción</option>
      <option value="5">Muy facil</option>
      <option value="4">Facil</option>
      <option value="3">Neutral</option>
      <option value="2">Dificil</option>
      <option value="1">Muy dificil</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Para esta actividad deberás estar de pie con las piernas abiertas a la altura de los hombros y apoyarte con una mano de la pared y la otra colocarla en la cintura. Posteriormente realizarás 10 sentadillas. Se realizarán 3 series con descanso de 20 segundos entre ellas. Al terminar con la actividad indica, ¿Qué tan difícil fue realizar la actividad? *</label>
    <select class="form-control" id="3-3" name="3-3">
      <option value="" selected disabled hidden>Selecciona una opción</option>
      <option value="5">Muy facil</option>
      <option value="4">Facil</option>
      <option value="3">Neutral</option>
      <option value="2">Dificil</option>
      <option value="1">Muy dificil</option>
    </select>
  </div>
 

<script type="text/javascript">
function ShowSelected3()
{
/* Para obtener el valor */
var a = document.getElementById("3-1").value;
var b = document.getElementById("3-2").value;
var c = document.getElementById("3-3").value;


var total = parseInt(a)+parseInt(b)+parseInt(c);

 
 if (total < 7) 
    { 
        alert("Tienes muy poca fuerza muscular, lo que se traduce en la disminución de las funciones de locomoción, por lo que te recomiendo comenzar a realizar ejercicio de fuerza apoyadas por medio de un especialista en Cultura Física");
    } else if (total > 6 && total < 10 ) 
    {
        alert("Te falta mejorar tu nivel de fuerza muscular, por lo que te sugerimos empezar a realizar ejercicios de fuerza con la intención de mejorar tu capacidad física de fuerza apoyándote de un especialista en Cultura Física");
    } else if (total > 9 && total < 13 ) 
    {
        alert("Tienes buen nivel de fuerza en tus músculos, pero es conveniente que realices más ejercicios de fuerza en tu rutina diaria para tener una mejor función muscular");
    } else if (total > 12 && total < 16 ) 
    {
        alert("Te felicito¡¡¡ Tienes buen nivel de trabajo de tu fuerza muscular, lo que se traduce en un mejor desempeño de tus actividades locomotoras. Recuerda siempre apoyarte de un especialista en Cultura Física");
    }

}
</script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <input type="submit" onclick="ShowSelected3()" value="Ver resultados" class="btn btn-primary">
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Test de equilibrio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
   <div class="form-group">
    <label for="exampleFormControlInput1">Nombre</label>
    <input type="text" class="form-control" id="nombre" required placeholder="Nombre completo">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Fecha de nacimiento</label>
    <input type="date" class="form-control" id="nacimiento" required placeholder="Edad">
  </div>         
  <div class="form-group">
    <label for="exampleFormControlInput1">Correo electronico</label>
    <input type="email" class="form-control" id="correo" required placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Para realizar esta actividad estarás parado y con los pies abiertos a la altura de los hombros. Después entrelazaras los dedos de las manos y deberá de estirar los brazos por encima de la cabeza manteniendo esta posición durante 15 segundos. Harás 2 series con descansos de 15 segundos entre ellas. Al terminar con la actividad indica ¿Qué tan difícil fue realizar la actividad? *</label>
    <select class="form-control" required id="4-1" name="4-1">
     <option value="" selected disabled hidden>Selecciona una opción</option>
      <option value="5">Muy facil</option>
      <option value="4">Facil</option>
      <option value="3">Neutral</option>
      <option value="2">Dificil</option>
      <option value="1">Muy dificil</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Para esta actividad deberás estar de pie y avanzar 10 pasos apoyado en las puntas de los pies y regresar los mismos pasos ahora apoyado en los talones. Puedes apoyarte en una pared o con la ayuda de otra persona. Se realizarán 3 series con descansos de 10 segundos entre ellas. Al terminar con la actividad indica ¿Qué tan difícil fue realizar la actividad? *</label>
    <select class="form-control" required id="4-2" name="4-2">
      <option value="" selected disabled hidden>Selecciona una opción</option>
      <option value="5">Muy facil</option>
      <option value="4">Facil</option>
      <option value="3">Neutral</option>
      <option value="2">Dificil</option>
      <option value="1">Muy dificil</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Para esta actividad deberás de estar parado en una pierna y la otra elevarla con la rodilla flexionada durante 20 segundos tratando de mantener el equilibrio. Posteriormente harás lo mismo con el otro pie durante otros 20 segundos. Se realizarán 3 series con descansos de 10 segundos entre ellas. Al terminar con la actividad indica, ¿Qué tan difícil fue realizar la actividad? *</label>
    <select class="form-control" required id="4-3" name="4-3">
      <option value="" selected disabled hidden>Selecciona una opción</option>
      <option value="5">Muy facil</option>
      <option value="4">Facil</option>
      <option value="3">Neutral</option>
      <option value="2">Dificil</option>
      <option value="1">Muy dificil</option>
    </select>
  </div>
 

<script type="text/javascript">
function ShowSelected4()
{
/* Para obtener el valor */
var a = document.getElementById("4-1").value;
var b = document.getElementById("4-2").value;
var c = document.getElementById("4-3").value;


var total = parseInt(a)+parseInt(b)+parseInt(c);

 
 if (total < 7) 
    { 
        alert("Tienes mucho riesgo de posibles caídas debido a tus problemas de equilibrio, por lo que es indispensable que te acerques con un especialista para saber el origen del problema");
    } else if (total > 6 && total < 10 ) 
    {
        alert("Te cuesta trabajo mantener el equilibrio en posturas diferentes por lo que es aconsejable que, además de acercarte con el especialista, incluyas ejercicios de equilibrio que te ayuden a reforzar tu propiocepción en el espacio");
    } else if (total > 9 && total < 13 ) 
    {
        alert("Tienes buen equilibrio en general pero puedes mejorarla realizando de manera constante ejercicios de equilibrio que estimulen a los músculos estabilizadores en una posición dada");
    } else if (total > 12 && total < 16 ) 
    {
        alert("Felicidades¡¡¡ Tienes buen equilibrio de tu cuerpo en diversas posiciones lo que te permite llevar adecuadamente tus actividades diarias");
    }

}
</script>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <input type="submit" onclick="ShowSelected()" value="Ver resultados" class="btn btn-primary">
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="tienda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">TIENDA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>PRÓXIMAMENTE EN APERTURA</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>