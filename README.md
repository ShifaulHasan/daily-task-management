# 📝 Daily Task Management App

![Laravel](https://img.shields.io/badge/Laravel-12-red?style=flat)
![PHP](https://img.shields.io/badge/PHP-8.2-blue?style=flat)
![License](https://img.shields.io/badge/License-MIT-green?style=flat)

A **Laravel 12** web application to manage daily tasks through a simple dashboard. Users can add, edit, delete, and track their tasks, and look back at their previous tasks history.

---

## ✨ Features

- User registration and login
- Dashboard showing **today's tasks**
- Add a new task with a title and description
- Edit and delete tasks
- View previous tasks history
- Clean, responsive layout with **Tailwind CSS**

---

## 🧰 Tech Stack

| Layer     | Technology            |
|-----------|-----------------------|
| Framework | Laravel 12            |
| Language  | PHP 8.2               |
| Database  | MySQL / SQLite        |
| Styling   | Tailwind CSS          |
| Build tool| Vite                  |

---

## 📁 Folder Structure

```
daily-task-management/
├── app/
│   └── Http/Controllers/TaskController.php
├── resources/
│   └── views/
│       └── tasks/
│           ├── create.blade.php
│           ├── edit.blade.php
│           ├── history.blade.php
│           └── index.blade.php
├── routes/           # Web routes
├── database/         # Migrations
├── public/           # Public assets
└── ...
```

---

## 🚀 Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/ShifaulHasan/daily-task-management.git
   cd daily-task-management
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   npm run dev
   ```

4. **Set up the environment file**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   Then open `.env` and set your database details (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).

5. **Create the `tasks` table** manually in your database:
   ```sql
   CREATE TABLE tasks (
       id INT AUTO_INCREMENT PRIMARY KEY,
       title VARCHAR(255) NOT NULL,
       description TEXT,
       date DATE NOT NULL,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
       updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
   );
   ```

6. **Run the project**
   ```bash
   php artisan serve
   ```
   Visit [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 📖 Usage

1. Register a new user
2. Log in to access the dashboard
3. Click **Add Task** to create a new task
4. Edit or delete tasks from **Today's Tasks**
5. Check **Previous Tasks** to see your history

---



## 🔮 Future Improvements

- Mark tasks as completed
- Task priority and due-time reminders
- Search and filter tasks
- Calendar view

---

## 👨‍💻 Author

**Md. Shifaul Hasan**
GitHub: [@ShifaulHasan](https://github.com/ShifaulHasan)

---

## 📄 License

This project is open-source and available under the [MIT License](LICENSE).
