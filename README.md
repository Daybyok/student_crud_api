# Student CRUD API

A simple REST API built with PHP and MySQL, with a frontend UI.

## Requirements
- XAMPP (Apache + MySQL)
- Postman (for testing)
- Any modern browser (for the frontend)

## Setup
1. Clone this repository into `C:/xampp/htdocs/`
2. Start Apache and MySQL in XAMPP
3. Create the database in phpMyAdmin using the SQL below
4. Open `http://localhost/student_crud_api/index.html` to use the frontend
5. Or test with Postman using the endpoints below

## Database
```sql
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    course VARCHAR(100),
    age INT
);
```

## API Endpoints
| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | /api/read.php | Get all students |
| POST | /api/create.php | Add a student |
| POST | /api/update.php | Update a student |
| POST | /api/delete.php | Delete a student |

## Project Structure

student_crud_api/
├── api/
│   ├── create.php
│   ├── read.php
│   ├── update.php
│   └── delete.php
├── config/
│   └── database.php
├── index.html
└── README.md

## Frontend
A frontend UI is included in `index.html`. It connects directly to the PHP API and supports:
- View all students in a table
- Add a new student
- Edit a student inline
- Delete a student
- Live stats (total students, courses, average age)

Open it at:

http://localhost/student_crud_api/index.html