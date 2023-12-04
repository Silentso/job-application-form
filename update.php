<?php
    $id = $_GET['id'];
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $email = $_GET['email'];
    $position = $_GET['position'];
    $date = date('Y-m-d', strtotime($_GET['start_date']));
    $resume_link = $_GET['resume_link'];
    $emp_status = $_GET['emp_status'];
    $connection = mysqli_connect('localhost', 'root', '', 'job');
    $query = "update job_application set firstname='$firstname', lastname='$lastname', " .
        "email='$email', position='$position', `date`='$date', resume_link='$resume_link', " .  
        "emp_status='$emp_status' where id=$id;";
    mysqli_query($connection, $query);
    mysqli_close($connection); 
    header('Location:records.php');
?>