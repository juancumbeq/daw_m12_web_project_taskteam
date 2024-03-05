# TaskTeam 👨🏽‍💻

TaskTeam it the final project for my Certificate of the Higher Education in Web Application Development. It is a web-based task management system that allows efficient organization and tracking of employee tasks within a company. It features a user-friendly interface, and encompasses two main components: an employee management module and a task management module.

The employee management module enables the registration, viewing, editing, and deletion of employee records. It includes fields for employee details such as names, positions, and departments. Additionally, it provides login functionality for employees and department managers, ensuring secure access to the system.

The task management module allows the creation, assignment, and management of tasks associated with employees. Tasks can be searched, filtered, and sorted based on various criteria. Each task is linked to a specific employee and includes details such as task description, start and end dates, and status. This module provides an overview of the tasks assigned to each employee, facilitating effective task distribution and tracking.

The system features an intuitive and user-friendly interface, offering a different access login for employees or department managers, employee registration and editing forms, as well as a section dedicated to task management. Both employees and tasks can be searched and filtered by different criteria, facilitating their location and tracking. Additionally, the possibility of assigning tasks to specific employees, recording the start and end date of each task, and viewing a general summary of the tasks assigned to each employee is provided.

**TaskTeam** is developed using web technologies such as HTML, CSS, JavaScript, Bootstrap, PHP, and MySQL, aiming to create a robust and functional application. Furthermore, good design and programming practices are applied.

In summary, this web application aims to provide a comprehensive and efficient solution for employee and task management, allowing companies to improve their internal organization, increase productivity, and optimize tracking of tasks assigned to their personnel.

<br>

## Index

1. [Installation](#installation)
2. [Technology Stack](#stack)
3. [Usage](#usage)
4. [File Structure](#file-structure)
5. [Contribution](#contribution)
6. [Credits](#credits)
7. [License](#license)

<br>

<a name="installation"></a>

## Installation

### Previous Requirements

Make sure you have XAMPP installed on your computer. You can download it from the official Apache Friends website.

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

<a name="stack"></a>

## Technology Stack

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

<a name="usage"></a>

## Usage

Explicación detallada sobre cómo utilizar el proyecto. Incluye ejemplos, comandos básicos, y cualquier otra información relevante para los usuarios.

<br>

<a name="file-structure"></a>

## File Structure

Descripción de la estructura de archivos del proyecto, especialmente útil para proyectos más grandes. Puedes proporcionar una descripción breve de cada archivo o directorio importante.

<br>

<a name="contributing"></a>

## Contribution

Instrucciones para contribuir al proyecto, incluyendo cómo reportar problemas, enviar propuestas de mejora, y directrices para hacer cambios en el código.

<br>

<a name="credits"></a>

## Credits

Agradecimientos a las personas o proyectos que han contribuido de alguna manera al desarrollo de tu proyecto. También puedes incluir enlaces a recursos útiles que hayas utilizado.

<br>

<a name="license"></a>

## Licence

This project is licensed under the MIT License. For more details, see the [LICENSE](LICENSE) file.

<br>
