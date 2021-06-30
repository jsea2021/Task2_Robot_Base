<?php
/*TASK2/SUB TASK4*/

//Show the error, if any
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
//create connection
$connection=mysqli_connect('127.0.0.1','root','','map_robot');
//QUERY
$sql  =mysqli_query($connection,"SELECT * FROM  direc ORDER BY  id  DESC LIMIT 1 ");
//printing
while ( $fetch = mysqli_fetch_row($sql)) {
echo "<br>";
echo "The Direction is  ";
if($fetch[1]){
    echo $fetch[1];
}else if($fetch[2]){
    echo $fetch[2];
}else if($fetch[3]){
    echo $fetch[3];
}else if($fetch[4]){
    echo $fetch[4];
}else if($fetch[5]){
    echo $fetch[5];
}
}
?>