<?php
$con = mysqli_connect('localhost','root','','creat_crud');
if(!$con){
die('Error' .mysqli_connect_error());}
else {
 echo 'Done';
}
?>