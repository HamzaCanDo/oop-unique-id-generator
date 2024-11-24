PDO Unique ID Generator
A PHP project that generates unique, non-repeating IDs using PDO and MySQL. This can be especially useful for applications that require unique identifiers, like user IDs, order numbers, or any other resource that needs a distinct identifier.

Features
Unique ID Generation: Generates a random, unique ID for each entry without repeating previous IDs.

PDO Database Connection: Utilizes PHP's PDO for secure and efficient database interactions.

MySQL Integration: Stores and retrieves unique IDs from a MySQL database.

Easy Configuration: MySQL database settings are easily configurable.

Reusable Code: Modular code structure makes it easy to integrate into other projects.

Installation
Prerequisites,

PHP (preferably version 7.4 or above)
MySQL database
Apache server or any PHP-compatible web server (XAMPP, WAMP, etc.)
Steps to Set Up
Downlaod The Files, then place the folder into xampp>htdocks>here (if you using xampp)

Open your MySQL client or phpMyAdmin.
Create a new database and named it: unique_id_generator
Import the unique_id_generator.sql file in mysql included in the repository. This will set up the necessary tables and structure.
Configure Database Connection

In the project folder, open the config.php file.
Update the MySQL configuration with your database credentials:

<?php
$host = 'localhost'; (if youre using in local machine it would be that)
$db = 'unique_id_generator';
$user = 'root'; (default user name of mysql is root, if youre's not edit it)
$pass = 'your_password'; (if not have password keep it empty)

Run the Project
Start your local server (if using XAMPP, start Apache and MySQL), and open the project in your browser:
http://localhost/unique-id-generator
Generate IDs
Click In Generate button in the application to generate a unique ID.

Usage
This project is designed to be modular, allowing for easy integration into other projects where unique IDs are needed. Use it as a standalone tool or integrate it into your application to manage unique identifiers.


