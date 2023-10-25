<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user_type = $_POST['user_type'];

    //database connection
    $conn = new mysqli('localhost', 'root', '', 'test');
    if($conn->connect_error){
        die('Connection Failed : ' $conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(name, email, password, user_type) values(?, ?, ?, ?)");
        $stmt->bind_param("ssss",$name, $email, $password, $user_type);
        $stmt->execute();
        echo "Registration Successfully...";
        $stmt->close();
        $conn->close();
    }
?>