<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Add data</title>
</head>
<body>
    <center>
    <div class="main-div">
        <h2>Details of people suffering/suffered from Anemia</h2>
        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Age</th>
                            <th>Disease</th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php

                        include '../Login/config.php';

                        $selectquery = " select * from user_details ";

                        $query = mysqli_query($conn,$selectquery);

                        $nums = mysqli_num_rows($query);

                        while($res = mysqli_fetch_array($query)){
                            ?>

                        <tr>
                            <td><?php echo $res['ID']; ?></td>
                            <td><?php echo $res['name']; ?></td>
                            <td><?php echo $res['email']; ?></td>
                            <td><?php echo $res['age']; ?></td>
                            <td><?php echo $res['disease']; ?></td>
                            <td><?php echo $res['location']; ?></td>
                        </tr>

                        <?php 
                        }
                    ?>
                        
                    </tbody>
                </table>

            </div>
        </div>

    </div>
    </center>

</body>
</html>