<?php require_once('php-db-connector.php'); ?>

<?php 

$query="SELECT * FROM users";
$user_list=select($query);

while($user=mysqli_fetch_assoc($user_list)){
	echo $user['username'];
}

$query="INSERT INTO user VALUES ('33','gamage','kkkkk','l') ";
$states=insert($query);
echo $states;




 ?>