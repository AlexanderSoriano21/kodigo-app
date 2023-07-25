-- Active: 1689383779020@@127.0.0.1@3306@kodigo

USE kodigo;

SELECT * FROM bootcamps;

INSERT INTO bootcamps (title, description, start_bootcamp, end_bootcamp, modules)
VALUES ("Desarrollo con JavaScript", "Aprender JavaScript", "2023-07-20", "2023-09-30", 5);

INSERT INTO bootcamps (title, description, start_bootcamp, end_bootcamp, modules)
VALUES ("Desarrollo con PHP", "Aprender PHP", "2023-07-20", "2023-10-30", 5);

INSERT INTO bootcamps (title, description, start_bootcamp, end_bootcamp, modules)
VALUES ("Desarrollo con C++", "Aprender C++", "2023-08-20", "2023-11-30", 5);

INSERT INTO bootcamps (title, description, start_bootcamp, end_bootcamp, modules)
VALUES ("Desarrollo con C#", "Aprender C#", "2023-08-15", "2023-10-10", 5);