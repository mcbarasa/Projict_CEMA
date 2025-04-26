# C3MA Health Programing Clients and Health Programs

## Project Overview and its Purpose
Build a web-based system to help doctors manage health programs and enroll clients.

## Key Features
Register clients
Create health programs
Enroll clients in programs
View and expose client profiles via API

## The System Design Overview
Models: User, Client, Program
Controllers: Handle logic and routing eg UserController, ProgramController, ClientController and the ApiClientController
Blade Views: HTML UI for forms and lists

## Some of the Model used and their Relationships
Assumed the technique for the Programs to be assigned directly to clients via client_program pivot table
Relationships:
Client → belongsToMany(Program)
Program → belongsToMany(Client)

## Some of the Key Features & Pages
Home: Overview of the site
Programs: List & create programs
Clients: Register, view, and manage clients
Contact: organisations contact info and details

## Authentication: 
A user is able to Login, Register and also reset passwords Reset Password

## Results in the API profile returned
Client profile including name, email, gender, DOB, and enrolled programs.

## Technology Stack used
Framework: Laravel (PHP)
Frontend: HTML, CSS (Bootstrap-based) and Javascript
Database: MySQL
API Format: JSON
Tools used: Laravel Artisan

## Testing the API
Employed the use of API that is helps in accessing the profiles of the users and clients registered in the system and outputting the data in the form of a .json file format
For example using localhost
    GET /api/clients/1 that is localhost/api/clients/1

## Some of the most noticeable Observations
It is a simple result

API successfully returns structured client data

Easy to extend (authentication, search filters, etc.)

## Proposed Updates, Upgrades and Future Improvements
Add API authentication (e.g., Laravel Sanctum) and also adding more features eg security and error control which was limited due to time constraints.

Added  user, client and program filtering which is done through the UserController

Mobile-friendly UI with responsive layout

## Procedure for Cloning and Running a Laravel Project
git clone {repo-url} ->clone the repository
cd repo-folder -> move into the project folder
composer install -> installs all the laravel php packages
cp .env.example .env -> this contains the environment details that is database information
php artisan key:generate -> generate the application key
(edit .env for database) -> edit the database info that is database name,username and password
php artisan migrate -> run migrations to create tables
php artisan serve ->Laravel will run at: http://127.0.0.1:8000