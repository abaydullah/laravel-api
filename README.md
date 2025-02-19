## How To Install Project
## Server Requirements
The Laravel framework has a few system requirements. You should ensure that your web server has the following minimum PHP version and extensions:

- PHP >= 8.2
- Ctype PHP Extension
- cURL PHP Extension
- DOM PHP Extension
- Fileinfo PHP Extension
- Filter PHP Extension
- Hash PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PCRE PHP Extension
- PDO PHP Extension
- Session PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension


## How To Deploy



- Download  Project Zip File And Unzip In Your Project Directory.
- copy .env.example and rename to .env file
- now generate key by artisan command (php artisan key:generate)
- Create Database.
- Open .ENV File And Update Database Information.
- migrate Database File (php artisan migrate)
- visit project domain for valet/herd etc (php artisan serve).
- now got to api endpoint. domain/api/
## POST
- Table Structure:
- - id (integer, primary key)
- - title (string)
- - content (text)
- - created_at (timestamp)

- - POST /api/posts
- - -  Body: { "title": "My First Post", "content": "This is my content." }
- - GET /api/posts

## Register
- Table Structure:
- - id (integer, primary key)
- - title (string)
- - password (string, hashed)
- - created_at (timestamp)

- - POST /api/register
-  -  - Body: { "name": "Jane Doe", "email": "jane@example.com", "password": "password123" }

## POST
- Table Structure:
- - id (integer, primary key)
- - title (string)
- - is_completed (boolean, default: false)
- - created_at (timestamp)

- - POST /api/tasks
- - - Body: { "title": "Finish Laravel test" }
- - GET /api/tasks
- - PATCH /api/tasks/1
- - -   Body: { "is_completed": true }

    
