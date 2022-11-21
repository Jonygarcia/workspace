<!-- 001server.php: igual que el ejemplo visto en los apuntes, muestra los valores de 
$_SERVER al ejecutar un script en tu ordenador.
Crea una página (001enlace.html) que tenga un enlace a 001server.php y comprueba 
el valor de HTTP_REFERER. -->
<?php
//* Script
echo $_SERVER["PHP_SELF"] . "<br>";
echo $_SERVER["SERVER_SOFTWARE"] . "<br>";
echo $_SERVER["SERVER_NAME"] . "<br>";
echo $_SERVER["REQUEST_METHOD"] . "<br>";
echo $_SERVER["REQUEST_URI"] . "<br>";
echo $_SERVER["QUERY_STRING"] . "<br>";

echo $_SERVER["HTTP_USER_AGENT"] . "<br>";

//? Prueba a pasarle parámetros por GET (y a no pasarle ninguno).
/* Al recibir parámetros por GET podemos comprobar que cambian los valores de: 
REQUEST_URI -> ya que al enviar la clave valor por la url, la ruta cambia.
QUERY_STRING -> nos muestra la clave y valor del parámetro recibido por GET.*/
$year = $_GET["year"];

//? Prepara un formulario (001post.html) que haga un envío por POST y compruébalo de nuevo.
/* Al recibir los valores vía POST sólo cambia el valor de REQUEST_METHOD, la URL queda
como cuando no recibía nada, y QUERY_STRING está vacío.*/
$name = $_POST["name"];
$lastname = $_POST["lastname"];

//? Comprobar el valor de HTTP_REFERER.
// HTTP_REFERER muestra la ruta 
echo "<br>" . $_SERVER["HTTP_REFERER"];