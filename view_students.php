<?php
include 'operation.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Students</title>
    <link rel="stylesheet" href="./bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="title">
        <h1>All Students</h1>
        <p>View All The Students In The School</p>
    </div>
<div class="con_table">
    <table class="table table-bordered w-75">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Mobile</th>
                <th>Class</th>
                <th>Actions</th>
              
            </tr>
        </thead>
        <tbody>
           <?php  
            echo Cruds::ReadData();
           ?>
        </tbody>
    </table>

    <div class="backButton">
        <a href="student.php" style=" color: rgb(144, 143, 143);
    font-family: poppins;
    font-weight: 640;
    text-decoration: none;">Add Student</a>
    </div>
</div>
</body>
</html>