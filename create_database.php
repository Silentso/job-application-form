<?php
    $create_database = 'create table job_application (' .
    'id int auto_increment primary key,' .
    'firstname varchar(255) not null,' .
    'lastname varchar(255) not null,' .
    'email varchar(255) not null,' .
    'position varchar(255) not null,' .
    '`date` date not null,' .
    'resume_link varchar(2083) not null,' .
    'emp_status varchar(32) not null' .
    ');';
    $connection = mysqli_connect('localhost','root','','job');
    if (mysqli_query($connection, $create_database)) 
    {
        echo $query . '<br>';
        echo 'Successfully created job database.';       
    }
    else 
    {
        echo $query . '<br>';
        echo mysqli_error($connection);
    }
?>