Sam Albano - websys lab 10 - 11/27/2016

I created my postgres database 'albans2websyslab10' in terminal as instructed. In order to use the PHP Postgres API to create tables, I had to edit my php.ini file to allow for pg_connect to work. My install.php file connects the user to the previously created database and creates the table structures from lab 9, checking to see if they already exist. The page, upon success, informs the user all tables have been created. For choice 2, I created a migrate.php file that sets up a connection to my lab 9 mysql database and selects all data from all tables. Then a connection is made with this postgres database and the data is inserted into the tables and displayed in table format for the user. **ISSUE:** for some reason, the data for my 'students' and 'grades' tables would not appear...the 'courses' table merged just fine and shows all of the correct data. Therefore, this issue affected my choice 3, select.php file. Because there is no data being shown in my students table to select from, I simply selected  data from my courses table, which had the correct data migrated from lab 9. I did this so you could at least see I set up the correct select statement and then displayed this info in table format, so again, you could see I had the right idea (just wrong table info due to the error in my previous choice). I know this can grant me full credit for this part, but I hope it at least shows I was on the right track.

I also had an issue with getting phpPgAdmin installed and working correctly...there is a .png file in my lab10 folder that shows the error I was getting when trying to access phpPgAdmin from my web browser. 

*I used http://practicalfoss.blogspot.com/2008/09/how-to-install-postgresql-and.html for help with troubleshooting, but couldn't get it to work.

Therefore, in order to export my database structure and content, I tried doing it through terminal, but ran into problems with that...I apologize. Hopefully by looking at my php files, you can get an idea as to how the database was structured.


**Other sources used during the lab:**

http://php.net/manual/en/function.pg-query.php
http://razorsql.com/articles/postgresql_column_names_values.html
http://www.w3schools.com/php/php_mysql_select.asp
https://www.tutorialspoint.com/postgresql/postgresql_php.htm
http://postgresguide.com/utilities/psql.html#what-is-psql