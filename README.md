# Laravel User Authentication Task
A custom Laravel authentication system with profile management.
## Setup Instructions
1. Clone or extract the project.
2. Run:
   ```bash:
   composer install

3.Copy .env.example to .env and configure your DB
4.cp .env.example .env
5.Generate app key :
             php artisan key:generate
6.  Run migrations :
             Run migrations
7.Create storage link :
             php artisan storage:link
8.Start server    :  
             php artisan serve


## Testing    

Visit http://localhost:8000
Register a new user.
Log in.
Go to Dashboard → Create Profile.
Fill the 8-field form (upload image).
View your profile and the list of all profiles.

## Features
Manual Auth (no Breeze/Jetstream)
Form validation
Image upload (stored in public/storage/profiles)
Protected routes via auth middleware
Bootstrap 5 styling
