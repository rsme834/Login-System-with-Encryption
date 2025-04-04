

# Login System with Encryption

## Purpose:
This project aims to learn encryption techniques and how to handle and protect data in web applications. It focuses on securely storing and verifying passwords using hashing.

## Technologies Used:
- **PHP**: For developing login and registration functionality.
- **MySQL**: For storing user data securely.
- **HTML & CSS**: For the front-end user interface.
- **Password Encryption**: Using `password_hash()` for storing passwords and `password_verify()` for verification.

## Project Overview:
- **Registration**: When a user registers, the password is encrypted with `password_hash()` before storing it in the database.
- **Login**: On login, the entered password is verified against the hashed password in the database using `password_verify()`.
- **Data Security**: The project demonstrates how to securely handle and store user data using encryption.

## How to Run:
1. Clone or download the project.
2. Ensure you have PHP and MySQL installed.
3. Create a database in MySQL using the provided scripts.
4. Run the project on a local server (like XAMPP or MAMP).

## Educational Goal:
The project is designed to learn about encryption techniques and how to securely manage user data in web applications.

