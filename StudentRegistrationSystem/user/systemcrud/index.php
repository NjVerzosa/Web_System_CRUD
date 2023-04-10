<?php
    session_start();
    require 'connection.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student CRUD</title>
</head>
<style>
    .btn{
        margin-left: 30px;
    }
    </style>
<body>
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Details
                            <a href="create.php" class="btn btn-primary float-end">Add Students</a>
                            <a href="Menu.php" class="btn btn-success btn-sm">Home</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
				                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Birthdate</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                     $query = "SELECT * FROM freshmen";
                                     $query_run = mysqli_query($con, $query);
 
                                     if(mysqli_num_rows($query_run) > 0)
                                     {
                                         foreach($query_run as $student)
                                         {
                                            ?>
                                            <tr>
                                                <td><?= $student['id']; ?></td>
                                                <td><?= $student['name']; ?></td>
                                                <td><?= $student['address']; ?></td>
                                                <td><?= $student['username']; ?></td>
                                                <td><?= $student['password']; ?></td>
                                                <td><?= $student['age']; ?></td>
                                                <td><?= $student['gender']; ?></td>
                                                <td><?= $student['birthdate']; ?></td>
                                                <td><?= $student['status']; ?></td>
                                                <td><img src = "img'. $student['img'] .'"style="width: 100px;height: 100px"></td>
                                                <td>
                                                    <a href="read.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    
                                                    
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>