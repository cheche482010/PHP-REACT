# PHP-REACT Sistema con Patrón Modelo Vista Componentes

Este proyecto es un sistema desarrollado en PHP con la implementación del patrón Modelo Vista Componentes (MVC) y utiliza React para la interfaz de usuario. La estructura de carpetas y archivos está diseñada para mantener un proyecto organizado y modular.

## Estructura de Carpetas y Archivos

El proyecto se organiza de la siguiente manera:

- **.gitattributes** y **.htaccess**: Archivos de configuración de Git y Apache, respectivamente.

- **Readme.md**: Este archivo que proporciona información sobre la estructura y configuración del proyecto.

- **assets**: Carpeta para recursos estáticos como CSS, imágenes y JavaScript.

- **composer.json** y **composer.lock**: Archivos de configuración de Composer, utilizado para la gestión de dependencias y el uso de namespaces en PHP.

- **index.php**: Punto de entrada principal de la aplicación PHP.

- **src**: Carpeta que contiene la lógica de la aplicación organizada en módulos.

  - **BD**: Carpeta para archivos relacionados con la base de datos, como el archivo Database.sql.

  - **config**: Carpeta que contiene archivos de configuración, como Config.php y Database.php.

  - **controllers**: Carpeta con controladores PHP que manejan las solicitudes y la lógica de negocio, como HomeController.php y LoginController.php.

  - **models**: Carpeta que contiene los modelos PHP que interactúan con la base de datos y gestionan los datos, como HomeModel.php y LoginModel.php.

- **vendor**: Carpeta generada por Composer que contiene las dependencias y archivos autogenerados.

- **views**: Carpeta que contiene las vistas de la aplicación, organizadas por módulos.

  - **home**: Carpeta de vistas relacionadas con la página de inicio, que incluye archivos HTML, CSS y JavaScript.

  - **login**: Carpeta de vistas relacionadas con la página de inicio de sesión, que incluye archivos HTML, CSS y JavaScript.

  - **public**: Carpeta para recursos públicos y archivos de configuración relacionados con el front-end.

## Configuración de Webpack

El proyecto utiliza Webpack como herramienta de empaquetado para JavaScript y recursos front-end. El archivo webpack.config.js define la configuración de Webpack, incluyendo la entrada y la salida de archivos JavaScript.

## Uso de Composer y Namespaces

Composer se utiliza para la gestión de dependencias y la gestión de namespaces en PHP. Los archivos `composer.json` y `composer.lock` especifican las dependencias requeridas para el proyecto. Además, se utilizan namespaces en el código PHP para organizar y estructurar el proyecto de manera modular.

