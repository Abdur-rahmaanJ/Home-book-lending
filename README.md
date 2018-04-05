# Home-book-lending
(for edu - see issues) Know to which friend you lended books to ! A simple system using PHP and MySQL to fireup on your local machine !

## Requirements
- PHP7 (http://php.net/downloads.php) 
- PHP: [installation](https://abdurrahmaanjanhangeer.wordpress.com/2018/02/18/php7-download-and-installing-instructions/) |
 [environment](https://abdurrahmaanjanhangeer.wordpress.com/2018/02/16/simple-php-development/)

- MySQL (https://dev.mysql.com/downloads/workbench/)

## CSS rules
- using BEM [here](https://abdurrahmaanjanhangeer.wordpress.com/2018/02/18/bem-simple-css-naming-approach/)

## Todo
- menupage
- operations page

## Quickstart
PHP > php -S localhost:8000
SQL create table in db named 'books_lending'
<pre>
CREATE TABLE `books` (
  `id` int NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `isbn` varchar(100) DEFAULT NULL,
  `friend` varchar(100) DEFAULT NULL,
  `owner` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);

CREATE TABLE `user` (
  `id` int NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);
</pre>

You'll need to register an account for yourself first before you can use the program

## Contacts
- Init Developer : [Abdur-Rahmaan Janhangeer](https://github.com/Abdur-rahmaanJ)
- Other : [maz](https://github.com/mynameismaz)

## Target | Time
- 25 02 HTML ready
- 05 03 storage logic implemented
- 12 03 ready

## Environment : Home PC
as localhost use is intended, don't use the project on a public network as per php requirements
"This web server was designed to aid application development. It may also be useful for testing purposes or for application demonstrations that are run in controlled environments. It is not intended to be a full-featured web server. It should not be used on a public network."


