<html>
<head>
    <title>Response</title>
    <style>
        * {margin: 0; padding: 0}
        div {
            width: 500px; 
            margin: 0 auto; 
            padding: 30px; 
            font-family: arial; 
            background-color: #E6E6FA;
            color: #001f3f; 
            font-size: 16pt;
        }

        a {
            text-decoration: none;
            color: green;
        }

        button {
            width: 100px; 
            display: block; 
            background-color: #fff; 
            color: #3D9970; 
            font-size: 14pt;
            padding: 5px;
        }

        button:hover {
            background-color: #3D9970; 
            color: #fff;
        }

        p {
            padding: 30px 0;
        }
    </style>
</head>
<body>
<?php
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $email = $_GET['email'];
    $position = $_GET['position'];
    $date = date('Y-m-d', strtotime($_GET['start_date']));
    $resume_link = $_GET['resume_link'];
    $emp_status = $_GET['emp_status'];
    $server = 'localhost';
    $database = 'job';
    $user = 'root';
    $password = '';
    $connection = @mysqli_connect($server, $user, $password, $database);
    $query = "insert into job_application(firstname, lastname, email, position, date, resume_link, emp_status)" 
        . " values('$firstname', '$lastname', '$email', '$position', '$date', '$resume_link', '$emp_status');";
    if (@mysqli_query($connection, $query)) 
    {
        $message = "Hi $firstname! We’re thrilled that you’d like to join us here at Evil Corp." .
            " We’ve now got your application that you sent us about $position and since we have a look " . 
            "through applications as they come in, we’ll be in touch next week if we’d like to meet you " . 
            "for an interview. Unfortunately, days are short and applicants are many so we won’t have time " . "
            to meet everyone. We will let you know by email whether you're be selected for interview or not. " . 
            "Keep in touch on Facebook or <a href='#career'>Career @ Evil Corp</a>!";
        $data = "For the record we've collected following information from your application:<br>" . 
            "<br>Name: $firstname $lastname<br>Email: $email<br>Job Position: $position<br>" . 
            "Start Date: $date<br>Resume Link: <a href='$resume_link'>$resume_link</a><br>" .
            "Employee Status: $emp_status<br>";

        echo "<div>" . 
            "<h2>Thank you for applying! :)</h2>" . 
            "<p>$message</p>" . 
            "<p><i>$data</i></p>" . 
            "</div>";
    }
    else 
    {   
        echo "<div>" .
            "<h2>Database Connection</h2>" . 
            "<p>Database could not be found or connection to database is failed! :(</p>" .
            "<a href='../job-application' style='text-decoration: none;'>" .
            "<button>Try Again</button></a>" .
            "</div>";
    }
?>    
</body>
</html>