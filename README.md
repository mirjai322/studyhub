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
- Miraya Jain: Full backend development for website + frontend development -- created relational database on MariaDB system, entry form to record information on database thru signup page thru SQL/PHP, lookup form to extract information from login page thru SQL/PHP, signup and login page HTML/CSS using Water.css classless CSS framework, server-side validation thru PHP, client-side validation using JustValidate JavaScript library, SQL injection attack prevention, documented database setup instruction

 
