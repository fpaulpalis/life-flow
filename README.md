# Life-Flow

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![XAMPP](https://img.shields.io/badge/XAMPP-FB7A24?style=for-the-badge&logo=xampp&logoColor=white)
![Status](https://img.shields.io/badge/status-archived-lightgrey?style=for-the-badge)
![Maintenance](https://img.shields.io/badge/maintenance-no%20longer%20maintained-red?style=for-the-badge)
![School Project](https://img.shields.io/badge/type-school%20project%20%2F%20ITE%20308-blue?style=for-the-badge)

> **⚠️ Archived / No Longer Maintained**
> This repository is a **school activity for ITE 308 - Web Systems and Technologies P3 PeTa & Exam** and is no longer maintained. It is archived for educational and portfolio purposes only. No new features, bug fixes, or support will be provided.

---

### ITE 308 - Web Systems and Technologies P3 PeTa & Exam
**Submitted By: TRIO**
1. Deodora, Don Jasper
2. Neri, Mikael Vladimir
3. Palis, Francis Paul A.

**Submitted to:** Sir Rofer Junio Savella

---

## What the project does

**Life-Flow** is a web-based blood donation and request management platform built with PHP and MySQL.

It provides:
- A public landing page with information and blogs
- Separate login systems for **Users** and **Administrators**
- User registration, login, and profile management
- **Donate Blood** form to register as a donor
- **Need Blood (Receive)** form to request blood
- Admin dashboard to view, manage, and monitor user data, donations, and requests
- Database-driven backend using `life_flow` MySQL database

## Why the project is useful

- Simplifies the process of connecting blood donors and recipients in a local community setup
- Demonstrates core web development concepts: authentication, CRUD operations, session management, and MySQL integration
- Provides a clean example of role-based access (User vs. Admin) for students learning PHP
- Can be used as a foundation for a more advanced blood bank management system

## How users can get started with the project

### Prerequisites
- XAMPP (Apache + MySQL + phpMyAdmin)

### Setup Instructions

1.  **Move Project Folder**
    Move the entire `Life-Flow` folder into the `htdocs` directory of your XAMPP installation.
    > Example path: `C:\xampp\htdocs\Life-Flow`

2.  **Start XAMPP Services**
        - Open the **XAMPP Control Panel**
        - Start both **Apache** and **MySQL** services

3.  **Create Database**
        - Open phpMyAdmin from the XAMPP Control Panel (`http://localhost/phpmyadmin`)
        - Create a new database named `life_flow`
        - Import the `life_flow.sql` file located inside the project folder to set up the schema and data

4.  **Access the Website**
        - Landing Page: `http://localhost/Life-Flow/index.php`
        - Admin Login: `http://localhost/Life-Flow/admin_login.php`

### Login Credentials

**Admin**
    - Username: `admin`
    - Password: `admin`
    
**User**
    - Username: `testuser21`
    - Password: `testuser123`

## Where users can get help with your project

Since this project is **archived and no longer maintained**, official support is not available.

If you're a student trying to run or understand it:
- Check the `life_flow.sql` import and make sure your database name is exactly `life_flow`
- Ensure Apache and MySQL are both running in XAMPP
- Verify the project path is `htdocs/Life-Flow`

For educational questions, you can open an Issue in this repository for reference, but responses are not guaranteed.

## Who maintains and contributes to the project

**Status: Archived - No active maintainer**
Submitted By:
- Deodora, Don Jasper
- Neri, Mikael Vladimir
- Palis, Francis Paul A.

Submitted To: Sir Rofer Junio Savella

---

## Screenshots

### Landing Page
<img width="2880" height="1886" alt="dashboard" src="https://github.com/user-attachments/assets/1c9cb0e3-20b1-4c0f-9146-045143d4a6d4" />

### Blogs
<img width="2880" height="1886" alt="blogs" src="https://github.com/user-attachments/assets/935d9888-9ebc-4787-89fc-ff706757f061" />

### Signup Page
<img width="2880" height="1886" alt="localhost_Life-Flow_signup php" src="https://github.com/user-attachments/assets/29e6e65b-ce8d-4ee9-a355-d3b6de063526" />

### User Login
<img width="2880" height="1886" alt="user login" src="https://github.com/user-attachments/assets/df533f5e-ff7f-4f9f-8fa6-feace76d2b6f" />

### User Profile
<img width="2880" height="1886" alt="localhost_Life-Flow_profile php" src="https://github.com/user-attachments/assets/f2a5146b-bf81-4bf4-a1a8-1df84f57f3ef" />

### Need Blood (Receive) Form
<img width="2880" height="1886" alt="localhost_Life-Flow_receive php" src="https://github.com/user-attachments/assets/3c8aed58-7697-447a-a935-2ccbc6bae8e3" />

### Donate Blood Form
<img width="2880" height="1886" alt="localhost_Life-Flow_donate php" src="https://github.com/user-attachments/assets/bd8c9a24-f0ab-456f-8f30-56d50b5bfbab" />

### Admin Login
<img width="1804" height="1015" alt="login" src="https://github.com/user-attachments/assets/5927d90d-7345-43d6-a609-a394f09ff883" />

### Admin Dashboard
<img width="2880" height="1936" alt="localhost_Life-Flow_admin php" src="https://github.com/user-attachments/assets/6203d45d-08f2-46ac-bd72-f8d3d4759a26" />

### MySQL Database
<img width="843" height="435" alt="image" src="https://github.com/user-attachments/assets/f178ee81-7f9d-40d9-bb1c-1fe50e2fcb90" />
