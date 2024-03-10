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

- [Instalación](#instalación)
- [Modelo de Desarrollo](#modelo-de-desarrollo)
- [Tecnologías empleadas](#tecnologías)
- [Funcionalidades](#funcionalidades)
- [Base de Datos](#base-de-datos)
- [Backend](#back-end)
- [Frontend](#front-end)
- [Estructura de Archivos](#estructura-de-archivos)
- [Capturas](#capturas)
- [Licencia](#licencia)
- [Autor](#autor)

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

<a name="modelo-de-desarrollo"></a>

## Modelo de Desarrollo

Para establecer el ciclo de vida de **TaskTeam**, se ha optado por el modelo en cascada con realimentación. Esta elección se basa tras considerar que este modelo es el más adecuado para el alcance y tamaño del proyecto. Aunque en desarrollos muy grandes puede resultar complicado alcanzar el éxito debido a las numerosas dependencias que se generan, para proyectos más modestos se ha demostrado como uno de los más eficientes debido a su aplicación sencilla.

El modelo en cascada con realimentación consta de una serie de fases que se completan de forma secuencial, pero cada una de ellas puede retroalimentar a la anterior en caso de ser necesario.

Esto puede ocurrir cuando se detecta un error en una fase previa y se corrige, o cuando se produce un cambio en alguna condición del entorno que requiere ajustes.

Las fases marcadas por este modelo se ajustan perfectamente al esquema propuesto en el proyecto, que son: análisis, diseño, codificación y pruebas. A excepción de la fase de mantenimiento, ya que el ciclo de vida de **TaskTeam** no contempla una fase de explotación.

<br>
<div align="center">
  <a>
    <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Diagrama_ModeloDesarrollo.png?raw=true" height= "90%" title="Modelo de Desarrollo">
  </a>
</div>

<br>

<a name="tecnologías"></a>

## Tecnologías Utilizadas

En TaskTeam, se han utilizado diversas tecnologías para su desarrollo y funcionamiento. La mayoría de ellas han sido ampliamente utilizadas a lo largo del ciclo de formación. A continuación, se proporciona una breve descripción de para qué se ha utilizado cada una de ellas:

<br>

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

- #### Autenticación de Usuario

  - Cada usuario del sistema cuenta con un correo y una contraseña que le permite acceder al aplicativo.

- #### Gestión de Empleados

  - Los managers de cada departamento son los únicos que disponen de permisos para acceder al listado de empleados, mediante este este módulo se permite lo siguiente:
    - Adición de un empleado al sistema mediante formulario.
    - Edición de datos de empleado.
    - Borrado de registro de empleado.
    - Visionado de tareas asignadas a un empleado en concreto.

- #### Gestión de Tareas
  - Los empleados y los managers de departamente tiene acceso a este módulo, sin embargo, las funciones permitidas son limitadas para el caso de los empleados.
  - Permisos de managers de departamento:
    - Adición de tareas correspondientes a un departamento mediante formulario.
    - Edición de datos de tarea.
    - Borrado de registro de tareas.
    - Asignación de tareas a empleados.
  - Permisos de empleados:
    - Edición del estado de la tarea asignada.

<br>

Para conocer en detalle las funcionalidades del aplicativo podemos hacer referencia de los diagramas de casos de uso Los cuales, se emplean para representar los requisitos de la aplicación web desde la perspectiva de los distintos agentes que interactúan con ella, como usuarios, sistemas o aplicaciones externas. En este proyecto en particular, solo los empleados y los jefes de departamento tienen interacción con el aplicativo.

<br>

<p align="center">
    <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Diagrama_CasosUsoJefe.png?raw=true" width= "42%" title="Use Cases">&nbsp;&nbsp;&nbsp;
    <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Diagrama_CasosUsoEmpleado.png?raw=true" width= "50%" title="Use Cases">
</p>
<br>

<a name="base-de-datos"></a>

## Base de datos

Uno de los pasos importante en el diseño ha sido el desarrollo de la base de datos que sirve para almacenar toda la información relevante de la aplicación.

Una vez tenemos todas la entidades y los atributos que deseamos almacenar se diseña el diagrama entidad-relación:

<br>
<p align="center">
    <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Diagrama_ER.png?raw=true" width= "90%" title="Diagrama ER">&nbsp;&nbsp;&nbsp;
</p>
<br>

Seguidamente, y haciendo uso del SGDB phpMyAdmin se crea la base de datos denominada: daw_m12_app. En esta base de datos se han definido todas las tablas del modelo relacional, las claves primarias y foráneas, y el resto de campos:

<br>
<p align="center">
    <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Diagrama_Relacional.png?raw=true" width= "70%" title="Diagrama relacional">
</p>
<br>

<a name="backend"></a>

## Back-end

El desarrollo del Back-end se llevó a cabo siguiendo el patrón MVC. Se han implementado las clases para los controladores y los modelos, definidas en las fase de análisis.

El procedimiento de implementación del back-end de las partes principales de la aplicación vino como consecuencia de tener estructurado y mínimamente funcional el front-end, porque de esta manera era posible manejar datos reales y conocer el flujo de los mismos, para la detección y solución de errores.

Para poder entender con mayor facilidad los detalles de las clases y su métodos, es importante tener en cuenta que los controladores y los modelos llevan a cabo todo el manejo del back-end, el cuál ha sido implementado en PHP. Encargándose el modelo de toda la interacción con la base de datos y el controlador de la recepción, manejo y envío de estos mismos datos hacia y desde el modelo y la vista.

En la codificación de los controladores también se instancian objetos de los modelos correspondientes, conforme se requiera interactuar con la base de datos. De esta manera es únicamente el controlador el que se puede comunicar con el modelo, dotando de una mayor seguridad al aplicativo.

Por último, se codifican las clases del modelo, definiendo todas las consultas requeridas para devolver la información solicitada por el controlador.

A lo largo del desarrollo del back-end se detectaron deficiencias en las clases que se plantearon inicialmente, ya que a medida que iba construyendo la aplicación surgían nuevas necesidades y oportunidades de optimización y reutilización de código.

A continuación se mencionan las principales clases que manejan el grueso de los datos del aplicativo:

- **Clase UserModel (modelo de usuarios)**: la clase UserModel recibe los datos del controlador LoginController y utiliza la propiedad `$conexion` para establecer contacto con la base de datos correspondiente.

  - `verificarCredenciales()`: Este método inserta las credenciales del usuario dentro de las sentencias SQL que le permiten autenticar al usuario. Retorna los datos correspondientes en función de los resultados de las consultas.

- **Clase EmployeeController (controlador de empleados)**: el controlador EmployeeController se encarga de gestionar el CRUD de empleados, es decir, de la lectura, creación, actualización y eliminación de empleados. Requiere permisos como jefe de departamento para acceder a la vista correspondiente y hacer uso del controlador. Utiliza un objeto `employeesModel` para establecer conexión con el modelo de empleados.

  - `CreateEmployees()`: Recibe los datos del formulario de la vista dentro de un array y los guarda en el modelo. Si no hay errores en el proceso de creación, redirige al usuario hacia la página de la lista de empleados.

  - `FixedDataCreateForm()`: Antes de crear un nuevo empleado, es necesario obtener información específica del formulario, como los desplegables de departamento y puesto. Este método solicita la información relevante al modelo mediante el identificativo del departamento.

  - `ReadEmployees()`: Realiza una llamada al método correspondiente del modelo para obtener un array con toda la información de los empleados de la empresa.

  - `UpdateEmployees()`: Similar al método `CreateEmployees()`, pero requiere un parámetro adicional: el identificativo del empleado. Esto permite al modelo actualizar el registro correspondiente.

  - `FixedDataUpdateForm()`: Similar a `FixedDataCreateForm()`, pero utilizado para actualizar la información de los empleados.

  - `DeleteEmployees()`: Mediante el uso de un identificador, ejecuta el borrado de un empleado en la base de datos.

- **Clase EmployeesModel (modelo de empleados)**: la clase EmployeesModel actúa sobre la base de datos ejecutando las sentencias SQL correspondientes.

  - `CreateEmployeesModel()`: Recibe la información del empleado que necesita ser creado y gestiona el renombrado y copiado de los archivos subidos al formulario. Retorna true si la inserción se realiza satisfactoriamente.

  - `FixedDataCreateFormEmployees()`: Obtiene los puestos y la información del departamento para facilitar la creación de un nuevo empleado.

  - `ReadEmployees()`: Extrae toda la información de los empleados de la base de datos y la entrega al controlador.

  - `UpdateEmployees()`: Inserta la nueva información del empleado para actualizar el registro correspondiente, gestionando el borrado de archivos obsoletos y trasladando las versiones actualizadas.

  - `FixedDataUpdateFormModel()`: Utiliza el identificador del empleado para obtener toda su información y mostrarla en el formulario de actualización.

  - `DeleteEmployeeModel()`: Se encarga del borrado del registro y de los archivos relevantes a un empleado en concreto.

- **Clase TasksController (controlador de tareas)**: el controlador TasksController gestiona el CRUD de las tareas. Los empleados pueden acceder a los métodos de lectura y actualización, pero solo los usuarios con permisos suficientes pueden crear o eliminar tareas. Utiliza un objeto `tasksModel` para establecer conexión con el modelo de tareas.

  - `CreateTasks()`: Recibe los datos del formulario y los envía al modelo para construir y ejecutar una sentencia SQL. Si no hay errores, redirige al usuario a la lista de tareas.

  - `FixedDataCreateForm()`: Obtiene los datos relevantes del departamento para crear una tarea.

  - `ReadTasksDptoGeneral()`: Lee todas las tareas correspondientes a un departamento.

  - `ReadTasksDptoSpecific()`: Similar al anterior pero para tareas asignadas a un empleado específico.

  - `UpdateTasks()`: Recibe los datos del formulario y los envía al modelo para actualizar una tarea.

  - `FixedDataUpdateForm()`: Se encarga de obtener del modelo toda la información relevante de una tarea para rellenar el formulario de manera predeterminada.

  - `DeleteTasks()`: Elimina una tarea de la base de datos.

- **Clase TasksModel (modelo de tareas)**: la clase TasksModel ejecuta las sentencias SQL sobre la base de datos correspondiente al CRUD.

  - `CreateTasksModel()`: Recibe los datos del controlador y los utiliza en la sentencia SQL de creación de tarea.

  - `FixedDataCreateFormModel()`: Obtiene la información relevante del departamento, como la lista de empleados disponibles.

  - `ReadTasksDptoGeneralModel()`: Obtiene los datos de todas las tareas de un departamento.

  - `ReadTasksDptoSpecificModel()`: Se encarga de obtener todos los datos de las tareas de un empleado específico.

  - `UpdateTasks()`: Recibe los datos que se han de actualizar y ejecuta la sentencia SQL correspondiente.

  - `FixedDataUpdateFormModel()`: Se encarga de obtener la información de una tarea específica para mostrarla en el formulario de actualización.

  - `DeleteTasksModel()`: Elimina una tarea de la base de datos.

<br>
En la siguiente imagen podemos ver el diagrama de clases resultante:
<br>
<p align="center">
    <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Diagrama_Clases.png?raw=true" width= "90%" title="Diagrama de clases">
</p>

<br>

<a name="backend"></a>

## Front-end

Durante el desarrollo del back-end, también se inició con el desarrollo del front-end, aunque inicialmente no fue a gran escala. Se enfocó en implementar funcionalidades básicas para trabajar con datos reales, como la entrada de datos a través de formularios de empleados y tareas.

Una vez completada gran parte del back-end, se comenzó con el desarrollo del front-end con el objetivo de crear una interfaz de usuario sencilla e intuitiva.

El primer paso fue la construcción de un menú de navegación que permitiera desplazarse entre las diferentes páginas de la aplicación. Este menú de navegación se insertó como un archivo externo en cada vista.

Luego, se procedió a construir las vistas que componen la aplicación, como las de empleados, tareas, inicio de sesión, página principal y alertas. Para esto, se utilizaron tecnologías como HTML5, Bootstrap, JavaScript y jQuery. A continuación, se describen brevemente el funcionamiento de estas vistas:

- **Inicio de Sesión (Login):** Esta página permite a los usuarios introducir sus credenciales para acceder a la aplicación según sus niveles de permisos. La recogida y tratamiento de los datos se realiza mediante un archivo PHP utilizando el método POST.

- **Página Principal (Home):** Es la página a la que se redirige el usuario después de validar sus credenciales. Incluye un encabezado que permite navegar entre las diferentes páginas y representa la página de bienvenida al departamento.

- **Vista de Empleados (EmployeesView):** Permite consultar la lista de todos los empleados de la empresa, incluyendo información básica de cada uno. Desde esta vista, se puede añadir, eliminar, editar empleados o acceder a las tareas asignadas.

- **Crear Empleado (CreateEmployessView):** Contiene el formulario para registrar un nuevo empleado, incluyendo foto y currículum.

- **Editar Empleado (EditEmployeesView):** Permite editar la información de un empleado previamente añadido. El formulario es similar al de creación pero con la información precargada.

- **Vista de Tareas (TasksView):** Permite consultar la lista de todas las tareas del departamento, incluyendo información relevante como el empleado asignado. Si se accede desde EmployeesView, muestra las tareas correspondientes al empleado seleccionado.

- **Crear Tarea (CreateTasks):** Disponible solo desde TasksView y requiere credenciales de jefe de departamento. Contiene un formulario para crear una nueva tarea.

- **Editar Tarea (EditTasks):** Similar a la página de creación, pero se accede desde los botones "Editar" en los registros de tareas.

- **Encabezado (Header):** Menú de navegación que agrupa los enlaces más relevantes de la aplicación.

<br>

<a name="estructura-de-archivos"></a>

## Estructura de Archivos

Representación de la estructura de archivos del proyecto:

```
M12_WebApp
│
├─ assets
│  └─ jefes_dptos_docs
│     ├─ JuanCarlos_GonzalezRuiz_foto.jpg
│     ├─ LauraMaria_MartinezPerez_foto.jpg
│     └─ LuisAlejandro_SanchezLopez_foto.jpg
│
├─ login
│  ├─ controller
│  │  └─ LoginController.php
│  ├─ model
│  │  └─ UserModel.php
│  ├─ view
│  │   └─ LoginView.php
│  ├─ login.php
│  ├─ logout.php
│
├─ secciones
│  ├─ employees
│  │  ├─ empleados_docs
│  │  ├─ controllers
│  │  │  └─ EmployeesController.php
│  │  ├─ model
│  │  │  └─ EmployeesModel.php
│  │  ├─ view
│  │  │  ├─ CreateEmployeesView.php
│  │  │  ├─ EditEmployeesView.php
│  │  │  └─ EmployeesView.php
│  │  ├─ create_employees.php
│  │  ├─ edit_employees.php
│  │  └─ index_employees.php
│  │
│  └─ tasks
│     ├─ controllers
│     │  └─ TasksController.php
│     ├─ model
│     │  └─ TasksModel.php
│     ├─ view
│     │   ├─ CreateTasksView.php
│     │   ├─ EditTasksView.php
│     │   └─ TasksView.php
│     ├─ create_tasks.php
│     ├─ edit_tasks.php
│     ├─ index_tasks.php
│
├─ templates
│   ├─ footer.php
│   └─ header.php
│
├─ bd.php
└─ index_main.php
```

<br>

<a name="capturas"></a>

## Capturas

<br>
<details>
  <summary>Desplegar imágenes</summary>

  <p align="center">
      <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Captura_Login.png?raw=true" width= "90%" title="Captura">
  </p>
  <p align="center">
      <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Captura_LoginError.png?raw=true" width= "90%" title="Captura">
  </p>
  <p align="center">
      <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Captura_HomeManager.png?raw=true" width= "90%" title="Captura">
  </p>
  <p align="center">
      <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Captura_ListaEmpleados.png?raw=true" width= "90%" title="Captura">
  </p>
  <p align="center">
      <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Captura_AñadirEmpleado.png?raw=true" width= "90%" title="Captura">
  </p>
  <p align="center">
      <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Captura_Login.png?raw=true" width= "90%" title="Captura">
  </p>
  <p align="center">
      <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Captura_Login.png?raw=true" width= "90%" title="Captura">
  </p>
  <p align="center">
      <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Captura_Login.png?raw=true" width= "90%" title="Captura">
  </p>
  <p align="center">
      <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Captura_Login.png?raw=true" width= "90%" title="Captura">
  </p>
  <p align="center">
      <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Captura_Login.png?raw=true" width= "90%" title="Captura">
  </p>
  <p align="center">
      <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Captura_Login.png?raw=true" width= "90%" title="Captura">
  </p>
  <p align="center">
      <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Captura_Login.png?raw=true" width= "90%" title="Captura">
  </p>
  <p align="center">
      <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Captura_Login.png?raw=true" width= "90%" title="Captura">
  </p>
  <p align="center">
      <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Captura_Login.png?raw=true" width= "90%" title="Captura">
  </p>
  <p align="center">
      <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Captura_Login.png?raw=true" width= "90%" title="Captura">
  </p>
</details>
<br>

<a name="licencia"></a>

## Licencia

Este proyecto está licenciado bajo la Licencia MIT. Para más detalles, consulta el archivo [LICENSE](LICENSE).

<br>

<a name="autor"></a>

## Autor

Este proyecto fue desarrollado por Juan Cumbe. Si tienes alguna pregunta o sugerencia sobre el proyecto, no dudes en contactarme a través de [e-mail](mailto:hello@juancumbe.com) o perfil en [Linkedin](https://www.linkedin.com/in/juancumbeq/). También puedes visitar mi sitio web [juancumbe.com](juancumbe.com). 😊
