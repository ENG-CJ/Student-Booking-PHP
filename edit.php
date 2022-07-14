<?php

if (isset($_GET['name'])){
    $id=$_GET['id'];
    $name=$_GET['name'];
    $address=$_GET['address'];
    $mobile=$_GET['mobile'];
    $class=$_GET['class'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
    <div class="title">
        <h1>Update  Student</h1>
        <p>Update Student Using Form Below</p>
    </div>

    <div class="container">
        <form action="perform.php" method="POST">
            <div class="form_group">
                <label for="">ID</label>
                <input type="text" name="id" id="" value="<?php  print $id?>">
            </div>

            <div class="form_group">
                <label for="">Full Name</label>
                <input type="text" name="name" id="" value="<?php  print $name?>">
            </div>

            <div class="form_group">
                <label for="">Address</label>
                <input type="text" name="address" id="" value="<?php  print $address?>">
            </div>

            <div class="form_group">
                <label for="">Mobile</label>
                <input type="text" name="number" id="" value="<?php  print $mobile?>">
            </div>

            <div class="form_group">
                <label for="">Class</label>
                <input type="text" name="class" id="" value="<?php  print $class?>">
            </div>

            <div class="form_group">
               <button class="save" name="update" type="submit" >Edit</button>
            </div>

        </form>
    </div>

    <div class="copy">
        <p>All Rights Reserved @2022 | AbdiSomane School</p>
    </div>
</body>
</html>