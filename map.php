<?php
//Show the error, if any
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
//create connection
$connection=mysqli_connect('127.0.0.1','root','','map_robot');
if(!$connection)//cheak the connection
{
	echo 'No connection ' . mysqli_connect_errno() ;
	echo "<br>";

}//CLOSE IF
else{
echo 'Yes conection ';
echo "<br>";
}

/*TASK3*/
                                      //FORWARD//
if(isset($_POST['forward']))
{

    echo "<br>";
$my_query="INSERT INTO direc (forward) VALUES('forward')";
if(mysqli_query($connection, $my_query))
{
	
echo "FORWARD Successfully";
}//CLOSE IF
else 
{
	echo "<br>";
	echo "Error :" .$my_query ."<br>" .$connection->error;

}//CLOSE ELSE
}//CLOSE IF
                                       //LEFT//
else if(isset($_POST['leftt']))
 {
    echo "<br>";

    $my_query = "INSERT INTO direc (leftt) VALUES ('left')";
    if(mysqli_query($connection, $my_query))
    {
echo "LEFT Successfully";
    }//CLOSE IF
    else 
    {
	echo "<br>";
	echo "Error :" .$my_query ."<br>" .$connection->error;

    }//CLOSE ELSE

                                //STOP//
}//CLOSE ELSE IF
else if(isset($_POST['stop'])) 
{
    echo "<br>";
    $my_query ="INSERT INTO direc (stop) VALUES ('stop')";
    if(mysqli_query($connection, $my_query))
    {
echo "STOP Successfully";
    }//CLOSE IF
    else 
    {
	echo "<br>";
	echo "Error :" .$my_query ."<br>" .$connection->error;

    }//CLOSE ELSE
}//CLOSE ELSE IF
                                     //RIGHT//
else if(isset($_POST['rightt'])) 
{
    echo "<br>";
    $my_query ="INSERT INTO direc (rightt) VALUES ('right')";
    if(mysqli_query($connection, $my_query))
    {
echo "RIGHT Successfully";
    }//CLOSE IF
    else 
    {
	echo "<br>";
	echo "Error :" .$my_query ."<br>" .$connection->error;

    }//CLOSE ELSE
}//CLOSE ELSE IF
                                    
                                        //BACKWARD//
else if(isset($_POST['backward'])) 
{
    echo "<br>";
    $my_query ="INSERT INTO direc (backward) VALUES ('backward')";
    if(mysqli_query($connection, $my_query))
    {
echo "BACKWARD Successfully";
    }//CLOSE IF
    else 
    {
	echo "<br>";
	echo "Error :" .$my_query ."<br>" .$connection->error;

    }//CLOSE ELSE
}//CLOSE ELSE IF
