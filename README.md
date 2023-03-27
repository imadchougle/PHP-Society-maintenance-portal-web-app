# PHP-Society-maintenance-portal-web-app

***Abstract***

The integration of a Payment Gateway provides a secure and efficient way to handle online maintenance payments within a society management system. The Payment Gateway allows residents to make payments for their society maintenance using various payment methods such as credit/debit cards, net banking, and wallets, among others. The database integration in the society management system enables society management committees to manage and store payment data securely, which can be used for various purposes such as accounting, reporting, and auditing.
The PHP Payment Gateway Integration and database integration for society maintenance provide a seamless payment experience for residents while enabling society management committees to manage and analyze payment data efficiently.

***INTRODUCTION***

It is imperative for management committees to have a robust payment system that enables residents to pay their maintenance dues efficiently while ensuring data security and regulatory compliance.
The Payment Gateway Integration allows residents to make payments using various payment methods, such as credit/debit cards, net banking, and wallets. The Payment Gateway Integration eliminates the need for residents to make physical payments and offers a convenient payment experience. On the other hand, the database integration allows society management committees to manage payment data securely and use it for various purposes such as accounting, reporting, and auditing.
The integration process involves configuring the payment gateway API, creating payment forms, and handling payment responses. The database integration process involves designing and implementing the database schema, creating database tables, and integrating them with the payment system. The payment data is securely stored in the database, and society management committees can access this data for various purposes.

***Objective***

•	To provide a secure and reliable payment system for residents to pay their society maintenance dues conveniently.
 
•	To enable society management committees to manage payment data efficiently, securely.
 
•	To integrate various payment methods such as credit/debit cards, net banking for residents to make payments easily.
 
•	To ensure seamless integration of the Payment Gateway and database with the society management system and provide an all-in-one solution for society management committees to manage their payment systems effectively.

•	To provide a platform for secretary to manage maintenance requests, monitor progress, and displays payments status of each Room.


![Screenshot (66)](https://user-images.githubusercontent.com/54437743/228023411-138e6e73-d5a6-4ac6-9c61-68c9e384e096.png)

## Steps to Run the project

1. Download Xammp Server portal

2. Extract the folder into xampp > htdocs 

3. Create a instamojo payment account and enter the details in required in pay3.php file, Add your API KEY and Auth Token

4. Create a database named maintenance and a table called "maintenance_tb1", make 4 colums, roomNo, payment_id, payment_status and payment_request_id

5. Now start the Apache and Mysql server from xampp 

6. open your browser and enter the http://localhost/your-folder-name/demo.php

7. Start doing any payment first for testing purpose

8. Once payment successfull check your database, payment status would be updated there

9. Open the secretary.py file from there just enter the room number and you can check the status of payment and update it in database directly 

10. If room number 101 has paid and from secretary portal you make changes to it if you update and enter 00 then go to website and refresh it the payment status would be unpaid

11. Run the flask application behind make sure you have the pdf march_notice in the same directory notice board is integrated in python

12. notice.py is the flask application Notice board button will only run when flask app is running

![Screenshot (68)](https://user-images.githubusercontent.com/54437743/228026183-cdc6758d-a811-4b3e-9be6-352c0f4e06c2.png)


![Screenshot (67)](https://user-images.githubusercontent.com/54437743/228026214-de082cf1-b573-4f49-bfdb-de3d78208003.png)



