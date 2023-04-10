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

    <title>Student Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Edit 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM freshmen WHERE id='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                <form action="delete.php" method="POST">
                                    <input type="hidden" name="student_id" value="<?= $student['id']; ?>">

                                    <div class="mb-3">
                                        <label>Student Name</label>
                                        <input type="text" name="name" value="<?=$student['name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Student Address</label>
                                        <input type="text" name="address" value="<?=$student['address'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Student Username</label>
                                        <input type="text" name="username" value="<?=$student['username'];?>" class="form-control">
                                    </div>




                                    
                                    <div class="mb-3">
                                        <label>Student Password</label>
                                        <input type="text" name="password" value="<?=$student['password'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Student Age</label>
                                        <input type="number" name="age" value="<?=$student['age'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Student Gender</label>
                                        <select class="form-select" name="gender" value="<?=$student['gender'];?>" class="form-control">
                                     <option>--Select--</option>
                                     <option>Male</option>
                                     <option>Female</option>
                                    </select>
                                    </div>
                                    <div class="mb-3">
                                        <label>Student Birthdate</label>
                                        <input type="date" name="birthdate" value="<?=$student['birthdate'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Student Status</label>
                                        <select class="form-select" name="status" value="<?=$student['status'];?>" class="form-control">
                                
                                <option>--Select--</option>
                                <option value="Singel">Single</option>
                                <option value="In a Relationship">In a Relationship</option>
                                <option value="Engaged">Engaged</option>
                                <option value="Married">Married</option>
                                <option value="Divorce">Divorced</option>
                                <option value="In a Relationship">In a civil partnership</option>
                                <option value="In a Domestic Partner">In a domestic partnership</option>
                                <option value="In an Open Relationship">In an open relationship</option>
                                <option value="It's_complicated">It's Complicated</option>
                                <option value="Separated">Separated</option>
                                <option value="Widowed">Widowed</option>
                                    </div>
                                    <div class="mb-3">
                                        <label>Student Image</label>
                                        <input type="file" name="image" value="<?=$student['img'];?>" class="form-control">
                                    </div>
                                   
                                    <div class="mb-3">
                                        <button type="submit" name="update_student" class="btn btn-primary">
                                            Update Student
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>