<html>
<head>
    <title>Form</title>
    <style>
        * { margin: 0; padding: 0; }

        form {
            width: 500px;
            margin: 0 auto;
            padding: 30px;
            background-color: #E6E6FA;
            color: #001f3f;
            font-family: arial;
        }

        h2 {
            padding-bottom: 40px;
            font-size: 24pt;
            text-align: center;
        }

        input, select {
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px #E6E6FA solid;
        }

        select {
            font-size: 14pt;
        }

        label {
            font-size: 16pt;
        }

        input {
            width: 100%;
            color: #3D9970;
            font-size: 16pt;
            padding: 3px;
        }

        option {
            color: #3D9970;
        }

        input[type="radio"] {
            width: 30px;
        }

        input[type="submit"] {
            width: 100px;
            display: block;
            background-color: #fff;
            color: #3D9970;
        }

        input[type="submit"]:hover {
            background-color: #3D9970;
            color: #fff;
        }
    </style>
</head>
<body>
    <?php
        $id = $_GET['id'];
        $connection = mysqli_connect('localhost', 'root', '', 'job');
        $query = "select * from job_application where id=$id";
        $data = mysqli_fetch_assoc(mysqli_query($connection, $query));
    ?>
    <form action="update.php" method="get">
        <h2>Update Job Application Details</h2>
        <label for="firstname">First Name:</label><br>
        <input type="text" name="firstname" id="firstname" value="<?php echo $data['firstname']?>"><br>
        <label for="lastname">Last Name:</label><br>
        <input type="text" name="lastname" id="lastname" value="<?php echo $data['lastname']?>"><br>
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" value="<?php echo $data['email']?>"><br>
        <label for="position">What position are you applying for?</label><br>
        <select name="position" id="position">
            <option value="Front-end Designer" <?php if($data['position']==='Front-end Designer') echo 'selected';?>>Front-end Designer</option>
            <option value="Software Engineer" <?php if($data['position']==='Software Engineer') echo 'selected';?>>Software Engineer</option>
            <option value="PHP Programmer" <?php if($data['position']==='PHP Programmer') echo 'selected';?>>PHP Programmer</option>
            <option value="Database Analyst" <?php if($data['position']==='Database Analyst') echo 'selected';?>>Database Analyst</option>
            <option value="Quality Assurance" <?php if($data['position']==='Quality Assurance') echo 'selected';?>>Quality Assurance</option>
        </select><br>
        <label for="start_date">Available start date: </label><br>
        <input type="date" name="start_date" id="start_date" value="<?php echo $data['date'];?>"><br>
        <label for="resume_link">Provide your resume link: </label><br>
        <input type="url" name="resume_link" id="resume_link" value="<?php echo $data['resume_link'];?>"><br>
        <label for="unemployed">What is your current employment status?</label><br>
        <input type="radio" name="emp_status" id="employed" value="employed" <?php if($data['emp_status']==='employed') echo 'checked';?>><label for="employed">Employed</label>
        <input type="radio" name="emp_status" id="unemployed" value="unemployed" <?php if($data['emp_status']==='unemployed') echo 'checked';?>><label for="unemployed">Unemployed</label><br>
        <input type="radio" name="emp_status" id="self-employed" value="self-employed" <?php if($data['emp_status']==='self-employed') echo 'checked';?>><label for="self-employed">Self-Employed</label>
        <input type="radio" name="emp_status" id="student" value="student" <?php if($data['emp_status']==='student') echo 'checked';?>><label for="student">Student</label>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <br><input type="submit" value="Update">
        <?php mysqli_close($connection); ?>        
    </form>
</body>
</html>