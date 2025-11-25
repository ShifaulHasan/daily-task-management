# Daily Task Management App

![Laravel](https://img.shields.io/badge/Laravel-12-red?style=flat)
![PHP](https://img.shields.io/badge/PHP-8.2-blue?style=flat)
![License](https://img.shields.io/badge/License-MIT-green?style=flat)

A **Laravel 12** project to manage daily tasks with a simple dashboard, allowing users to add, edit, delete, and track their tasks.

---

## Features

- User registration & login
- Dashboard showing **today's tasks**
- Add new task with title and description
- Edit/Delete tasks
- View previous tasks history
- Clean responsive layout with **Tailwind CSS**

---

## Installation

1. Clone the repository:

```bash
Install PHP dependencies:

composer install


Install Node.js dependencies:

npm install
npm run dev


Copy .env.example to .env and configure database:

cp .env.example .env
php artisan key:generate


Manually create the tasks table in your database:

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    date DATE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


Run the project:

php artisan serve


Visit http://127.0.0.1:8000

Usage

Register a new user

Login to access the dashboard

Add new tasks using Add Task

Edit or delete tasks from Today’s Tasks

Check Previous Tasks for history

Folder Structure
app/
├── Http/Controllers/TaskController.php
resources/
├── views/
│   ├── tasks/
│   │   ├── create.blade.php
│   │   ├── edit.blade.php
│   │   ├── history.blade.php
│   │   └── index.blade.php

Technologies

Laravel 12

PHP 8.2

MySQL / SQLite

Tailwind CSS
git clone https://github.com/ShifaulHasan/daily-task-management.git
cd daily-task-management
