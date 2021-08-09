(DEPRECATED)
# README #

This file is to instruct you installing and successfully running Addax.

### What is this repository for? ###

* Addax is a web dashboard builder.
* Version 1.1.0 release

### Description ###
This will help you build the dashboard you have in mind, once you have specification well defined you're good to start.
It does not require any coding part unless if you want to extend on what's already there. No coding, no DB worries it is all done automatically. Just follow the guidelines  and for any assistance, check at the bottom of this file.

### Features ###
#### User profile management #### 
* Creating account.
* Login and logout.
* View & Update profile.

#### Roles & Privilege management ####
* Create roles.
* Add previleges on created roles.

#### Content management ####
* Create content.
* Navigation links auto generating.
* Data input forms auto generating.
* Content viewing & search.

#### Landing page ####
* Welcome slider section.
* Features/Services section.
* Contact us form (Sending message to the dashboard).

#### Online support () ####
You may need to contact the author on this one
* Visitor monitoring.
* Chatting app. 
* Ticket creating.

#### Bulk SMS (On purchase) ####

### INSTALLATION PREREQUISITES ###

* Apache2 installed
* PHP 5.7 or greater installed
* PostgreSQL

### CONFIGURATION DETAILS ###
After cloning this project to your desired directory[Windows: C:~/xampp/htdocs , Linux: /var/www/html], you need to do the following.  
  
#### Configure the database #### 
* In DB management app (eg:pgAdmin4), create a database.   
* Set environment variable ADDAX_DB with the name of the database you created.  
* Set PGQL_DB_USER and PGQL_DB_PASS in your system environment in accordance of your Postgres credentials.
* Set PGQL_HOST environment variable to "_localhost_"

#### Run the application #### 
After finishing the steps above, you will need to run the app on your local machine.  
* Set OPTS_ENV environment variable to "_local_"
* Set ADDAX_AUTHOR environment variable with any email you want to register with.
* Set ADDAX_PASSCODE environment variable with the password you want to register with.
* Go into your browser and type _localhost/addax/dashboard/views/login.php_.  
* If all was done successfully, you will find a login page.   
* Click on create account
* the email should be the value you set in ADDAX_AUTHOR for you to have super user role
* the password should be the value you set in ADDAX_PASSCODE for you to have super user role
  
There you go, every thing done well.  
### Contribution guidelines ###  
* Adding web services  
* Writing tests  
* Code review  
* Other guidelines  
* Investments  
  
### Who do I talk to? ###  
In case you need help!  
  
* David NIWEWE [phone:+250788353869 , email:davejuelz@gmail.com ]

I hope it becomes useful to you as it has been to me. Feel free to contact me.
