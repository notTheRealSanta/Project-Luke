<?php

    $username = 'root';
    $password = 'root';
    $dbname = 'Hostel';
    $servername = 'localhost';
    $conn=mysqli_connect($servername,$username,$password,$dbname);

    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $reg_no=$_POST['reg_no'];
    $room_no=$_POST['room_no'];
    $date_of_birth=$_POST['date_of_birth'];
    $phone_no=$_POST['phone_no'];
    $email=$_POST['email'];
    $street=$_POST['street'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $pin=$_POST['pin'];
    $blood_group=$_POST['blood_group'];
    $medical_conditions=$_POST['medical_conditions'];
    $guardian_name=$_POST['guardian_name'];
    $guardian_phone=$_POST['guardian_phone'];
    $room_no=$_POST['room_no'];

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO student (reg_no, first_name, last_name, date_of_birth, phone_no, email, blood_group, medical_conditions, street, city, state, pin, guardian_name, guardian_phone )
    VALUES ('$reg_no', '$first_name', '$last_name', '$date_of_birth', '$phone_no', '$email', '$blood_group', '$medical_conditions', '$street', '$city', '$state', '$pin', '$guardian_name', '$guardian_phone')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    mysqli_close($conn);

?>
