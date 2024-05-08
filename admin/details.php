<?php
    $host="localhost";
    $user="root";
    $pass="";
    $dbname="records";

    $id=['id'];

    $conn=mysqli_connect($host,$user,$pass,$dbname);

    if(!$conn){
        die('could not connect: ' . mysqli_connect_error());

    }
    echo "connected succesfully <br>";
   
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="index.css" rel="stylesheet">
</head>
<body>
    <div class="container">

    <form>
    <a href="index.html">register</a> 
       <a href="login.php">login</a> 
    <p>enter your id to access your results</p>
    <input type="text" name="id" >
    <input type="submit">
</form>
       <a href="index.html">register</a> 
       <a href="login.php">login</a> 
    </div>
</body>
</html>