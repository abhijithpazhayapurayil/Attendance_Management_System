# Student Attendance Management System

A simple local web-based Student Attendance Management System built using PHP, MySQL, HTML, and CSS.

## Technologies Used

- HTML
- CSS
- PHP
- MySQL
- XAMPP
- Apache
- phpMyAdmin

## Features

- Dashboard
- Add students
- Add subjects with faculty name
- Mark attendance as Present/Absent
- View attendance records
- MySQL database connectivity

## How to Run Locally

1. Install XAMPP.
2. Start **Apache** and **MySQL** from the XAMPP Control Panel.
3. Copy this project folder into:
   `C:\xampp\htdocs\`
4. Open phpMyAdmin:
   `http://localhost/phpmyadmin`
5. Import `database.sql` into phpMyAdmin, or open the SQL tab and run its contents.
6. Open the project:
   `http://localhost/attendance_system/`

## Database

Database name:

`attendance_system`

Tables:

- `students`
- `subjects`
- `attendance`

## Important

This project is configured for the default XAMPP MySQL setup:

- Host: `localhost`
- User: `root`
- Password: empty
- Database: `attendance_system`

If your MySQL username/password is different, update `config.php`.
