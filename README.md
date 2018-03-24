# CSE5335_Final_Project

The purpose of our website is to provide a single point of contact for UTA students and company recruiters to connect. Students will be able to look for companies that are hiring and conversely companies can search for students who are seeking opportunities. 

The site will have three different kinds of users. A site administrator who is responsible for monitoring the website in order to control spam, inappropriate posts, and the creation/deletion of users. A recruiter who will be able to post jobs with specific requirements and details and review student resumes and applications. Lastly the website will have students who can create a profile which describes their area of interest and skills. A student will also have the ability to upload their resume/cover letters as well as search for job openings. Once a student and recruiter connect, they will have the option to communicate directly.
Additional features will include a recommendation engine, which provides job suggestions based on the skills the student provides and the skills the opening requires. A search engine will also be provided which will allow students to search for jobs based on criteria such as location and salary.
For security purposes, students can only create accounts with a valid UTA email address and recruiters can only create accounts with a valid company email address.


The website is being designed with a modern perspective in mind; it will be adaptive-responsive, so that it can be viewed from any device. It should run on Edge, Chrome, Firefox, and Safari. It will be written in web-based languages: HTML5, CSS, PHP, JavaScript and we will use an SQL database.


To Run the website place the contents of Team5_code in the htdocs of mysql database and follow the below steps

##############
Configure the website to connect to a database by edition the below file
background/dbh.php

Enter the appropriate mysql username and password for the website to be able to connect to the database.

##############
MYSQL DATABASE:
Create a table called "loginsystem"
Run the code from "loginsystem.sql" in loginsystem to generate the tables and populate them with data
