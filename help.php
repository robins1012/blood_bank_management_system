<?php
    
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $Phone=$_POST['Phone'];
    $Message=$_POST['Message'];

    $conn = new mysqli('localhost', 'root','','blood_buddy');
    if($conn->connect_error)
    {
        die('connection failed : '.$conn->connect_error);

    }
    else{
        $stmt=$conn->prepare("insert into help(Name,Email,Phone,Message)
        values(?,?,?,?)");
        $stmt->bind_param("ssis",$Name,$Email,$Phone,$Message);
        $stmt->execute();   
        header("location: http://localhost/Blood-Buddy/Blood-Buddy/helpline.html");
        //echo "login done successful";
        $stmt->close();
        $conn->close();   
    }
?>