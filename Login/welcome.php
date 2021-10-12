<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <title>Welcome</title>
    <style>
        h1{
            text-align: center;
        }
        .logout{
            position: absolute;
            top: 7%;
            left: 1%;
        }
        .show{
            position: absolute;
            left: 10%;
            top: 20%;
            border: 2px solid white;
            border-radius: 8px;
            background-color: #FE0101; 
            color: white;
            padding: 0.5%;
            margin-left: 33%;
            margin-top: -4%;
        }
        .add{
            position: absolute;
            left: 20%;
            top: 20%;
            border: 2px solid white;
            border-radius: 8px;
            background-color: #FE0101; 
            color: white;
            padding: 0.5%;
            margin-left: 32%;
            margin-top: -4%;
        }
        button:hover{
            background-color: #D22E2E;
            transition: 0.6s;
        }
    </style>
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    
    <a class="logout" href="logout.php"><button type="button" class="btn btn-primary">Logout</button>
    <a href="../Details/show_details.php"><button type="button" class="show">Show details</button></a>
    <a href="../Details/add_details.php"><button type="button" class="add">Add details</button></a>
</body>
</html>