## Práctica Final Carrito de la Compra
El proyecto tratará de crear una aplicación web que simule una página web de compras online sencilla, junto con una pasarela de pago.

Tendremos al menos las siguientes páginas. 
- Index.php Se trata de la página de inicio de sesión en la aplicación, sólo los usuarios autenticados pueden acceder al resto de las páginas. Puedes suponer que tienes los usuarios ya creados en una BD y no necesitan registrase, si haces el formulario de registro es positivo. 
- Compra.php Será la página por la que navega el usuario. Tendremos una tabla con los productos/artículos y sus precios. El usuario podrá añadir un artículo y se añadirá el carrito. 
El carrito será un <div> dentro de la misma página que se actualizará según se vayan añadiendo los artículos (AJAX), indicando “Artículos NN Total €€” donde NN será el número total de artículos y €€ el importe total de la compra. 
- Carrito.php Será la página que calcule el carrito por AJAX, recibirá un artículo y un número de unidades. Devolverá el número total de artículos de la cesta y el importe total. 
- Pedido.php, será la página a la que navegue el usuario para tramitar el pedido. Mostrará un listado de los artículos con sus unidades y el importe total. El usuario deberá introducir un número (su tarjeta). Una vez que el usuario de al botón enviar la aplicación mandará una petición por API Rest a la API de pago. Indicando el número de la tarjeta y el importe. Si la API de pago rechaza el pago no se tramitará el pedido y si lo acepta se creará el pedido, debiendo almacenar el número de transacción y la fecha/hora que se reciba de la API. 

Puedes suponer que tienes un botón de cerrar sesión en todas las páginas, (cerrar.php) que elimine la sesión del usuario y vuelva a la página de inicio (index.php)

API de Pago, será una aplicación API Rest que validará los pagos de los usuarios, recibirá un JSON con el número de la tarjeta y el importe. Si la tarjeta es válida y tiene saldo responderá con un número de la transacción (contador) y la fecha/hora con el pago. Sino responderá un JSON con “error – tarjeta invalida” o “error – saldos insuficientes”.

La aplicación de pago deberá almacenar el número de transacción, el importe de la misma y la fecha de la misma.

Para simplificar la API, puedes suponer que tienes una tabla donde cada fila sea el número de tarjeta y saldo disponible. Al recibir una petición de una tarjeta que exista en la BD se descontará ese importe de la tarjeta. 

Deberás pensar en el diseño de las tablas junto con sus relaciones para que den servicio a la página: datos de los usuarios, artículos y precios (stock es deseable), carrito de la compra (puedes pensar en una sesión, pero una tabla te permitirá recuperar la información), pedidos realizados por el usuario (pedido y líneas de pedido). 

La API de pago tendrá sus propias tablas tarjetas y transacciones. 

