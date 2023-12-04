<html>
<head>
    <title>Job Application Form</title>
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
    <form action="response.php" method="get">
        <h2>Job Application Form</h2>
        <label for="firstname">First Name:</label><br>
        <input type="text" name="firstname" id="firstname"><br>
        <label for="lastname">Last Name:</label><br>
        <input type="text" name="lastname" id="lastname"><br>
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email"><br>
        <label for="position">What position are you applying for?</label><br>
        <select name="position" id="position">
            <option value="Front-end Designer">Front-end Designer</option>
            <option value="Software Engineer">Software Engineer</option>
            <option value="PHP Programmer">PHP Programmer</option>
            <option value="Database Analyst">Database Analyst</option>
            <option value="Quality Assurance">Quality Assurance</option>
        </select><br>
        <label for="start_date">Available start date: </label><br>
        <input type="date" name="start_date" id="start_date"><br>
        <label for="resume_link">Provide your resume link: </label><br>
        <input type="url" name="resume_link" id="resume_link"><br>
        <label for="unemployed">What is your current employment status?</label><br>
        <input type="radio" name="emp_status" id="employed" value="employed"><label for="employed">Employed</label>
        <input type="radio" name="emp_status" id="unemployed" value="unemployed"><label for="unemployed">Unemployed</label><br>
        <input type="radio" name="emp_status" id="self-employed" value="self-employed"><label for="self-employed">Self-Employed</label>
        <input type="radio" name="emp_status" id="student" value="student" checked><label for="student">Student</label>
        <br><input type="submit" value="Apply">        
    </form>
</body>
</html>