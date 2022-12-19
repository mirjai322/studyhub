# studyhub

Setup Instructions for Macbook 

- Step 1: Install XAMPP. It will be installed under /Applications/XAMPP. 
- Step 2: Use the XAMPP manager to start Apache and MySQL
- Step 3: 
cd /Applications/XAMPP/xamppfiles/htdocs
git clone https://github.com/mirjai322/studyhub.git 

- Step 3: create db and tables by executing line below 
./mariadb -h localhost -u root  < /Applications/XAMPP/xamppfiles/htdocs/studyhub/studyhub.sql 


- Step 4: http:/localhost/studyhub


 
