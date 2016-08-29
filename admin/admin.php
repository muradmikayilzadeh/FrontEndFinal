<?php
session_start();
	if($_SESSION['giris']==true){
		$_SESSION['hazir']=true;
		include "config.php";
}else{
header('Location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style>
		td{
			padding:5px;
		}
	</style>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<h1 class="text-center">Xoş gəlmişsiniz, Admin!</h1>
		<p class="text-center">Düzəlişləri alt hissədən edə bilərsiniz!</p>
		

		<table class="table-striped">
				<?php
					include "config.php";
					$sql="SELECT * FROM header";
					$query=mysqli_query($conn,$sql);
					?>
					<tr>
						<td>Sira</td>
						<td>Element</td>
						<td>Qiymət</td>
						<td>Action</td>
					</tr>
					<?php
					while ($row=mysqli_fetch_assoc($query)) {
					?>
					<tr>
						<?php
						foreach ($row as $key => $value) {
						?>
						<td><?php echo $value; ?></td>
						<?php
						}
						?>
						<td>
							<a href="update.php?id=<?php echo $row["id"]; ?>"><button class="btn btn-success">Update</button></a>
						</td>
					</tr>
					<?php
					}
					?>
				</table>
		
	</div>
</div>
</body>
</html>