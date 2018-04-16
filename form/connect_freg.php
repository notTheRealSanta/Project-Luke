
<?php
    $username = 'root';
    $password = 'root';
    $dbname = 'Hostel';
    $servername = 'localhost';
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    
    
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $faculty_id=$_POST['faculty_id'];
    $room_no=$_POST['room_no'];
    $dept=$_POST['dept'];
    $email=$_POST['email'];
    $phone_no=$_POST['phone_no'];
   
    
    
    
    
    
    ?>
