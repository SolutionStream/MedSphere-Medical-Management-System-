# MedSphere Medical Management System

A web-based application designed to modernize and streamline the operations of a medical clinic. MedSphere replaces traditional paper-based record-keeping with a secure, efficient, and user-friendly digital platform.

## Key Features

- Multi-role access: administrators, doctors, lab assistants, pharmacists, and receptionists
- Secure management of patient, doctor, and staff records (including medical histories, prescriptions, and lab reports)
- Health tracker for BMI, weight, blood sugar, blood pressure, and cholesterol
- Digital prescription management between doctors and pharmacists
- Appointment and booking management
- Cloud-based data storage for enhanced security and reliability
- User-friendly interface designed for ease of use without technical training

## Technical Highlights

- Built with PHP, MySQL, HTML, CSS, JavaScript, and Bootstrap
- Follows Agile (Kanban) development methodology
- Robust security, data integrity, and privacy measures
- Designed for scalability, maintainability, and high performance

## Project Objectives

- Digitize all medical records to reduce paper usage and improve efficiency
- Enhance the security and accessibility of sensitive patient information
- Enable quick access to patient histories and seamless transfer of records between doctors
- Improve clinic workflow and patient care through integrated management tools

## Setup Instructions

1. **Install XAMPP**  
   Download and install [XAMPP](https://www.apachefriends.org/index.html) for your operating system.

2. **Start Services**  
   Open XAMPP Control Panel and start **Apache** and **MySQL**.

3. **Project Files**  
   Copy or clone all project files into `C:\xampp\htdocs\MedSphere-Medical-Management-System`.

4. **Database Setup**  
   - Open your browser and go to `http://localhost/phpmyadmin`
   - Create a new database named `medsphere_db`
   - Import the `medsphere_db.sql` file from the project’s database folder

5. **Run the Application**  
   Open your browser and visit:  
   `http://localhost/MedSphere-Medical-Management-System`

6. **Default Login**  
   - **Admin Username:** admin  
   - **Admin Password:** admin123

## Main Project Folders

- `assets` – General assets
- `css` – Stylesheets
- `fonts` – Font files
- `images` – Image assets
- `js` – JavaScript files
- `loginMain` – Login system
- `phpmailer` – Email functionality
- `rs-plugin` – Additional plugins

## Technologies Used

- PHP
- MySQL
- HTML
- CSS
- Bootstrap
- JavaScript

---

Enjoy using MedSphere! For any issues or questions, please open an issue in this repository.
