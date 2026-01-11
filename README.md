
📁 PHP File Management System

A simple and efficient PHP File Management System that allows users to upload files, store file metadata in a MySQL database, and download files through a user-friendly interface. This project demonstrates core PHP–MySQL integration and basic file handling operations.

🚀 Demo

Localhost (XAMPP):

http://localhost/file_upload_download/

🛠️ Tech Stack

Frontend: HTML, CSS, Bootstrap

Backend: PHP (Core PHP)

Database: MySQL / MariaDB

Server: Apache (XAMPP)

✨ Features
File Upload

Upload files (JPG, JPEG, PNG, GIF, PDF)

Files are stored in a local uploads/ directory

File details saved in the database:

File name

File size

File type

Upload date

File Download

View uploaded files in a table

Download files with a single click

Database Integration

MySQL database to store file metadata

Auto-increment file IDs

Timestamp for upload date

📂 Project Structure
php-file-management-system/
│
├── uploads/                 # Uploaded files
├── upload.php               # File upload logic
├── download.php             # File listing & download
├── test_db.php              # Database connection test
├── fileuploaddownload.sql   # Database export file
├── README.md

⚙️ Setup Instructions (Local)
1️⃣ Install XAMPP

Download and install XAMPP

Start Apache and MySQL

2️⃣ Create Database

Open phpMyAdmin

Create a database:

fileuploaddownload


Import the provided SQL file:

Click Import

Select fileuploaddownload.sql

Click Go

3️⃣ Configure Database Connection

Update database credentials in upload.php and download.php:

$db_host = "localhost";
$db_user = "root";
$db_pass = "your_password";
$db_name = "fileuploaddownload";
$db_port = 3308; // if applicable

4️⃣ Run the Project

Place the project folder inside:

C:\xampp\htdocs\


Open in browser:

http://localhost/php-file-management-system/

📊 Database Schema

Table: files

Column	Type	Description
id	INT (PK)	File ID
filename	VARCHAR	Name of file
filesize	INT	File size
filetype	VARCHAR	MIME type
upload_date	TIMESTAMP	Upload time
🔐 Security Notes

File type validation implemented

Can be extended with:

File size limits

User authentication

Prepared statements (SQL injection prevention)

🌱 Future Enhancements

User login system

File delete option

File preview

Cloud storage integration

Pagination & search

👩‍💻 Author

Manasa Batharaju
