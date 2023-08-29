<?php
    $urgency=$_POST['urgency'];
    $bloodtype=$_POST['bloodtype'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $month=$_POST['month'];
    $day=$_POST['day'];
    $year=$_POST['year'];
    $gender=$_POST['gender'];
    $Occupation=$_POST['Occupation'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $saddress2=$_POST['saddress2'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $postal=$_POST['postal'];
    $weight=$_POST['weight'];
    $pulse=$_POST['pulse'];
    $hb=$_POST['hb'];
    $bp=$_POST['bp'];
    $temp=$_POST['temp'];
    $donated=$_POST['donated'];
    $date=$_POST['date'];
    $activity=$_POST['activity'];
    $diseases=$_POST['diseases'];
    $medicines=$_POST['medicines'];
    $treatment=$_POST['treatment'];

    $conn = new mysqli('localhost', 'root','','blood_buddy');
    if($conn->connect_error)
    {
        die('connection failed : '.$conn->connect_error);

    }
    else{
        $stmt=$conn->prepare("insert into receiver(urgency,bloodtype,firstname,lastname,month,day,year,gender,occupation
        ,number,email,address,saddress2,city,state,postal,weight,pulse,hb,bp,temp,donated,date,activity,diseases,medicines,
        treatment)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssssssssssssssssssssssss",$urgency,$bloodtype,$firstname,$lastname,$month,$day,$year,$gender,$Occupation
        ,$number,$email,$address,$saddress2,$city,$state,$postal,$weight,$pulse,$hb,$bp,$temp,$donated,$date,$activity,$diseases,$medicines,
        $treatment);
        $stmt->execute();   
        header("location: http://localhost/Blood-Buddy/Blood-Buddy/receiver.html");
        //echo "login done successful";
        $stmt->close();
        $conn->close();   
    }
?>