<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student Create</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Registration Form
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="delete.php" method="POST">

                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Password</label>
                                <input type="text" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Age</label>
                                <input type="number" name="age" class="form-control" required>
                            </div>





                            <div class="mb-3">
                                <label>Gender</label>
                                <select class="form-select" name="gender" required>
                                     <option>--Select--</option>
                                     <option>Male</option>
                                     <option>Female</option>
                                    </select>
                            </div>
                            <div class="mb-3">
                                <label>Birthdate</label>
                                <input type="date" name="birthdate" class="form-control" required required>
                            </div>
                            <div class="mb-3">
                                <label>Status</label>
                                <select class="form-select" name="status" class="form-control" required>
                                <option>--Select--</option>
                                <option value="Single">Single</option>
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
                                <label>Image</label>
                                <input type="file" name="img" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary">Save Student</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>