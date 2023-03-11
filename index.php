<!DOCTYPE html>
<html>
  <head>
    <title>Grafica De OPEP</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel = "stylesheet" href = "css/estilos.css" />
  </head>
  <body> 
    <header>
    <h1> El aumento del precio del petróleo en las ultimas dos decadas </h1>
    </header>
    <main>
    <section>
        <p>  Los precios del petróleo crudo aumentaron marcadamente en el tercer trimestre de 2021 y 
            continuaron subiendo en octubre, impulsados por la mayor demanda , las interrupciones en el
            suministro relacionadas con fenómenos meteorológicos y la restricción de la producción por parte
            de la OPEP y sus asociados (OPEP+). Los precios del petróleo también se han visto respaldados por
            el alza de los precios del gas natural, lo que aumentó la demanda de petróleo para fines de calefacción
            y generación de electricidad. Los precios del petróleo crudo alcanzaron un precio de 
            117 por barril en 2022, antes de descender a USD 81 por barril a finales de 2022 a medida que se recupero la
            producción mundial. Los precios del petróleo crudo aumentaron marcadamente en el tercer trimestre
            de 2021 y continuaron subiendo en octubre, impulsados por la mayor demanda , las interrupciones
            en el suministro relacionadas con fenómenos meteorológicos y la restricción de la producción por
            parte de la OPEP y sus asociados (OPEP+).</p>
            <img src="img/barril.jpg" width="650" height="400"/>
        <p> El precio del petróleo a tenido altos precios por barril y muy bajos precios por diversos factores 
            como las especulaciones de las grandes empresas y medios de comunicacion mencionando que se acabara 
            el uso de energias fosiles como lo es el petroleo por el auge de los vehiculos electricos y energias 
            renovables pero todo esto solo son especulaciones ya que la dependencia a energias fosiles no a disminuido 
            hasta a aumentado en ciertos sectores como lo el combustible y el uso energetico como calefaccion e iluminacion.
            <br>
            <img src="img/grafica.jpg" width="650" height="400"/>
            <br>
            <br>
        </p>
        <h3>Grafica del precio del petroleo por barril desde 26 de febrero del presente año hasta Enero 2003 Divisa en dolares</h3>
        <canvas id="myChart"></canvas>
        <script src="grafica.js"></script>
    </section>
    <aside>
        <a href="#myChart">Ver Grafica</a>
        <table>
            <caption> El precio del petroleo por barril crudo la ultima semana divisa en dolares </caption>
             <tr>
                <th>Fecha</th>
                <th>Precio</th>
            </tr>
            <?php
            include('tabla.php');
            ?>
        </table>
    </aside>
    <section>
        <p>
            La grafica muestra como el precio del petróleo no tiene un costo por barril promedio ya que este 
            tiene a subir o bajar de precio por factores como expeculaciones o nuevos yacimientos de petroleo o 
            la baja demanda del mismo en cierto epoca y la tambien se ve afectado por factores como la escasa exportacion de 
            otros tipos de energias como el gas natural y carbón y esto debido a sanciones impuestas por Estados Unidos 
            a rusia por la guerra con ucrania.
        </p>
    </section>
    </main>
    <div class="noticia">
            <h4>Petróleo Texas abre con una caída del 0.44 % y se vende hasta 76.1 dólares por barril</h4>
            <img src="img/petroleo.jpg" width="270" height="160"/>
            La misma tendencia se registra hoy en el caso del barril de Brent, que a esta hora pierde un 0.34 % y se sitúa en 83.13 dólares.
            Hoy, los datos que posiblemente más afecten a estos movimientos son los llegados desde China,
           que apuntan a una recuperación del consumo en general y por ende a una mayor demanda del petróleo.
    </div>
  </body>
</html>