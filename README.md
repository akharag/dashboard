# Laravel Dashboard Demo

Table of Contents

-   [Installation Instructions](#install-and-running-instructions)
    -   [Assumptions](#assumptions)
    -   [Database](#database-mysqlhttpswwwmysqltutorialorggetting-started-with-mysql)
        -   [Mac OS](#mac-os)
        -   [Windows](#windowshttpswwwmysqltutorialorginstall-mysql)
-   [Running Instructions](#running-instructions)
-   [Pages](#pages)
    -   [Registration](#registration)
    -   [Login](#login)
    -   [Homepage](#hompage)
-   [Other Information](#other-information)

## Installation Instructions

### Assumptions:

**Laravel** is already installed on the computer. <br/>
**Composer** is already installed on the computer.
(Optional )**NPM** and **Node** if a user wants to generate their own styles with [Tailwind](#tailwind-css-was-used-to-style-the-project)

### [Database (MySQL)](https://www.mysqltutorial.org/getting-started-with-mysql/):

Feel free to use any database you like. I used MySQL with MacOS so I will include instructions on how I installed it.

##### Mac OS

```
# install using brew
$ brew install mysql
# create database
$ mysql -uroot
sql> CREATE DATABASE dashboard
sql> quit
```

##### [Windows](https://www.mysqltutorial.org/install-mysql/)

1. Download and run the installer
1. Create the database in the command-prompt

```
D:\ mysql -u root
mysql> CREATE DATABASE dashboard
mysql> quit
```

The database can also be created using [MySQL Workbench](https://www.mysqltutorial.org/getting-started-with-mysql/connect-to-mysql-server/). That will not be covered here.

## Running Instructions

```
$ cd ~/path/to/project
$ composer i
$ php artisan migrate --seed
$ php artisan serve
```

## Pages

### Registration:

-   first name
-   last name
-   email
-   address (Single string. Could have split up into multiple values but didn't due to time constaints)
-   password
-   confirm password

### Login:

-   username
-   password

### Hompage:

-   User: Display full name and address
-   Admin: Display name and all registered users
    -   note: Does crude check of user role inside controller to get all registered users. Do to time constriants I couldn't of a better solution. This is most likely an unsafe method of displaying the users for an admin because a regular user could in theory spoof that they are a admin

## Other Information

If the user decided to use the Seeders, then by default one Admin user is created

    username: `admin`
    password: `admin`

and 50 regular users all with the password:

    123456

### Tailwind CSS was used to style the project

If one would like to generate their own tailwind styles run

```
# Create live server that watches changes and will automatically generate utility files
$ npm i && npm run watch
```

Due to time restrains, I did not set up Laravel as an API and React as a front-end. This was my first time deep diving into PHP and Laravel so most of my time was spent learning about both of these things.

There are some minor cross-site reference forgery protections in the login and logout.
