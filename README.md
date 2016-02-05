# php-spreadsheet-api
Implementación de librerías para guardar datos en GoogleSpreadasheet

Tomado de: 
http://www.inkuba.com/blog/editar-spreadsheet-hojas-de-calculo-de-google-con-php/

Vamos a utilizar dos librarías:

– La librería de cliente de google api para php https://github.com/google/google-api-php-client

– Una librería que nos provee una interface a Google Spreadsheet API: https://github.com/asimlqt/php-google-spreadsheet-client

- See more at: http://www.inkuba.com/blog/editar-spreadsheet-hojas-de-calculo-de-google-con-php/#sthash.1bJhaRgS.dpuf
- 
Para instalar estas librerías vamos a utilizar Composer tal como lo recomienda cada una de ellas en su documentación. Composer es un manejador de dependencias para PHP y sirve para administrar librerías de terceros o propias en nuestros proyectos de PHP. Este tutorial excede el uso de Composer, pero hay mucha documentación en Internet que explica en detalle su funcionalidad, instalación y su uso. Es muy fácil de utilizar y muy útil.

Una vez instalado Composer en nuestro proyecto debemos editar el archivo composer.json para que instale las librerias requeridas, el json quedaría asi:

```json
{
    "name": "Php & SpreadSheet",
    "description": "Agregar fila al Spreadsheet con php.",
    "authors": [
    {
     "name": "Jose Luis",
     "email": "info@example.com"
    }
    ],
   "require": {
     "asimlqt/php-google-spreadsheet-client": "2.3.*",
      "google/apiclient": "1.0.*@beta"
   }
}
```

El resto de los pasos acá: http://www.inkuba.com/blog/editar-spreadsheet-hojas-de-calculo-de-google-con-php/
