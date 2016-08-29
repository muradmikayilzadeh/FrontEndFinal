<?php
	include "config.php";
	$id = $_GET['id'];
	$sql="SELECT element,value FROM header WHERE id='$id'";
	$query=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<style>
				label{
					color:#AC6972;
				}
				.footer{
					background: #F5F5F5;
					height: 100px;
					margin-top: 50px;
				}
				.submit{
					position: relative;
					top:30px;
					left: -70%;
					z-index: 10;
				}
				.form-control{
					width: 30%;
				}
				form div{
					margin-top: 20px;
					text-align:right;
				}
					form div p{
						padding-top: 5px;
					}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<h1><b>Update a Customer</b></h1>
				<form action="edit.php" method="post">
				<input  type="hidden" name="id" value="<?= $id ?>">
					<div class="col-md-12">
						<p class="col-md-2"><b>Name</b></p>
						<input type="text" class="form-control" value="<?php echo $row['element']; ?>" name="name">
					</div>
					<div class="col-md-12">
						<p class="col-md-2"><b>Email Address</b></p>
						<input type="text" class="form-control" value="<?php echo $row['value']; ?>" name="text">
					</div>					
					<div class="footer col-md-12">
						<input type="submit" class="btn btn-success submit" name="submit" value="Update">
						<input type="submit" class="btn btn-default submit" name="submit2" value="Back">
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
<?php
if (isset($_POST['submit2'])) {
	header('Location:../index.php');
}
?>