# PHP DB connector
 You only need to add this connector.php file to your project folder.and require once it. there are already have function to run query and return the result. pass the query as a parameter then it will return the data from the database

How to Connect

First connector.php file to your project folder
then require it your php files
<?php require_once('php-db-connector.php'); ?>

Edit connector.php with your database details
	//Edit this 4 settings
	$DB_HOST='127.0.0.1';  
	$DB_USER='root';
	$DB_PASSWORD='';
	$DB_NAME='login';
 
 How to run data retrieve SQL query
 call the select() with passing parameater as your sql query
 it will return the data from DB table
 
 $query="SELECT * FROM users";
 $user_list=select($query);

 how to show data
 
 while($user=mysqli_fetch_assoc($user_list)){
	 echo $user['username'];
 }

 How to run data insertion,create,delete,update SQL query
 call the insert() function with your query
 it will return the error if have
 
 $query="INSERT INTO user VALUES ('33','gamage','jone','l') ";
 $states=insert($query);
 echo $states;

 
