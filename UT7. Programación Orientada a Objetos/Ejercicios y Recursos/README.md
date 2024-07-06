# UT7
## Atributos y serialización
Crea una clase que simule el comportamiento del monstruo de las galletas y que lleve un contador de las galletas comidas. 
Inicialmente el monstruo tendrá 0 galletas comidas (atributo privado) y tendrá un método come con un parámetro que sumará esas galletas a las que ha comido. A mayores tendrá otro método que devolverá el número de galletas comidas. 
Tendremos un formulario que nos pedirá un número de galletas que se comerá nuestro monstruo y mostrará el número de galletas que ha comido. 
Necesitaremos utilizar persistencia, de tal forma, que cada vez que se muestre el formulario consigamos recuperar la información de nuestro monstruo y se actualice el número de galletas que ha comido.
## Herencia
Se tratará de hacer mejoras sobre la clase de vehículos, para poder tener clases coches y bicicletas<br>
Clase abstracta vehículo<br>
Atributos<br>
- kmTotales (estático)
- vehículosCreados (estático)
- kmRecorridos

Almacenaran los km Totales de todos los vehículos, los vehículos que hemos creado y los kmRecorridos que ha recorrido un determinado vehículo.<br>
Métodos<br>
- Constructor que incrementa el número de vehículos creados e inicializa el vehículo con 0 km.
- Función recorre, que incrementa los kmRecorridos y los totales del vehículo
- Método que devuelva los kmTotales y los Vehiculos creados.
- toString que devuelva el nombre de la clase y los kmRecorridos

Clase coche extiende de vehículo<br>
Atributo<br>
- Matrícula
- Modo
- Método
- Constructor que heredará del padre, tendrá un parámetro de la matricula, y un parámetro opcional con el modo de conducción el modo de conducción (“confort”, “sport” o “eco”). Si no se indica nada el modo de conducción será confort
- toString heredera del padre, mostrará la matricula y el modo de conducción

Método que permita modificar el método de conducción a uno de los tres valores<br>
Clase bicicleta extiende de vehículo<br>
Atributo<br>
- Marchas

Método<br>
- Constructor que heredará del padre, tendrá un parámetro del número de marchas de la bicicleta será un número entre 1 y 27 
- toString heredera del padre, mostrará el número de marchas
- Método caballito que realice un caballito.

Las clases no podrán escribir por pantalla, es decir, no habrá ningún echo, print, etc. Las funciones devolverán valores, números, cadenas, … y será el programa principal el encargado de mostrar por pantalla.
## DAO
Crea una clase DAO que utilice una BD para gestionar la persistencia de los vehículos.
La clase DAOVehiculos permitirá:
- Consultar, a partir su id, devuelve un objeto vehículo. Si no existe no devuelve nada. 
- Consultar, sin parámetros, devuelve un array de vehículos con todos los vehículos de la BD,
- Crear, partir de un objeto vehículo, almacena la información en la BD, se comprobará que el vehículo no exista en la BD
- Borrar, a partir de un id, borra el vehículo de la BD. Devuelve true si se ha borrado o false si no se ha podido realizar
- Actualizar, a partir de un objeto vehículo, se actualiza la información del mismo.

## Patrón Singleton
Crea una clase Singleton para las conexiones contra la BD, de tal forma que sólo pueda crear un objeto conexión mysqli para conectarse a la BD.

## Patrón Observador
Un profesor recibe constantemente mensajes de los alumnos preguntando cuando estarán listas las notas. Implementa el patrón observador, utilizando las clases de PHP SplObserver y SplSubject, para que los alumnos puedan subscribirse al profesor y que éste los avise cuando las notas están ya disponibles. 

## Patrón MVC
Implementa una pequeña aplicación que permita gestionar los vehículos utilizando el MVC. Apóyate, de la clase DAO definida anteriormente. 

## Recurso 
El libro Design Patterns en PHP (Los 23 patrones de diseño: descripciones y soluciones ilustradas en UML2 y PHP (2ª edición), editorial INE Autores Laurent DEBRAUWER, Sébastien FERRANDEZ, Yannick EVAIN
Dispone de un fichero con implementaciones de los patrones en PHP (última visita 1 de julio de 2024)
[Ficheros Design Patterns en PHP](https://www.ediciones-eni.com/libro/design-patterns-en-php-los-23-patrones-de-diseno-descripciones-y-soluciones-ilustradas-en-uml2-y-php-2-edicion-9782409033438/descargar-los-ejemplos-del-libro-164-ko.zip)


