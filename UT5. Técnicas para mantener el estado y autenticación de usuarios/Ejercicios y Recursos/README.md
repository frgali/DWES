# UT5
## Cookies
1.	Realiza una aplicación que almacene el número de galletas que ha comido el monstruo. Dispones de 2 botones uno para incrementar el número de galletas que ha comido y otro para borrar la cookie. Importante borrar y no poner a 0. 
2.	Realizar un formulario que permita establecer preferencias de usuario por cookies, como idioma, zona horaria y nombre. 
Si la cookie está establecida se mostrará el nombre del usuario
3.	Realizar un formulario que pida números al usuario hasta que se introduzca el valor 0, posteriormente se mostrará el valor máximo, el mínimo y la media. Con cookies.
## Sesiones
4.	Realizar un formulario que pida números al usuario hasta que se introduzca el valor 0, posteriormente se mostrará el valor máximo, el mínimo y la media. Con sesiones.
5.	Crea 3 páginas, login, segura y logout. 
La página de login será un formulario donde el usuario introducirá su nombre y contraseña, si las credenciales no son correctas se mostrará el formulario. Si es correcta se redireccionará a la página segura. Las credenciales puedes guardarlas en un array en el código. 
La pagina segura sólo podrá entrar si el usuario está registrado y mostrará su nombre, almacenado en una cookie. 
La página de logout borra la cookie y sesión y vuelve a la página de login.
6.	Realizar un programa que escoja al azar 5 palabras en inglés de un minidiccionario. El programa pedirá que el usuario teclee la traducción al español de cada una de las palabras y comprobará si son correctas. Al final, el programa deberá mostrar cuántas respuestas son válidas y cuántas erróneas. La aplicación debe tener una opción para introducir los pares de palabras (inglés - español) que se deben guardar en cookies; de esta forma, si de vez en cuando se dan de alta nuevas palabras, se puede llegar a contar con un número considerable de entradas en el minidiccionario.
## Mecanismos de seguridad
7.	Habilita el listado de ficheros en la URL http://localhost/ut5/ficheros
8.	Crea una redirección permanente: cuando entremos en 
http://localhost/ut5/google salte a www.google.es.
9.	Pedir autentificación para entrar en la URL http://localhost/ut5/seguro (define un fichero .htpasswd)

## XDegub
10.	Investiga la herramienta xdebug, indica qué versión de PHP tenemos instalada y cuál es la versión de xdebug recomendada.
11.	Indica donde debes copiar el fichero de xdeug y los parametros que debes editar en el fichero php.ini
12.	Comprueba que Xdegub está habilitado correctamente, utiliza phpinfo()
13.	Crea un array y haz un var_dump() del array, ¿Cómo es la salida?
14.	Crea un script con un error en la sintaxis, por ejemplo, una línea sin cerrar. ¿Cómo se muestra la salida?
15.	Pon un punto de ruptura en un script donde se modifique el valor de una variable en diferentes puntos. Comprueba el valor de la variable utilizando la herramienta de Xdegub para detener la ejecución. 
## CSFR
Crea un formulario que intente prevenir un ataque por CSFR.
El formulario lo deberás generar con un campo oculto, donde deberás almacenar un valor aleatorio que coincida con el valor que almacenes en una sesión en tu servidor. 
Cuando el usuario envíe el formulario, comprobarás que el campo oculto coincida con el valor almacenado en tu sesión, si no es así volverás a mostrar un formulario nuevo. 
Realiza las siguientes pruebas.
1.	Borra la cookie de sesión una vez generado el formulario, ¿Qué ocurre?
2.	Utiliza el editor HTML del navegador y modifica el valor del campo oculto ¿Qué ocurre?
3.	Comprueba con tu compañero de clase, que se genera un código diferente, cuando accede a tu aplicación.
4.	Utiliza el código de tu compañero de clase en tu aplicación, ¿Qué ocurre?

