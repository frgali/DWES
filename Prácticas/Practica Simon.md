# Práctica Juego Simon 1ª Evaluación
La práctica trata de realizar una aplicación Web que simule el juego de Simon dice. Se trata de una aplicación con 4 botones de colores en los que la aplicación iluminará un color y el jugador tratará de recordar el color que se ha tocado, la siguiente se iluminarán 2 colores en orden y el jugador pulsará esos 2 botones en el orden correcto, la 3º vez 3 colores y así hasta que el usuario falle. 
Ejemplo de juego: https://kidmons.com/es/juego/simon-memorize/ 
Esta primera aplicación en lugar de realizar el juego con colores y botones, realizaremos la simulación con números del 1 al 4. De tal forma que la aplicación irá mostrando cadenas de una mayor longitud, empezando por 1 hasta que el jugador falle. El jugador introducirá la cadena en un formulario que comprobará si coincide con la que se ha mostrado anteriormente. 
Una propuesta de solución para esta aplicación son 2 páginas:
1.	Es la página de inicio, mostrará una cadena de una determinada longitud durante un tiempo y posteriormente redirecciona a la segunda página. 
Sería interesante tener un pequeño contador, en función de la longitud de la cadena se mostrase más o menos segundos la página. Por ejemplo, longitud 1-3segundos, longitud 2-4seg, longitud 3-5segundos.
Puedes obtener la longitud de la cadena con strlen().
La función sleep() detiene la ejecución del script durante los segundos indicados.
La función header() permite hacer redirecciones o bien refrescar la página
header("Refresh: $segundos; url=$pagina"); //Refresca la página a los segundos dados
header("Location: $pagina"); //Redirecciona a la página dada

2.	Es la página de validación, tendrá un formulario en el que el usuario podrá introducir la cadena y se comprobará si coincide con la mostrada en la página anterior o no. 
Si la entrada es correcta se volverá a la primera página y se mostrará una cadena de mayor longitud. Es importante que la cadena original no se modifique, sino que se añade un nuevo carácter al final. 
Si la entrada es incorrecta, se indicará el tamaño de la cadena que ha recordado pudiendo volver a empezar el juego. 
El formulario de texto, se valorará positivamente que se trate de un input de tipo texto y se valide la entrada del usuario para aceptar solo números y que no se permitan otros caracteres.
Puedes apoyarte en las funciones str_replace() y preg_replace(), esta función es bastante útil dado que permite trabajar con expresiones regulares. Por ejemplo '/\D/' y "/[^0-9]/"

Puedes definir otras páginas o bien modificar el contenido de las mostradas anteriormente, tan sólo son una pequeña guía. 
