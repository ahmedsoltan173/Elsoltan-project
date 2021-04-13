<?php
//function to create the variable of the db
function Creatdb(){
    $servername="localhost";
    $username="root";
    $password="";
    $dbName="Elsoltan_website";


//creat connection
$con=mysqli_connect($servername,$username,$password);


//Check the connection 

if(!$con){
    die('connection Faild:'.mysqli_connect_errno());
}

//Create Database
$sql="CREATE DATABASE IF NOT EXISTS $dbName";
	if(mysqli_query($con,$sql)){
		$con=mysqli_connect($servername,$username,$password,$dbName);

    $sql="
            CREATE TABLE IF NOT EXISTS project(
            id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(20) NOT NULL,
            section VARCHAR(20),
            number INT(11) ,
            description VARCHAR(300)
        );
    ";

    if(mysqli_query($con,$sql)){
        return $con;
    }else{
        "connect create table";
    }

}else{
    echo"error while creating database".mysqli_error($con);
}

}

?>