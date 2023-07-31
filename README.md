
# OSTE-Meta-Scanner
![Project Logo](OSTE.svg)
This project has a No malicious intent purpose. First, it aims to be one of the initial steps in creating an innovative web penetration tester. Second, it seeks to evaluate Dynamic Application Security Testing (DAST) tools. To achieve this, the project utilizes the OSTE vulnerable web application. This application is built using SQL and PHP and intentionally includes multiple points of vulnerability, which allows for comprehensive testing and analysis. By doing so, it aims to improve web security and make online platforms safer for users.
## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Installation](#installation)
- [Contributing](#contributing)
- [License](#license)

## Introduction
Welcome to our project introduction! Our main goal is to ensure that our work is entirely free from any harmful intentions. We have two primary objectives: first, we want to create an advanced web penetration tester that will improve cybersecurity measures on the internet. Second, we aim to evaluate and enhance Dynamic Application Security Testing (DAST) tools to better protect web applications.

To achieve these goals, we are using a special web application called OSTE, which we intentionally made vulnerable in certain places. This allows us to thoroughly test and analyze it. By doing this, we want to make the internet safer for everyone and contribute to better web security. We are excited to share our progress and discoveries with you as we work towards a safer online environment.

## Features

List of Main Vulnerabilities supported (for now):
1. Injection
  - SQL injection (5 Pages)
  - Cross site scripting (8 pages)
  - OS command injection (4 pages)
## Installation

The installation process requires a specific set of requirements. While this project is primarily supported on Kali Linux, it can also be compatible with other operating systems:
1.    Prerequisites:
  - Ensure you have a web server installed on your local machine. Popular choices include Apache, Nginx, or XAMPP (which includes Apache and PHP).
  - Make sure you have PHP and a MySQL database server installed. You can download PHP from the official website (https://www.php.net/downloads.php) and MySQL from (https://dev.mysql.com/downloads/installer/).

2.    Clone the Repository:
  - Clone or download the project repository from the source to your local machine.

3.    Configure Web Server:
  - If you are using XAMPP, place the project folder inside the htdocs directory (for Apache) or www directory (for XAMPP).
  - For other web servers like Apache or Nginx, configure the web server's root directory to point to the project folder.

4.    Database Setup:
  - Access your MySQL database server through a tool like phpMyAdmin or MySQL command-line interface (CLI).
  - Create a new database for the application (Name "OSTE").

5.    Configure Database Connection:
  - Locate the PHP configuration file responsible for database connection (config.php) within the project.
  - Update the database connection details (host, username, password, database name) to match your local MySQL setup.

6.    Start the Web Server:
  - Start your web server (Apache, Nginx, or XAMPP).

7.    Access the Application:
  - Open your web browser and navigate to http://localhost or http://127.0.0.1.
  - If you placed the project in a subdirectory of the web server, access it using http://localhost/project_folder or http://127.0.0.1/project_folder.

8.    Test the Application:
  - Your simple PHP/SQL application should now be accessible. Test its functionality and ensure that the database interactions work as expected.

Congratulations! You have successfully deployed the simple PHP/SQL application in your local environment. If you encounter any issues, double-check the installation steps and ensure that you have met all the prerequisites.
  

## Contributing

We welcome contributions to enhance and improve this project. To contribute, please follow these guidelines:

   1. Fork the repository and create a new branch for your contribution.
   2. Ensure that your code adheres to the project's coding standards.
   3. Make your changes, addressing the specific issue or adding the proposed enhancement.
   4. Test your changes thoroughly.
   5. Commit your changes and provide a clear and descriptive commit message.
   6. Push your changes to your forked repository.
   7. Submit a pull request, detailing the changes you've made and providing any relevant information or context.

Please note that all contributions will be reviewed by the project maintainers. We appreciate your effort and will do our best to provide timely feedback.

If you have any questions or need further clarification, feel free to reach out to us through the issue tracker or by contacting the project maintainers directly.

## License

This project is under  GNU GENERAL PUBLIC LICENSE Version 3, 29 June 2007.

This project is intended for educational purposes and aims to simplify the overall assessment of cybersecurity. However, we want to emphasize that we are not liable for any malicious use of this application. It is crucial that users of this software exercise responsibility and ethical behavior.


## Contact

-  How to reach me email: oudjani.sayed.taki.eddine@gmail.com , sayedesg@gmail.com ;
   linkdin:(https://www.linkedin.com/in/oudjani-seyyid-taqy-eddine-b964a5228)

