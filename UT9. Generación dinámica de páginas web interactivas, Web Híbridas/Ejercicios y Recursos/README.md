# UT9
- Realizar un formulario donde la validación se realice íntegramente en el lado del servidor y otro formulario donde la validación se realice en el cliente, comparando ambos métodos.  
  El nombre de usuario no puede ser un campo vacío.
  La contraseña no es vacía y deben ser iguales.
  El email es válido de la forma nombre@dominio.xxx
 
- Similar al formulario anterior, pero combina ambas técnicas suponiendo que el nombre del usuario y el email no pueden estar repetidos en el servidor. 
- Aplicando el mismo criterio que el anterior, utiliza AJAX para validar el nombre y el email asegurando que no estén repetidos.
-A partir del servicio SOAP de catastro de municipios (provincias y municipios), realiza un formulario utilizando una lista desplegable en el que se muestren previamente las provincias (las provincias las deberás obtener del servicio SOAP), posteriormente una vez que el usuario haya seleccionado una provincia, deberás cargar los municipios de dicha provincia. Los municipios los deberás obtener realizando una nueva llamada por SOAP. El formulario original no deberá recargarse sino actualizar los campos seleccionados. 
-Realiza un formulario de autocompletar para los municipios de España, los municipios les tendrás en una BD. No deberás mostrar ninguna sugerencia si no se han introducido al menos 3 caracteres, el número de municipios a mostrar será máximo 10, en función de su población. 
