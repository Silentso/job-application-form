<?php
    $id = $_GET['id'];
    $connection = mysqli_connect('localhost', 'root', '', 'job');
    $query = "delete from job_application where id=$id;";
    mysqli_query($connection, $query); 
    mysqli_close($connection);
    header('Location:records.php');
?>