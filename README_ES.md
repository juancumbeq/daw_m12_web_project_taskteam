<p align="right">
	<a href="README.md">Click here for English version</a>
</p>

# TaskTeam 👨🏽‍💻

TaskTeam es el proyecto final para mi Certificado de Educación Superior en Desarrollo de Aplicaciones Web. Es un sistema de gestión de tareas web que permite la organización y seguimiento eficiente de las tareas de los empleados dentro de una organización. Cuenta con una interfaz intuitiva para el usuario y está formada por dos componentes principales: un módulo de gestión de empleados y un módulo de gestión de tareas.

El módulo de gestión de empleados permite el registro, visualización, edición y eliminación de empleados. Incluye campos para detalles como nombres, cargos y departamentos.

El módulo de gestión de tareas permite la creación, asignación y gestión de tareas asociadas con los empleados. Las tareas pueden ser buscadas, filtradas y ordenadas según diversos criterios. Cada tarea está vinculada a un empleado específico e incluye detalles como descripción de la tarea, fechas de inicio y fin, y estado. Este módulo proporciona una visión general de las tareas asignadas a cada empleado, facilitando la distribución y seguimiento efectivos de las tareas.

El sistema cuenta con una interfaz intuitiva y amigable para el usuario, ofreciendo un inicio de sesión de acceso diferente para empleados o jefes de departamento, formularios de registro y edición de empleados, así como una sección dedicada a la gestión de tareas. Tanto los empleados como las tareas pueden ser buscados y filtrados por diferentes criterios, facilitando su ubicación y seguimiento. Además, se proporciona la posibilidad de asignar tareas a empleados específicos, registrar la fecha de inicio y fin de cada tarea y ver un resumen general de las tareas asignadas a cada empleado.

TaskTeam está desarrollado utilizando tecnologías web como HTML, CSS, JavaScript, Bootstrap, PHP y MySQL, con el objetivo de crear una aplicación robusta y funcional. Además, se aplican buenas prácticas de diseño y programación.

En resumen, esta aplicación web tiene como objetivo proporcionar una solución integral y eficiente para la gestión de empleados y tareas, permitiendo a las empresas mejorar su organización interna, aumentar la productividad y optimizar el seguimiento de las tareas asignadas a su personal.

<br>

<p align="center">
   <img src="https://img.shields.io/badge/Estado%20del%20Proyecto-Finalizado-brightgreen"/>
</p>





<br>

## Índice

1. [Instalación](#instalación)
2. [Tecnologías empleadas](#tecnologías)
3. [Funcionalidades](#funcionalidades)
4. [Estructura de Archivos](#estructura-de-archivos)
5. [Contribución](#contribución)
6. [Créditos](#créditos)
7. [Licencia](#licencia)

<br>

<a name="instalación"></a>

## Instalación

### Requisitos Previos

Asegúraese de tener XAMPP instalado en tu computadora. Puedes descargarlo desde [el sitio web oficial de Apache Friends.](https://www.apachefriends.org/es/index.html)

### Pasos de Instalación

- **Instalación de XAMPP**:

  - Descarga el instalador de XAMPP desde el sitio web oficial y ejecútalo.
  - Sigue las instrucciones del instalador para completar la instalación de XAMPP en tu computadora.
  - Una vez instalado, abre el Panel de Control de XAMPP y asegúrate de que los servicios de Apache y MySQL estén activos.

- **Configuración de la Base de Datos**:

  - Abre tu navegador web y visita [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
  - Crea una nueva base de datos llamada daw_m12_app.
  - Importa el archivo SQL proporcionado con la aplicación web o crea manualmente las tablas y relaciones necesarias.

- **Transferencia de la Aplicación Web**:

  - Copia los archivos de la aplicación web al directorio htdocs dentro del directorio de instalación de XAMPP. Por lo general, este directorio se encuentra en C:\xampp\htdocs en sistemas Windows o /Applications/XAMPP/htdocs en macOS. La ruta resultante debería ser: /Applications/XAMPP/xamppfiles/htdocs/DAW_FP/M12_WebApp/.

- **Iniciar el Servidor Local**:

  - Vuelve al Panel de Control de XAMPP y haz clic en "Start" para iniciar los servicios de Apache y MySQL.
  - Abre tu navegador web y visita [http://localhost/DAW_FP/M12_WebApp/index_main.php](http://localhost/DAW_FP/M12_WebApp/index_main.php)

- **Pruebas de Aplicación**:
  - Si todo se configuró correctamente, deberías poder ver la página de inicio de sesión de TaskTeam. ¡Felicidades! Has instalado con éxito tu aplicación web PHP en tu servidor local utilizando XAMPP. Ahora puedes comenzar a desarrollar y probar tu aplicación sin necesidad de una conexión a internet.

<br>

<a name="tecnologías"></a>

## Tecnologías Utilizadas

En TaskTeam, se han utilizado diversas tecnologías para su desarrollo y funcionamiento. La mayoría de ellas han sido ampliamente utilizadas a lo largo del ciclo de formación. A continuación, se proporciona una breve descripción de para qué se ha utilizado cada una de ellas:

- **HTML5**: HTML5 se ha utilizado para la estructura y marcado de las páginas web de TaskTeam. Es el lenguaje estándar para crear contenido web y permite definir la estructura de elementos y su interacción.

- **CSS**: Las Hojas de Estilo en Cascada se han utilizado para aplicar estilos y diseños a las páginas de TaskTeam. Permite controlar la presentación visual de elementos, como colores, fuentes, tamaños, disposiciones de página, entre otros. En este proyecto en particular, el uso de CSS viene junto con Bootstrap.

- **Bootstrap**: Bootstrap es un marco de trabajo de código abierto que proporciona un conjunto de herramientas y estilos CSS predefinidos, permitiendo la construcción rápida y fácil de interfaces web receptivas y atractivas. Se ha utilizado en la aplicación para facilitar la creación de una interfaz de usuario moderna y adaptable.

- **JavaScript**: JavaScript se ha utilizado para implementar interactividad en las páginas de TaskTeam, permitiendo así acciones dinámicas para y por el usuario. Más específicamente, he utilizado:

- **SweetAlert2**: Es una biblioteca de JavaScript utilizada para crear ventanas emergentes y notificaciones personalizadas al intentar realizar una modificación en un registro de base de datos. Proporciona una experiencia de usuario mejorada al mostrar mensajes de manera atractiva y de forma amigable.

- **DataTables**: DataTables es una biblioteca de JavaScript utilizada en TaskTeam para mejorar la visualización y manipulación de tablas de datos. Proporciona características avanzadas como paginación, filtrado, ordenación y búsqueda en tablas, mejorando la usabilidad y presentación de información tabular en la aplicación. Inicialmente, DataTables se creó como una biblioteca de jQuery, lo que significa que requería incluir la biblioteca de jQuery en la página web. Sin embargo, en versiones más recientes, DataTables también puede utilizarse sin jQuery como una biblioteca de JavaScript independiente, aunque se mantiene la sintaxis de jQuery.

- **PHP**: Se ha utilizado como el lenguaje de programación del lado del servidor en TaskTeam. Permite realizar operaciones y lógica comerciales, acceder y administrar bases de datos y generar contenido dinámico en páginas web. La ejecución de archivos ".php" se ha realizado en XAMPP ya que cuenta con un intérprete del lado del servidor en Apache.

- **XAMPP**: Es un paquete de software que incluye un servidor web Apache, una base de datos MySQL y el intérprete PHP. Se ha utilizado para crear un entorno de desarrollo local en el que se ha ejecutado y probado TaskTeam.

- **phpMyAdmin**: Para poder acceder a la base de datos MySQL, es necesario contar con un Sistema de Gestión de Bases de Datos (DBMS). phpMyAdmin es el DBMS de XAMPP y se ha utilizado en TaskTeam para gestionar la base de datos y realizar operaciones como crear tablas, consultas y modificaciones a los datos.

- **Navegadores**: Principalmente, se han utilizado dos navegadores web, Google Chrome y Brave, para probar y verificar el funcionamiento de la aplicación, así como la compatibilidad y el rendimiento en diferentes entornos de visualización.

- **Visual Studio Code**: Es un editor de código de Microsoft utilizado para escribir y editar archivos HTML, JavaScript y PHP. Proporciona herramientas y extensiones que facilitan la programación y mejoran la productividad.

- **ClickUp**: Es una herramienta de gestión de proyectos utilizada para organizar y realizar un seguimiento de las tareas, asignar responsabilidades, establecer plazos y prioridades.

- **Draw.io**: Draw.io es una herramienta de creación de diagramas utilizada para diseñar y representar visualmente la estructura de la base de datos (diagrama E-R, diagrama relacional), diagramas de casos de uso y otros diagramas necesarios para el desarrollo del proyecto.

Cada una de estas tecnologías ha desempeñado un papel clave en el desarrollo y funcionamiento de TaskTeam, permitiendo la creación de una aplicación web funcional, interactiva y visualmente atractiva.

<br>

<a name="funcionalidades"></a>

## Funcionalidades

Detailed explanation on how to use the project. Includes examples, basic commands, and any other relevant information for users.

<br>

<a name="estructura-de-archivos"></a>

## Estructura de Archivos

Descripción de la estructura de archivos del proyecto, especialmente útil para proyectos más grandes. Puedes proporcionar una descripción breve de cada archivo o directorio importante.

M12_WebApp
├─ assets
│  └─ jefes_dptos_docs
│     ├─ .DS_Store
│     ├─ JuanCarlos_GonzalezRuiz_foto.jpg
│     ├─ LauraMaria_MartinezPerez_foto.jpg
│     └─ LuisAlejandro_SanchezLopez_foto.jpg
├─ bd.php
├─ index_main.php
├─ login
│  ├─ controller
│  │  └─ LoginController.php
│  ├─ login.php
│  ├─ logout.php
│  ├─ model
│  │  └─ UserModel.php
│  └─ view
│     └─ LoginView.php
├─ secciones
│  ├─ employees
│  │  ├─ controllers
│  │  │  └─ EmployeesController.php
│  │  ├─ create_employees.php
│  │  ├─ edit_employees.php
│  │  ├─ empleados_docs
│  │  ├─ index_employees.php
│  │  ├─ model
│  │  │  └─ EmployeesModel.php
│  │  └─ view
│  │     ├─ CreateEmployeesView.php
│  │     ├─ EditEmployeesView.php
│  │     └─ EmployeesView.php
│  └─ tasks
│     ├─ controllers
│     │  └─ TasksController.php
│     ├─ create_tasks.php
│     ├─ edit_tasks.php
│     ├─ index_tasks.php
│     ├─ model
│     │  └─ TasksModel.php
│     └─ view
│        ├─ CreateTasksView.php
│        ├─ EditTasksView.php
│        └─ TasksView.php
└─ templates
   ├─ footer.php
   └─ header.php

<br>

<a name="licencia"></a>

## Licencia

Este proyecto está licenciado bajo la Licencia MIT. Para más detalles, consulta el archivo [LICENSE](LICENSE).

<br>
