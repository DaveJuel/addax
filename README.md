# README #

This file is to instruct you installing and successfully running Addax.

### What is this repository for? ###

* Addax is a web dashboard builder.
* Version 1.0.0 beta

### Description ###
This will help you build the dashboard you have in mind, once you have specification well defined you're good to start.
It does not require any coding part unless if you want to extend on what's already there. No coding, no DB worries it is all done automatically. Just follow the guidelines  and for any assistance, check at the bottom of this file.

### Features ###
* User profile management 
- Creating account
- Login and logout
- View & Update profile

* Roles & Privilege management
- Create roles
- Add preveleges on created roles

* Content management
- Create content
- Navigation links auto generating
- Data input forms auto generating
- Content viewing & search

* Landing page
- Welcome slider section
- Features/Services section
- Contact us form (Sending message to the dashboard)

* Online support 
- Visitor monitoring
- Chatting app 
- Ticket creating

* Bulk SMS (On purchase)

### INSTALLATION PREREQUISITES ###

* Apache2 installed
* PHP 5.7 or greater installed
* MySQL

### CONFIGURATION DETAILS ###
After cloning this project to your desired directory[Windows: C:~/xampp/htdocs , Linux: /var/www/html], you need to do the following.  
  
* Configure the database  
-> In DB management app (eg:phpmyadmin, workbench,...), create a database and name it _addax_.   
-> Import the database(addax.sql) from Addax root folder, to your newly created database.  
-> Set DB_USER and DB_PASSWORD in your system environment in accordance of your MySQL credentials.

* Run the application  
After finishing the steps above, you will need to run the app on your local machine.  
-> Go into your browser and type _localhost/addax_.  
-> If all was done successfully, you will find a login page.   
-> Use admin as username and test as password.  
  
There you go, every thing done well.  
### Contribution guidelines ###  
  
* Writing tests  
* Code review  
* Other guidelines  
* Investments  
  
### Who do I talk to? ###  
In case you need help!  
  
* David NIWEWE [phone:+250788353869 , email:davejuelz@gmail.com ]