

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link rel="stylesheet" href="std.css">
</head>
<body>
    
    <div class="title">
       
        <h1>Register Student</h1>
        <p>Register Student Using Form Below</p>
    </div>

    <div class="container">
        <form action="perform.php" method="POST">
            <div class="form_group">
                <label for="">ID</label>
                <input type="text" name="id" id="">
            </div>

            <div class="form_group">
                <label for="">Full Name</label>
                <input type="text" name="name" id="">
            </div>

            <div class="form_group">
                <label for="">Address</label>
                <input type="text" name="address" id="">
            </div>

            <div class="form_group">
                <label for="">Mobile</label>
                <input type="text" name="number" id="">
            </div>

            <div class="form_group">
                <label for="">Class</label>
                <input type="text" name="class" id="">
            </div>

            <div class="form_group">
               <button class="save"  name="insert" type="submit" >Save</button>
            </div>

        </form>
    </div>

    <div class="copy">
        <p>All Rights Reserved @2022 | AbdiSomane School [ <a href="view_students.php" style="text-decoration: none; color:gray;">View Students</a>]</p>
    </div>
</body>
</html>