# UT6
Crea una BD utilizando phpMyAdmin con tres tablas: alumnos, módulos y notas.<br>
![Esquema BD Alumnos](https://github.com/frgali/DWES/blob/main/UT6.%20Utilizaci%C3%B3n%20de%20t%C3%A9cnicas%20de%20acceso%20a%20datos/Ejercicios%20y%20Recursos/esquemaBD_alumnos.png)<br>
El nombre de la BD será BD_alumnos, el usuario alumnos_admin y la contraseña peterpan

__Las consultas SELECT que realices deberán ser no cualificadas no puedes utilizar clausula WHERE (select * from tabla o select col1, col2 from tabla)__
1.	Crea una aplicación web que permita visualizar en formato tabla los alumnos de la BD.
2.	Crea una aplicación web que permita visualizar en formato tabla los módulos.
3.	Crea una aplicación que permita ver en formato tabla los alumnos y los módulos.
4.	Crea un formulario que permita crear alumnos, deberás comprobar que el alumno no esté creado. 
5.	Modifica la aplicación 1, de mostrar los alumnos con dos botones adicionales en cada fila (Modificar y Borrar)  
Al pulsar el botón de modificar iras a una nueva página donde se mostrará un formulario con los datos del alumno ya cargados. Si pulsas sobre borrar si borra el alumno. 
Sobre el nuevo formulario, al pulsar sobre el botón actualizar se modificarán los valores del alumno, si pulsas sobre volver si mostrará la tabla con todos los alumnos. 
6.	Similar al ejercicio anterior, pero para modificar las notas de los alumnos.
## BONUS
7.	Crea una aplicación que muestre los alumnos en formato tabla mostrando 5 alumnos cada vez, debajo de la tabla tendrás dos enlaces o botones para poder navegar a la siguiente página o anterior. 
La página se indicará como un parámetro, de tal forma que si no hay parámetros o es un número invalido se mostrará los primeros alumnos.
http://localhost/ut6/mostrar_alumnos.php  alumnos del 1 al 5
http://localhost/ut6/mostrar_alumnos.php?pagina=2 alumnos del 6 al 10
http://localhost/ut6/mostrar_alumnos.php?pagina=3 alumnos del 11 al 15

