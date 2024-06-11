/* Comment SQL 
  Structure Query Language

  Database: Organizes data collection.

  DB handlers: programs that allow to manage the database

  Examples: Access, Microsoft SQL Server, Oracle, SQL Server, Informix, DBASE, AQL Lite, PostgresSQL, MySQL.

  An SQL statement is a code block to work on our BD

  There are two types of statements:

  1) Structured statements: They allow to create, modify or delete records, users and properties in our database.
  2) Data statements: They allow to insert, delete, modify and search data in our database.

*/

CREATE DATABASE my_contacts;

USE my_contacts;

CREATE TABLE contact(
  email VARCHAR(50) NOT NULL,
  name VARCHAR(50) NOT NULL,
  phone VARCHAR(50) NOT NULL,
);