# Laravel Dashboard Demo

Table of Contents

-   [Install and Running Instructions](#install-and-running-instructions)
    -   [Assumptions](#assumptions)
    -   [Database](#database-mysqlhttpswwwmysqltutorialorggetting-started-with-mysql)
-   [Running Instructions](#running-instructions)

## Instalation Instructions

### Assumptions:

Laravel is already installed on the computer being used to run this.

#### [Database (MySQL)](https://www.mysqltutorial.org/getting-started-with-mysql/):

Feel free to use any database you like. I used MySQL with MacOS so I will include instructions on how I installed it.

Mac OS

```
$ brew install mysql
$ mysql -uroot
sql> CREATE DATABASE dashboard
sql> quit
```

[Windows](https://www.mysqltutorial.org/install-mysql/)

1. Download and run the installer
1. Create the database in the command-prompt

```
D:\ mysql -u root
mysql> CREATE DATABASE dashboard
mysql> quit
```

The database can also be created using [MySQL Workbench](https://www.mysqltutorial.org/getting-started-with-mysql/connect-to-mysql-server/). That will not be covered here

## Running Instructions

```
$ cd ~/path/to/project
$ composer i
$ php artisan serve
```

## Pages

-   [Registration](#registration)
-   [Login](#login)
-   [Homepage](#hompage)

### Registration:

-   first name
-   last name
-   email
-   address
-   password
-   confirm password

### Login:

-   username
-   password

### Hompage:

-   User: Display full name and address
-   Admin: Display name and all registered users

## Other Information

Tailwind CSS was used to style the project
