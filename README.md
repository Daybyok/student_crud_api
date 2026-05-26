# Student CRUD API

A simple REST API built with PHP and MySQL.

## Requirements
- XAMPP (Apache + MySQL)
- Postman (for testing)

## Setup
1. Clone this repository into `C:/xampp/htdocs/`
2. Start Apache and MySQL in XAMPP
3. Import the database using the SQL below
4. Test with Postman

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