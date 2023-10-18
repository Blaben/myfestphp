<?php
// $you = 1;
// $me = "2";

// echo "$you". " ". "$me \n";
// print $you . "+". $me;


// echo gettype($you); //"\n";
// //echo var_dump($me);


// $foo = 'Bob';
// $bar = &$foo;
// $bar = "My name is $bar";
// echo $bar;
echo $foo;

$host = "localhost";
$username = "root";
$password = "";
$database = "pqms";

//creating the connection
$conn = new mysqli($host, $username, $password, $database);

//checking the connection if it is connected
if($conn -> connect_error){
    die("Connection to the Server failed :" . $conn->connect_error);
}

echo "Connected to Sever"
?>