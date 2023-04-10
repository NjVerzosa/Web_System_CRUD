<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
.btn{
background-color: white;
}
</style>
<body>

     <h1>Welcome, <?php echo $_SESSION['name']; ?></h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="btn">
<a href="indexClone.php" class="btn btn-info btn-sm">ADMIN</a>&nbsp;&nbsp;&nbsp;
<a href="user/systemcrud/Menu.php" class="btn btn-info btn-sm">STUDENT</a>&nbsp;&nbsp;&nbsp;
<a href="MessageUs.php" class="btn btn-info btn-sm">MESSAGE</a>
</div>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>