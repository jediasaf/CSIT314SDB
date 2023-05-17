# CSIT314SDB
The repo for web app design for SDB


Recommended System:
Windows 10 22H2

Required Softwares
1. xampp
2. An internet browser

Installation guide for Xampp
1. Head to this link https://www.apachefriends.org/ 
2. Download xampp for windows (8.2.4)
3. Check the box for MySQL and phpMyAdmin
4. Navigate to C:/xampp or where you install xampp too
5. Go into the htdocs folder and paste the Github Folder from the zip folder into the htdocs
6. The folder should now look something like this c:/xampp/htdocs/Github/ inside this directory it should have the following folders, CSS, CSV Files and Images
7. Open up this file c:/xampp/htdocs/index.php edit the $uri to '/Github/HomePage SDB.php'
8. Start both the apache server and the mysql server   
9. go to localhost/phpmyadmin
10. create a new db with the following details
    name: testdb
    collation: utf8_general_ci   
11. After the database has been created navigate into the database
12. click on import on the top tab

13. Import the file under Github/SQL/testdb.sql

if theres an error do the step indicated below instead

13. import every csv file except UseDBPlaintext.csv into the database using the following method
    a. choose file
    b. select the file to import
    c. scroll to the bottom of the file and enable "the first line of the file contains the table column names" undere format-specific options:
    d. repeat the steps for all the files


If there is problem starting up mysql server due to port being occupied
change the port number to 3307

