<?php
    $date=$_POST['date'];
    $Address=$_POST['Address'];
    $bloodgroup=$_POST['bloodgroup'];

    $conn = new mysqli('localhost', 'root','','blood_buddy');
    if($conn->connect_error)
    {
        die('connection failed : '.$conn->connect_error);

    }
    else{
        $stmt=$conn->prepare("insert into profile(date,Address,bloodgroup)
        values(?,?,?)");
        $stmt->bind_param("sss",$date,$Address,$bloodgroup);
        $stmt->execute();   
        header("location: http://localhost/Blood-Buddy/Blood-Buddy/updation.html");
        //echo "login done successful";
        $stmt->close();
        $conn->close();   
    }
?>