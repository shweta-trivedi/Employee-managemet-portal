# ems
This project is based on laravel framework.
Admin has all privilege where as employee has certain restriction to access.By default You can register as an employee:
http://127.0.0.1:8000/register


## Installation
This project is for employee management. Employee can register himself and Admin/HR can Manage Employee, Leave and Salary for employee...

## Clone the repo
git clone https://github.com/shweta-trivedi/Employee-managemet-portal

## Composer install
cd Employee-management-portal
composer install

# Database
Ajust the database information, then:

php artisan migrate

# Seed the database:

php artisan db:seed

# Login credentials
Admin HR Account: ['email' => 'shw.team10@gmail.com', 'password' => 'admin123'] <br>
Supervisor Account: ['email' => 'employee1@gmail.com', 'password' => 'employee123'] <br>
Staff Account: ['email' => 'employee2@gmail.com', 'password' => 'employee123'] 



