# Vehicle-Parking-Management-System-PHP-MySQL

A comprehensive, web-based Vehicle Parking Management System built with PHP and MySQL. This project provides a dual-interface solution for administrators and registered users to efficiently manage parking slots, track vehicle entries and exits, calculate charges, and maintain a complete parking history.

## ✨ Features

*   **Dual-Role Access:**
    *   **Administrator:** Full control over the system. Can manage vehicles, view all records, add/edit vehicle categories, update parking charges, and mark vehicle status (In/Out).
    *   **Registered User:** Can register an account, log in, view their own vehicle parking history, and check the status of their parked vehicles.

*   **Vehicle Management:**
    *   Add new vehicle entries with details like category, company name, registration number, and owner information.
    *   Automatically generate a unique parking number for each new entry.
    *   Automatic timestamping for vehicle `InTime` and `OutTime`.
    *   Update vehicle status and add remarks upon exit.

*   **Category Management:**
    *   Pre-defined categories: Four Wheeler, Two Wheeler, Bicycle.
    *   Admins can dynamically add new vehicle categories.

*   **Parking Charge Tracking:**
    *   Assign and record parking charges for each vehicle session.

*   **Search & Filter:**
    *   Quickly search for vehicles by registration number, owner name, or parking number.
    *   Filter vehicles by their current status (In or Out).

*   **Modern & Responsive UI:**
    *   A clean, modern landing page (`index.php`) designed with CSS Grid and Flexbox.
    *   Fully responsive layout that works on desktops, tablets, and mobile devices.
    *   Admin and User dashboards are built on a Bootstrap 5 framework (`styles.css`) for a professional and consistent look.

## 🛠️ Tech Stack

*   **Backend:** PHP 7.4+
*   **Database:** MySQL / MariaDB
*   **Frontend:** HTML5, CSS3, JavaScript
*   **CSS Framework:** Bootstrap 5 (for admin/user dashboards)
*   **Local Server Environment:** XAMPP / WAMP / LAMP

## 🚀 Installation & Setup Guide

Follow these steps to run the project on your local machine:

**Prerequisites:**
- A local server environment like [XAMPP](https://www.apachefriends.org/) or [WAMP](http://www.wampserver.com/) installed.
- A web browser.

**Step-by-Step Instructions:**

1.  **Download and Extract:**
    *   Download the project zip file.
    *   Extract the contents. You will find a folder named `vpms`.

2.  **Move to Server Root Directory:**
    *   Copy the `vpms` folder and paste it into your server's root directory:
        *   For **XAMPP**: `C:\xampp\htdocs\`
        *   For **WAMP**: `C:\wamp\www\`
        *   For **LAMP**: `/var/www/html/`

3.  **Create Database:**
    *   Open your web browser and go to `http://localhost/phpmyadmin`.
    *   Click on the "New" tab on the left sidebar.
    *   Enter `vpmsdb` as the database name and click "Create".

4.  **Import Database Schema:**
    *   Select the newly created `vpmsdb` database from the left sidebar.
    *   Click on the "Import" tab.
    *   Click "Choose File" and select the `vpmsdb.sql` file from the `SQL` folder inside your extracted project.
    *   Click "Go" to import the tables and sample data.

5.  **Run the Project:**
    *   Open your browser and navigate to `http://localhost/vpms`.
    *   You will see the project's landing page.

> **Note:** You can also register a new user account by clicking on the "User Login" button and then selecting the "Register" option.

## 📊 Database Schema

The project uses a well-structured MySQL database named `vpmsdb` with the following tables:

*   **`tbladmin`**: Stores administrator account information.
*   **`tblregusers`**: Stores registered user account details.
*   **`tblcategory`**: Manages different vehicle categories.
*   **`tblvehicle`**: The core table that logs all vehicle parking sessions, including timestamps, charges, and status.
---

**Enjoy managing your parking with VPMS!**
