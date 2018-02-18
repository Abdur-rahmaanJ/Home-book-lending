# Home-book-lending-management-system
Know to which friend you lended books to ! A simple system using PHP and MySQL to fireup on your local machine !

## Requirements
- PHP7 (http://php.net/downloads.php) 
 [installation](https://abdurrahmaanjanhangeer.wordpress.com/2018/02/18/php7-download-and-installing-instructions/)
 [environment](https://abdurrahmaanjanhangeer.wordpress.com/2018/02/16/simple-php-development/)

- MySQL (https://dev.mysql.com/downloads/workbench/)

## Todo
- menupage
- operations page

## Quickstart
PHP > php -S localhost:8000
SQL create table in db
<pre>
CREATE TABLE books (
    ID int NOT NULL,
    name varchar(255) NOT NULL,
    isbn varchar(255),
    friend varchar(255),
    PRIMARY KEY (ID)
);
</pre>

## Contacts
- Init Developer : Abdur-Rahmaan Janhangeer

## Target | Time
- 25 02 HTML ready
- 05 03 storage logic implemented
- 12 03 ready

## Environment : Home PC
as localhost use is intended, don't use the project on a public network as per php requirements
"This web server was designed to aid application development. It may also be useful for testing purposes or for application demonstrations that are run in controlled environments. It is not intended to be a full-featured web server. It should not be used on a public network."


