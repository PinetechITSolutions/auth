<?php
include_once "function.php";
$insertdata = new DB_con();
if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $date_of_birth = $_POST['date_of_birth'];
    $sql = $insertdata->insert($first_name, $last_name, $email, $password, $date_of_birth);
    if ($sql) {
        echo "<script>alert('Data inserted');</script>";
    } else {
        echo "<script>alert('Data not inserted');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title></title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navbar-header">
        <a class="navbar-brand" rel="home" href="#"></a>
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
	</div>

</nav>

<div class="container-fluid">


 <!--/left-->

  <!--center-->
  <div class="col-sm-6">
    <div class="row">
      <div class="col-xs-12">
        <h3>Form</h3>
		<form name="insert" action="" method="post">
       <table width="100%"  border="0">
  <tr>
    <th width="26%" height="60" scope="row">First Name :</th>
    <td width="74%"><input type="text" name="first_name" value="" class="form-control" required /></td>
  </tr>
  <tr>
    <th height="60" scope="row">Last Name :</th>
    <td><input type="text" name="last_name" value="" class="form-control" required /></td>
  </tr>
  <tr>
    <th height="60" scope="row">Email :</th>
    <td><input type="email" name="email" value=""  class="form-control" required /></td>
  </tr>
  <tr>
    <th height="60" scope="row">Password :</th>
   <td><input type="password" name="password" value=""  class="form-control" required /></td>
  </tr>
  <tr>
    <th height="60" scope="row">Date of birth :</th>
   <td><input type="date" name="date_of_birth" value=""  class="form-control" required /></td>
  </tr>
  <tr>
    <th height="60" scope="row">&nbsp;</th>
    <td><input type="submit" value="Submit" name="submit" class="btn-primary" /></td>
  </tr>

</table>

     </form>

      </div>
    </div>
    <hr>


  </div><!--/center-->
</div><!--/container-fluid-->
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
