# UT2
##Funciones
1.	Realizar una función con 3 parámetros para realizar las operaciones suma, resta, multiplicación y división. El orden de los parámetros será primer operando, segundo operando y operación. 
2.	Realizar una función con 3 parámetros para realizar las operaciones suma, resta, multiplicación y división. El orden de los parámetros será primer operando, segundo operando y operación. El valor de retorno de la función será el primer operando. 
3.	Realiza una función que incremente el valor de una variable global y devuelva el valor incrementado.
echo "Incrementamos ".incrementar()."</br>"; // Muestra 1
echo "Incrementamos 2 veces ".incrementar()."</br>"; // Muestra 2
echo "Incrementamos 3 veces ".incrementar()."</br>"; // Muestra 3
4.	Crea una función que reciba como parámetro un número entero y devuelva Oro, Plata, bronce o null, si el número es 1, 2, 3 o ninguno de los anteriores respectivamente. Deberás comprobar que el número es un número positivo. .3
5.	Crear una función que indique si un número es primo o no.
6.	Realiza una función que se la pasen dos parámetros el precio de un producto y el IVA a aplicar, el primer parámetro será donde se modifique el valor, la función no devuelve ningún valor. 
Bucles
7.	Mostrar los números del 1 al 10 con sus cuadrados y cubos en formato de tabla.
8.	Mostrar los números primos entre dos números.
9.	Realizar un programa en el que a partir de un número dado muestre la siguiente pirámide
N=4
1
22
333
4444
10.	Realizar un programa en el que a partir de un número dado muestre la siguiente pirámide
N=4
1
12
123
1234
11.	Realizar un programa en PHP que invierta un número dado, el resultado deberá ser un número. Utiliza funciones de cadena. Utiliza divisiones entre las potencias de 10. 
##Arrays
12.	Definir un array numérico en el que la posición 1 corresponda al carácter UNICODE ⚀ (U+2680), la 2 al ⚁ (U+2681), … , la 6 al ⚅(U+2685). Recorre el array mostrando sus posiciones. 
13.	Realizar un dado en PHP, cada vez que se llame la página mostrará un número del 1 al 6, utiliza el array definido en el punto anterior. 
14.	Recorre la variable $_SERVER y muestra en formato tabla la clave y el valor de cada uno de los campos.
15.	Define un array asociativo, donde las claves sean las siglas de los módulos y el valor sea el nombre completo del módulo. DWES, DWEC, DWAS, DI, EIE. 
16.	Define un array asociativo, donde las claves sean las siglas de los módulos y el valor sea el nombre del profesor que lo imparte. 
17.	A partir del valor de una variable, DWES, DWEC, DWAS, DI, EIE, indica el nombre del módulo y el nombre del profesor que lo imparte. 
18.	Similar al anterior, pero la variable puede contener claves que no existan, deberás validar que la clave exista por ejemplo FOL, LMSGI, etc. 
19.	Muestra todos los módulos indicando el profesor que lo imparte
Módulo Desarrollo Web en entorno servidor profesor Fernando Galindo
Módulo Desarrollo Web en entorno Cliente profesor Ana González
…
20.	Realizar un programa en PHP que invierta un número dado, el resultado deberá ser un número. No puedes utilizar funciones de cadena. 
21.	Definir un array de superherores, en el que se indique el nombre del superhéroe, el nombre real y la ciudad en la que está.
a.	Sipderman -> Peter Parker -> Nueva York
b.	Batman -> Bruce Wayne -> Gotham
c.	…
22.	Mostrar la información de los superhéroes. Nombre, nombre real y ciudad.
 
##Práctica ficheros
Se trata de diseñar una aplicación Web en el que podamos reutilizar ciertas partes de código para poder gestionar los usuarios de una determinada aplicación.
Tendremos un fichero externo con diferentes funciones que nos permitirán realizar dicha gestión de los usuarios desde el script principal.
Los usuarios estarán almacenados en un fichero de texto de la forma: usuario, contraseña (asumamos que las contraseñas se guardan en texto plano)
El fichero externo al menos tendrá al menos las siguientes funciones:
•	Una función que compruebe si un usuario existe, devolverá true o false
•	Una función que añada un usuario y contraseña al fichero, devolverá true o false. Esta función puede hacer uso de la función anterior para evitar nombres repetidos. 
•	Una función que compruebe si la contraseña del usuario es correcta o no, los parámetros de esta función serán usuario y contraseña y devolverá true o false. 
•	Una función que devuelva el número de usuarios que hay registrados. 
•	BONUS, una función que permita actualizar la contraseña del usuario, tendrá como entrada dos parámetros: usuario y contraseña nueva, devolverá true si se hace el cambio y false en caso contrario. El usuario deberá estar creado previamente.  
•	BONUS, una función que elimine un usuario, tan sólo se introducirá el nombre del usuario.
