# studyhub

Setup Instructions for Macbook 

- Step 1: Install XAMPP. It will be installed under /Applications/XAMPP. 
- Step 2: Use the XAMPP manager to start Apache and MySQL
- Step 3: 
  - cd /Applications/XAMPP/xamppfiles/htdocs
  - git clone https://github.com/mirjai322/studyhub.git 

- Step 4: create db and tables by executing line below 
  - /Applications/XAMPP/xamppfiles/bin/mariadb -h localhost -u root  < /Applications/XAMPP/xamppfiles/htdocs/studyhub/studyhub.sql 


- Step 5: http:/localhost/studyhub
  - login as attempt@example.com and password is attempt123 


-----------
Contributions

- Charlotte Jen: worked on front-end development - page set-up and design, color scheme, html for the home page, general study resources page, and motivation page, main css for full website
- Miraya Jain: 
  - Backend and frontend development
  - converted all html pages to php. Using a common php page to make sure that only authenticated users can access the page else they are redirected to the login page 
  - Created database schema on MariaDB to store user/signup details. Used external water.css stylesheet. 
  - signup page and SQL/PHP logic to store informatio int he database 
  - login page and php logic to lookup form to extract information from login page thru SQL/PHP
  - server-side validation in PHP
  - client-side validation using JustValidate JavaScript library, SQL injection attack prevention,
  - environment setup instruction

 
