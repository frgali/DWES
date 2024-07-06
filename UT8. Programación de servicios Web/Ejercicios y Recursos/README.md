# UT8
## API Rest (JSON)
- Revisa la API https://api.chucknorris.io/ realiza llamadas con CURL vía de comando para obtener una nueva “cita” cada vez que la llames
- Construye un servicio web que sea capaz de manejar todas las peticiones.
Puedes suponer que tienes una aplicación conectada a una BD con la que a partir de un ID obtengas un texto asociado a ella. 
Las peticiones GET, POST mostrarán todos los identificadores y textos de la BD. A mayores podrán tener un parámetro (ID) de tal forma que si el parámetro está en la BD mostrará la tupla ID y Texto asociado. 
La petición PUT en el caso de que se pase un parámetro de la forma ID y Texto, se insertará dichos valores en la BD, en el caso de que el identificador exista se actualizará-
La petición DELETE tendrá un parámetro obligatorio (ID), se comprobará que el valor existe en la BD y borrará ese registro de la BD, devolviendo un texto (json) registro borrado, en el caso de que no exista el texto será el registro no existe. 
A mayores del servicio web, deberás documentar las pruebas realizadas del mismo utilizando comandos cURL.
- Realiza llamadas a la API de Aemet para obtener la previsión de un pueblo
https://opendata.aemet.es/centrodedescargas/ejemProgramas?
- La página FloatRates (https://www.floatrates.com/daily/eur.json) devuelve un fichero JSON con las conversiones de EURO a las diferentes divisas.
Crea una API en el que le pases 2 parámetros por GET (siglas divisa e importe) y devuelva la conversión de dicha divisa. 
## Documentos XML 
- A partir de un array con los que hemos trabajado (módulos de curso; ciudad, provincia y población) crea un documento XML. 
- A partir del documento XML dado, conviértelo en formato tabla 
## SOAP 
- Utiliza SOAP UI para documentar las operaciones del servicio de callejero
http://ovc.catastro.meh.es/ovcservweb/OVCSWLocalizacionRC/OVCCallejero.asmx 
Realiza llamadas desde SOAP UI a las operaciones ObtenerProvincias y ObtenerMunicipios esta operación requiere un parámetro. 
- Realiza un cliente SOAP en PHP que construya un formulario con una lista desplegable SELECT todas las provincias de España devueltas por el servicio. Al enviar el formulario y seleccionar una provincia se navegará a otra página donde se mostrarán todos los municipios de dicha provincia. 
- Se pide realizar un servicio Web SOAP en PHP con 2 operaciones:

buscarPais este servicio recibirá un país como entrada de la lista y devolverá la población.
anyadirCiudad este servicio recibirá como entrada una ciudad con todos sus datos (Nombre, Pais, Distrito, Poblacion). 
Tendrás una base de datos (ej. mundo) donde almacenarás las ciudades con todos sus datos, nombre, país, distrito, población. (si quieres almacenar más campos puedes hacerlo)
Valladolid, España, Castilla y León, 298866
Nueva York, EEUU, Nueva York, 8804109
Cancún, México,  Quintana Roo, 888797 
Para ello crearas los siguientes programas servidorPaises.php y clientePaises.php, puedes apoyarte de otras clases si lo deseas. 
servidorPaises.php contendrá la definición de cada uno de los servicios, así como las llamadas a la base de datos para realizar las consultas e insertar los resultados. 
clientePaises.php, que contendrá unos pequeños formularios para probar cada uno de los servicios Web definidos. 
Documenta el servidor SOAP para poder generar el WSDL con la herramienta WSDLDocument.php (https://code.google.com/archive/p/wsdldocument/) 
