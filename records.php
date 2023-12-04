<html>
<head>
    <title>Records</title>
    <style>
        body {
            font-family: arial;
            background-color: #E6E6FA;    
        }

        h2 { text-align: center; }

        table {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            color: #001f3f;
        }

        table td, table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        table tr:nth-child(even){background-color: #f2f2f2;}

        table tr:hover {background-color: #ddd;}

        a:link, a:visited {
            color: #001f3f;
            border: 1px solid #001f3f;
            padding: 3px 6px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }

        a:hover, a:active {
            background-color: #001f3f;
            color: white;
        }

        table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #001f3f;
            color: white;
        }
    </style>
</head>
<body>
    <?php
        $connection = mysqli_connect('localhost', 'root', '', 'job');
        $query = 'select * from job_application;';
        $result = mysqli_query($connection, $query);
    ?>
    <h2>Records of Job Appliant</h2>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Date</th>
            <th>Position</th>
            <th>Resume Link</th>
            <th>Employee Status</th>
            <th>Operations</th>
        </tr>
        <?php
            while ($row = mysqli_fetch_assoc($result)) 
            {
        ?>
        <tr>
            <td><?php echo $row['firstname'] . " " . $row['lastname']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['position']; ?></td>
            <td><?php echo $row['resume_link']; ?></td>
            <td><?php echo $row['emp_status']; ?></td>
            <td><a href="update_form.php?id=<?php echo $row['id']; ?>">Update</a> |  
                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
        <?php mysqli_close($connection); ?>
</body>
</html>