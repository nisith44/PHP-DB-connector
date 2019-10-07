<?php 

	//Edit this 4 settings
	$DB_HOST='127.0.0.1';  
	$DB_USER='root';
	$DB_PASSWORD='';
	$DB_NAME='login';

	$connection=mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME);

	if(mysqli_errno($connection)){
		die('database connection error' . mysqli_error());
	}else{
		//echo "connection succesfull";
	}

	//use this function for get data from database
	function select($query)
	{
    	$result=mysqli_query($GLOBALS['connection'],$query);
    	return $result;
	}


	//use this function for data insertion,create,update,delete 
	function insert($query)
	{
    	$result=mysqli_query($GLOBALS['connection'],$query);
    	return mysqli_error($GLOBALS['connection']);
	}


	//use this function for data insertion,create,update,delete 
	function update($query)
	{
    	$result=mysqli_query($GLOBALS['connection'],$query);
    	return mysqli_error($GLOBALS['connection']);
	}


	//use this function for data insertion,create,update,delete 
	function delete($query)
	{
    	$result=mysqli_query($GLOBALS['connection'],$query);
    	return mysqli_error($GLOBALS['connection']);
	}
	

    

 ?>