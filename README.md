<p align="right">
	<a href="README_ES.md">Haga clic aquí para versión en español</a>
</p>

# TaskTeam 👨🏽‍💻

TaskTeam it the final project for my Certificate of the Higher Education in Web Application Development. It is a web-based task management system that allows efficient organization and tracking of employee tasks within a company. It features a user-friendly interface, and encompasses two main components: an employee management module and a task management module.

The employee management module enables the registration, viewing, editing, and deletion of employee records. It includes fields for employee details such as names, positions, and departments.

The task management module allows the creation, assignment, and management of tasks associated with employees. Tasks can be searched, filtered, and sorted based on various criteria. Each task is linked to a specific employee and includes details such as task description, start and end dates, and status. This module provides an overview of the tasks assigned to each employee, facilitating effective task distribution and tracking.

The system features an intuitive and user-friendly interface, offering a different access login for employees or department managers, employee registration and editing forms, as well as a section dedicated to task management. Both employees and tasks can be searched and filtered by different criteria, facilitating their location and tracking. Additionally, the possibility of assigning tasks to specific employees, recording the start and end date of each task, and viewing a general summary of the tasks assigned to each employee is provided.

**TaskTeam** is developed using web technologies such as HTML, CSS, JavaScript, Bootstrap, PHP, and MySQL, aiming to create a robust and functional application. Furthermore, good design and programming practices are applied.

In summary, this web application aims to provide a comprehensive and efficient solution for employee and task management, allowing companies to improve their internal organization, increase productivity, and optimize tracking of tasks assigned to their personnel.

<br>

<p align="center">
  <img src="https://img.shields.io/badge/Project%20Status-Finished-brightgreen"/>
</p>

<br>

## Index

- [Installation](#installation)
- [Development Model](#development-model)
- [Technologies Used](#technologies-used)
- [Features](#features)
- [Database](#database)
- [Backend](#backend)
- [Frontend](#frontend)
- [File Structure](#file-structure)
- [Screenshots](#screenshots)
- [License](#license)
- [Author](#author)

<br>

<a name="installation"></a>

## Installation

### Previous Requirements

Make sure you have XAMPP installed on your computer. You can download it from [the official Apache Friends website.](https://www.apachefriends.org/es/index.html)

### Installation Steps

- **XAMPP Installation**:

  - Download the XAMPP installer from the official website and run it.
  - Follow the installer instructions to complete the installation of XAMPP on your computer.
  - Once installed, open the XAMPP Control Panel and make sure that the Apache and MySQL services are active.

- **Database Configuration**:

  - Open your web browser and visit [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
  - Create a new database named daw_m12_app.
  - Import the provided SQL file with the web application or manually create the necessary tables and relationships.

- **Transfer of the Web Application**:

  - Copy the web application files to the htdocs folder within the XAMPP installation directory. Usually, this folder is located at C:\xampp\htdocs on Windows systems or /Applications/XAMPP/htdocs on macOS. The resulting path should be: /Applications/XAMPP/xamppfiles/htdocs/DAW_FP/M12_WebApp/.

- **Starting the Local Server**:

  - Return to the XAMPP Control Panel and click on "Start" to initiate the Apache and MySQL services.
  - Open your web browser and visit [http://localhost/DAW_FP/M12_WebApp/index_main.php](http://localhost/DAW_FP/M12_WebApp/index_main.php)

- **Application Testing**:
  - If everything was configured correctly, you should be able to see the TaskTeam login page. Congratulations! You have successfully installed your PHP web application on your local server using XAMPP. Now you can start developing and testing your application without needing an internet connection.

<br>

<a name="modelo-de-desarrollo"></a>

## Development Model

To establish the life cycle of **TaskTeam**, the waterfall model with feedback has been chosen. This decision is based on considering this model as the most suitable for the scope and size of the project. Although it may be challenging to achieve success in very large developments due to the numerous dependencies that arise, for more modest projects, it has proven to be one of the most efficient due to its straightforward application.

The waterfall model with feedback consists of a series of phases that are completed sequentially, but each phase can provide feedback to the previous one if necessary.

This can occur when an error is detected in a previous phase and corrected, or when a change in some environmental condition requires adjustments.

The phases marked by this model fit perfectly into the proposed project scheme, which are: analysis, design, coding, and testing. With the exception of the maintenance phase, as the life cycle of **TaskTeam** does not include an exploitation phase.

<br>
<div align="center">
  <a>
    <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Diagrama_ModeloDesarrollo.png?raw=true" height= "90%" title="Development Model">
  </a>
</div>

<br>

<a name="technologies-used"></a>

## Technologies Used

In TaskTeam, various technologies have been used for its development and operation. Most of them have been widely used throughout the training cycle. Below, a brief description is provided for what each of them has been used for:

- **HTML5**: HTML5 has been used for the structure and markup of TaskTeam's web pages. It is the standard language for creating web content and allows defining the structure of elements and their interaction.

- **CSS**: Cascading Style Sheets have been used to apply styles and designs to TaskTeam's pages. It allows controlling the visual presentation of elements, such as colors, fonts, sizes, page layouts, among others. In this particular project, the use of CSS comes together with Bootstrap.

- **Bootstrap**: Bootstrap is an open-source framework that provides a set of predefined CSS tools and styles, allowing for the quick and easy construction of responsive and attractive web interfaces. It has been used in the application to facilitate the creation of a modern and adaptive user interface.

- **JavaScript**: JavaScript has been used to implement interactivity on TaskTeam's pages, thereby allowing dynamic actions for and by the user. More specifically, I have used:

- **SweetAlert2**: It is a JavaScript library used to create pop-up windows and custom notifications when trying to make a modification to a database record. It provides an enhanced user experience by displaying messages attractively and in a user-friendly manner.

- **DataTables**: DataTables is a JavaScript library used in TaskTeam to enhance the visualization and manipulation of data tables. It provides advanced features such as pagination, filtering, sorting, and searching in tables, improving the usability and presentation of tabular information in the application. Initially, DataTables was created as a jQuery library, which means it required including the jQuery library on the web page. However, in more recent versions, DataTables can also be used without jQuery as an independent JavaScript library, although the jQuery syntax is still maintained.

- **PHP**: It has been used as the server-side programming language in TaskTeam. It allows performing business operations and logic, accessing and managing databases, and generating dynamic content on web pages. The execution of ".php" files has been carried out in XAMPP as it has a server-side interpreter in Apache.

- **XAMPP**: It is a software package that includes an Apache web server, a MySQL database, and the PHP interpreter. It has been used to create a local development environment in which TaskTeam has been executed and tested.

- **phpMyAdmin**: To be able to access the MySQL database, it is necessary to have a DBMS (Database Management System). phpMyAdmin is the DBMS of XAMPP and has been used in TaskTeam to manage the database and perform operations such as creating tables, queries, and modifications to the data.

- **Browsers**: Primarily, two web browsers, Google Chrome and Brave, have been used to test and verify the operation of the application as well as compatibility and performance in different viewing environments.

- **Visual Studio Code**: It is a Microsoft code editor used to write and edit HTML, JavaScript, and PHP files. It provides tools and extensions that facilitate programming and improve productivity.

- **ClickUp**: It is a project management tool used to organize and track tasks, assign responsibilities, set deadlines, and priorities.

- **Draw.io**: Draw.io is a diagram creation tool used to design and visually represent the structure of the database (E-R diagram, relational diagram), use case diagrams, and other diagrams necessary for the project's development.

Each of these technologies has played a key role in the development and operation of TaskTeam, allowing the creation of a functional, interactive, and visually appealing web application.

<br>

<a name="features"></a>

## Features

- #### User Authentication

  - Each system user has an email and a password that allows them to access the application.

- #### Employee Management

  - Department managers are the only ones with permissions to access the employee list. Through this module, the following is allowed:
    - Addition of an employee to the system via form.
    - Editing employee data.
    - Deletion of employee record.
    - Viewing tasks assigned to a specific employee.

- #### Task Management
  - Employees and department managers have access to this module, however, the permitted functions are limited for employees.
  - Department manager permissions:
    - Addition of tasks corresponding to a department via form.
    - Editing task data.
    - Deletion of task record.
    - Assignment of tasks to employees.
  - Employee permissions:
    - Editing the status of the assigned task.

<br>

To learn in detail about the functionalities of the application, we can refer to the use case diagrams. These are used to represent the requirements of the web application from the perspective of the different agents that interact with it, such as users, systems, or external applications. In this particular project, only employees and department heads interact with the application.

<br>

<p align="center">
    <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Diagrama_CasosUsoJefe.png?raw=true" width= "42%" title="Use Cases">&nbsp;&nbsp;&nbsp;
    <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Diagrama_CasosUsoEmpleado.png?raw=true" width= "50%" title="Use Cases">
</p>
<br>

<a name="database"></a>

## Database

One of the important steps in the design process has been the development of the database, which serves to store all the relevant information of the application.

Once we have all the entities and attributes that we want to store, the entity-relationship diagram is designed:

<br>
<p align="center">
    <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Diagrama_ER.png?raw=true" width= "90%" title="ER Diagram">&nbsp;&nbsp;&nbsp;
</p>
<br>

Next, and using the phpMyAdmin DBMS, the database named "daw_m12_app" is created. In this database, all the tables of the relational model, primary and foreign keys, and the rest of the fields have been defined:

<br>
<p align="center">
    <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Diagrama_Relacional.png?raw=true" width= "70%" title="Relational Diagram">
</p>
<br>

<a name="backend"></a>

## Back-end

The development of the Back-end was carried out following the MVC pattern. Classes for controllers and models were implemented, defined in the analysis phase.

The implementation process of the back-end of the main parts of the application came as a result of having the front-end structured and minimally functional. This allowed handling real data and understanding their flow for error detection and resolution.

To better understand the details of the classes and their methods, it is important to note that controllers and models handle all back-end operations, implemented in PHP. The model is responsible for all interaction with the database, while the controller handles the reception, management, and sending of data to and from the model and the view.

In the coding of the controllers, objects of the corresponding models are also instantiated as required to interact with the database. This way, only the controller can communicate with the model, providing greater security to the application.

Finally, the model classes are coded, defining all the queries required to return the information requested by the controller.

Throughout the development of the back-end, deficiencies were detected in the initially planned classes, as new needs and opportunities for code optimization and reuse emerged during the application construction.

Below are mentioned the main classes that handle the bulk of the application data:

- **UserModel Class (user model)**: The UserModel class receives data from the LoginController controller and uses the `$conexion` property to establish contact with the corresponding database.

  - `verifyCredentials()`: This method inserts the user's credentials into SQL statements that allow the user to authenticate. It returns the corresponding data based on the results of the queries.

- **EmployeeController Class (employee controller)**: The EmployeeController controller is responsible for managing the CRUD (Create, Read, Update, Delete) of employees. It requires permissions like department head to access the corresponding view and make use of the controller. It uses an `employeesModel` object to establish a connection with the employee model.

  - `CreateEmployees()`: It receives data from the view form within an array and saves it in the model. If there are no errors in the creation process, it redirects the user to the list of employees page.

  - `FixedDataCreateForm()`: Before creating a new employee, it is necessary to obtain specific information from the form, such as department and position dropdowns. This method requests the relevant information from the model using the department identifier.

  - `ReadEmployees()`: It makes a call to the corresponding method of the model to obtain an array with all the information of the company's employees.

  - `UpdateEmployees()`: Similar to the `CreateEmployees()` method, but it requires an additional parameter: the employee identifier. This allows the model to update the corresponding record.

  - `FixedDataUpdateForm()`: Similar to `FixedDataCreateForm()`, but used to update employee information.

  - `DeleteEmployees()`: By using an identifier, it executes the deletion of an employee in the database.

- **EmployeesModel Class (employee model)**: The EmployeesModel class acts on the database by executing the corresponding SQL statements.

  - `CreateEmployeesModel()`: It receives the information of the employee that needs to be created and manages the renaming and copying of the files uploaded to the form. It returns true if the insertion is successful.

  - `FixedDataCreateFormEmployees()`: It obtains the positions and department information to facilitate the creation of a new employee.

  - `ReadEmployees()`: It extracts all the information of the employees from the database and delivers it to the controller.

  - `UpdateEmployees()`: It inserts the new employee information to update the corresponding record, managing the deletion of obsolete files and transferring the updated versions.

  - `FixedDataUpdateFormModel()`: It uses the employee identifier to obtain all its information and display it in the update form.

  - `DeleteEmployeeModel()`: It takes care of deleting the record and relevant files of a specific employee.

- **TasksController Class (task controller)**: The TasksController controller manages the CRUD of tasks. Employees can access the read and update methods, but only users with sufficient permissions can create or delete tasks. It uses a `tasksModel` object to establish a connection with the task model.

  - `CreateTasks()`: It receives data from the form and sends it to the model to build and execute an SQL statement. If there are no errors, it redirects the user to the tasks list.

  - `FixedDataCreateForm()`: It obtains relevant department data to create a task.

  - `ReadTasksDptoGeneral()`: It reads all tasks corresponding to a department.

  - `ReadTasksDptoSpecific()`: Similar to the previous one but for tasks assigned to a specific employee.

  - `UpdateTasks()`: It receives data from the form and sends it to the model to update a task.

  - `FixedDataUpdateForm()`: It obtains all relevant information of a task from the model to fill the form by default.

  - `DeleteTasks()`: It deletes a task from the database.

- **TasksModel Class (task model)**: The TasksModel class executes SQL statements on the corresponding database for CRUD operations.

  - `CreateTasksModel()`: It receives data from the controller and uses it in the task creation SQL statement.

  - `FixedDataCreateFormModel()`: It obtains relevant information of the department, such as the list of available employees.

  - `ReadTasksDptoGeneralModel()`: It obtains data of all tasks of a department.

  - `ReadTasksDptoSpecificModel()`: It retrieves all data of tasks of a specific employee.

  - `UpdateTasks()`: It receives data to be updated and executes the corresponding SQL statement.

  - `FixedDataUpdateFormModel()`: It retrieves information of a specific task to display it in the update form.

  - `DeleteTasksModel()`: It deletes a task from the database.

<br>
In the following image, we can see the resulting class diagram:
<br>
<br>
<p align="center">
    <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Diagrama_Clases.png?raw=true" width= "90%" title="Class Diagram">
</p>

<br>

<a name="front-end"></a>

## Front-end

During the development of the back-end, work on the front-end also began, although initially it was not on a large scale. The focus was on implementing basic functionalities to work with real data, such as data entry through employee and task forms.

Once a significant part of the back-end was completed, front-end development started with the aim of creating a simple and intuitive user interface.

The first step was the construction of a navigation menu that allowed navigation between the different pages of the application. This navigation menu was inserted as an external file in each view.

Then, the views that make up the application were built, such as those for employees, tasks, login, homepage, and alerts. Technologies such as HTML5, Bootstrap, JavaScript, and jQuery were used for this purpose. The functioning of these views is briefly described below:

- **Login:** This page allows users to enter their credentials to access the application according to their permission levels. Data collection and processing are done through a PHP file using the POST method.

- **Home:** This is the page where the user is redirected after validating their credentials. It includes a header that allows navigation between the different pages and represents the welcome page to the department.

- **EmployeesView:** Allows viewing the list of all employees in the company, including basic information for each. From this view, employees can be added, deleted, edited, or access assigned tasks.

- **CreateEmployeesView:** Contains the form to register a new employee, including photo and resume.

- **EditEmployeesView:** Allows editing the information of a previously added employee. The form is similar to the creation form but with preloaded information.

- **TasksView:** Allows viewing the list of all department tasks, including relevant information such as the assigned employee. If accessed from EmployeesView, it displays the tasks corresponding to the selected employee.

- **CreateTasks:** Available only from TasksView and requires department head credentials. Contains a form to create a new task.

- **EditTasks:** Similar to the creation page, but accessed from the "Edit" buttons in the task records.

- **Header:** Navigation menu that groups the most relevant links of the application.

<br>

<a name="file-structure"></a>

## File Structure

Representation of the project's file structure:

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

<a name="screenshots"></a>

## Screenshots

<br>
<details>
  <summary>See images</summary>
  <br>

  <p align="center" style="font-style: italic;">Login</p>
  <p align="center">
      <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Captura_Login.png?raw=true" width= "90%" title="Captura">
  </p>
  
  <p align="center" style="font-style: italic;">Error Login</p>
  <p align="center">
      <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Captura_LoginError.png?raw=true" width= "90%" title="Captura">
  </p>

  <p align="center" style="font-style: italic;">Manager Homepage</p>
  <p align="center">
      <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Captura_HomeManager.png?raw=true" width= "90%" title="Captura">
  </p>

  <p align="center" style="font-style: italic;">Employee List</p>
  <p align="center">
      <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Captura_ListaEmpleados.png?raw=true" width= "90%" title="Captura">
  </p>

  <p align="center" style="font-style: italic;">Add Employee</p>
  <p align="center">
      <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Captura_AñadirEmpleado.png?raw=true" width= "90%" title="Captura">
  </p>

  <p align="center" style="font-style: italic;">Employee Tasks List</p>
  <p align="center">
      <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Captura_ListaTareasEmpleado.png?raw=true" width= "90%" title="Captura">
  </p>

  <p align="center" style="font-style: italic;">Edit Employee</p>
  <p align="center">
      <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Captura_EditarEmpleado.png?raw=true" width= "90%" title="Captura">
  </p>

  <p align="center" style="font-style: italic;">Delete Employee</p>
  <p align="center">
      <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Captura_BorrarEmpleado.png?raw=true" width= "90%" title="Captura">
  </p>

  <p align="center" style="font-style: italic;">Departament Tasks Lists</p>
  <p align="center">
      <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Captura_ListaTareasDepartamento.png?raw=true" width= "90%" title="Captura">
  </p>

  <p align="center" style="font-style: italic;">Add Task</p>
  <p align="center">
      <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Captura_A%C3%B1adirTarea.png?raw=true" width= "90%" title="Captura">
  </p>

  <p align="center" style="font-style: italic;">Editar Task</p>
  <p align="center">
      <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Captura_EditarTarea.png?raw=true" width= "90%" title="Captura">
  </p>

  <p align="center" style="font-style: italic;">Delete Task</p>
  <p align="center">
      <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Captura_BorrarTarea.png?raw=true" width= "90%" title="Captura">
  </p>

  <p align="center" style="font-style: italic;">Employee Homepage</p>
  <p align="center">
      <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Captura_HomeEmpleado.png?raw=true" width= "90%" title="Captura">
  </p>

  <p align="center" style="font-style: italic;">Tasks Lists from Employee View</p>
  <p align="center">
      <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Captura_ListaTareasVistaEmpleado.png?raw=true" width= "90%" title="Captura">
  </p>

  <p align="center" style="font-style: italic;">Edit Task from Employee View</p>
  <p align="center">
      <img src="https://github.com/juancumbeq/daw_m12_web_project/blob/main/images/Captura_EditarTareaVistaEmpleado.png?raw=true" width= "90%" title="Captura">
  </p>
</details>

<br>

<a name="license"></a>

## License

This project is licensed under the MIT License. For more details, see the [LICENSE](LICENSE) file.

<br>

<a name="author"></a>

## Author

This project was developed by Juan Cumbe. If you have any questions or suggestions about the project, feel free to contact me via [e-mail](mailto:hello@juancumbe.com) or my [Linkedin](https://www.linkedin.com/in/juancumbeq/) profile. You can also visit my website [juancumbe.com](juancumbe.com). 😊

