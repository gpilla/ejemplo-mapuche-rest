# Ejemplo de como consumir REST desde SIU-Mapuche

Esto es un ejemplo, un mal ejemplo. No lo usen en producci�n ni parecido.

Espero que les sea util.

## Instalaci�n

### Configuraci�n Mapcuhe

Editar el archivo:

```
{ruta_al_mapuche}/instalacion/i__produccion/p__mapuche/rest/servidor_usuarios.ini
```

Y poner usuario y clave para para la API (son diferentes que el de la aplicaci�n)

Abrir el archivo

```
{ruta_al_mapuche}/instalacion/i__produccion/p__mapuche/rest/servidor.ini
```

Y descomentar la linea donde dice *autenticacion = digest*

### Instalaci�n ejemplo

El ejemplo necesita la libreria Guzzle, y para eso usamos Composer. Si no lo tenemos instalado hacemos lo siguiente:

``` bash
# Install Composer
curl -sS https://getcomposer.org/installer | php
```

Luego bajamos las dependencias del ejemplo:

``` bash
composer.phar install
```

Configuramos el archivo *index.php* cambiando los parametros de conexi�n y los datos de ejemplo

## Pruebas

Arrancar el servidor web de prueba (funciona con cualquier server, esto es para pruebas).

``` bash
php -S localhost:8080
```
