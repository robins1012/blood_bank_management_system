<?php
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];

    $conn = new mysqli('localhost', 'root','','blood_buddy');
    if($conn->connect_error)
    {
        die('connection failed : '.$conn->connect_error);

    }
    else{
        $stmt=$conn->prepare("insert into register(Name,Email,Password)
        values(?,?,?)");
        $stmt->bind_param("sss",$Name,$Email,$Password);
        $stmt->execute();   
        header("location: http://localhost/Registration.html");
        $stmt->close();
        $conn->close();   
    }
?>