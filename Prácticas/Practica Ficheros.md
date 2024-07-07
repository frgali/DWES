Práctica ficheros
Se trata de diseñar una aplicación Web en el que podamos reutilizar ciertas partes de código para poder gestionar los usuarios de una determinada aplicación.
Tendremos un fichero externo con diferentes funciones que nos permitirán realizar dicha gestión de los usuarios desde el script principal.
Los usuarios estarán almacenados en un fichero de texto de la forma: usuario, contraseña (asumamos que las contraseñas se guardan en texto plano)
El fichero externo al menos tendrá al menos las siguientes funciones:
- Una función que compruebe si un usuario existe, devolverá true o false
- Una función que añada un usuario y contraseña al fichero, devolverá true o false. Esta función puede hacer uso de la función anterior para evitar nombres repetidos. 
- Una función que compruebe si la contraseña del usuario es correcta o no, los parámetros de esta función serán usuario y contraseña y devolverá true o false. 
- Una función que devuelva el número de usuarios que hay registrados. 
- **BONUS**, una función que permita actualizar la contraseña del usuario, tendrá como entrada dos parámetros: usuario y contraseña nueva, devolverá true si se hace el cambio y false en caso contrario. El usuario deberá estar creado previamente.  
- **BONUS**, una función que elimine un usuario, tan sólo se introducirá el nombre del usuario.
