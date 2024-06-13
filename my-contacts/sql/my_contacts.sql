/* Comment SQL 
  Structure Query Language

  Database: Organizes data collection.

  DB handlers: programs that allow to manage the database

  Examples: Access, Microsoft SQL Server, Oracle, SQL Server, Informix, DBASE, AQL Lite, PostgresSQL, MySQL.

  An SQL statement is a code block to work on our BD

  There are two types of statements:

  1) Structured statements: They allow to create, modify or delete records, users and properties in our database.
  2) Data statements: They allow to insert, delete, modify and search data in our database.

  On MySQL there are two types of Engine for tables:
  1) MyISAM - Plane tables as working data in Excel.
  2) InnoDB - Relatable tables as working data in Access.

*/

CREATE DATABASE my_contacts;

USE my_contacts;

CREATE TABLE contacts(
  email VARCHAR(50) NOT NULL,
  names VARCHAR(50) NOT NULL,
  gender CHAR(1) NOT NULL,
  birthday DATE,  
  phone VARCHAR(13) NOT NULL,
  country VARCHAR(50) NOT NULL,
  picture VARCHAR(50),
  PRIMARY KEY(email),
  FULLTEXT KEY search_contact(email,names,gender,phone,country)
) ENGINE= MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE country(
  id_country INT NOT NULL AUTO_INCREMENT,
  country VARCHAR(50) NOT NULL,
  PRIMARY KEY (id_country)
) ENGINE= MyISAM DEFAULT CHARSET=latin1;

INSERT INTO country (id_country, country) VALUES 
  (1, "Colombia"),
  (2, "Mexico"),
  (3, "Peru"),
  (4, "Chile"),
  (5, "Guatemala"),
  (6, "Ecuador"),
  (7, "Venezuela"),
  (8, "Brazil"),
  (9, "Argentina"),
  (10, "Uruguay"),
  (11, "Paraguay"),
  (12, "United States"),
  (13, "Canada"),
  (14, "United Kingdom"),
  (15, "France"),
  (16, "Spain"),
  (17, "Italy"),
  (18, "Germany"),
  (19, "Honduras"),
  (20, "El Salvador"),
  (21, "Costa Rica"),
  (22, "Nicaragua"),
  (23, "Panama"),
  (24, "Cuba"),
  (25, "Dominican Republic"),
  (26, "Haiti"),
  (27, "Jamaica"),
  (28, "Trinidad and Tobago"),
  (29, "Belize"),
  (30, "Guyana"),
  (31, "Suriname"),
  (32, "Bolivia"),
  (33, "Ukraine"),
  (34, "Russia"),
  (35, "Poland"),
  (36, "Czech Republic"),
  (37, "Slovakia"),
  (38, "Slovenia"),
  (39, "Romania"),
  (40, "Bulgaria"),
  (41, "Serbia"),
  (42, "Macedonia"),
  (43, "Montenegro"),
  (44, "Kosovo"),
  (45, "Albania"),
  (46, "Greece"),
  (47, "Cyprus"),
  (48, "Turkey"),
  (49, "Azerbaijan"),
  (50, "Georgia"),
  (51, "Armenia"),
  (52, "Moldova"),
  (53, "Bosnia and Herzegovina"),
  (54, "Kazakhstan"),
  (55, "Uzbekistan");
