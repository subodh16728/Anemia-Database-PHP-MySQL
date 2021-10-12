<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Details</title>
</head>
<body>
        <div class="contact-box">
            <form action="" method="POST">
                <center><h1>Enter Your Details</h1></center>
                <input type="text" class="input-field" name="name"  placeholder="Your name" required>
                <input type="email" class="input-field" name="email"  placeholder="Your email" required>
                <input type="number" class="input-field" name="age"  placeholder="Your age" required>
                <input type="text" class="input-field" name="disease"  placeholder="Disease suffered or suffering" required>
                <textarea type="text" class="input-field textarea-field" name="location"  placeholder="Cured location in detail (Write NA if still needs to be cured)" required></textarea>
                <button type="submit" name="submit" class="btn">Submit details</button>
            </form>
        </div>
</body>
</html>

<?php

include '../Login/config.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $disease = $_POST['disease'];
    $cured = $_POST['location'];

    $insertquery = " insert into user_details(name,email,age,disease,location) 
    values('$name','$email','$age','$disease','$cured')";

    $res = mysqli_query($conn, $insertquery);

    if($res){
        ?>
        <script>
            alert('Data inserted successfully');
        </script>
        <?php
    }else{
        ?>
        <script>
            alert('Data inserted successfully');
        </script>
        <?php
    }
}


?>