<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-4 offset-4 text-center">
				<?php
				if(isset($_POST['btn-tong'])){
						if($_POST['a']==null ||$_POST['b']==null){
							echo "Nhập lại giá trị";
						}else{

							$tong =$_POST['a'] +$_POST['b'];
							echo $tong;
						}
						
				}
				if(isset($_POST['btn-hieu'])){
						if($_POST['a']==null ||$_POST['b']==null){
							echo "Nhập lại giá trị";
						}else{

							$tong =$_POST['a'] -$_POST['b'];
							echo $tong;
						}
						
				}
				if(isset($_POST['btn-tich'])){
						if($_POST['a']==null ||$_POST['b']==null){
							echo "Nhập lại giá trị";
						}else{

							$tong =$_POST['a'] *$_POST['b'];
							echo $tong;
						}
						
				}
				if(isset($_POST['btn-thuong'])){
						if($_POST['a']==null ||$_POST['b']==null){
							echo "Nhập lại giá trị";
						}elseif ($_POST['b']==0) {
							echo "Khong the thuc hien phep chia cho 0";
						}else{
							
							$tong =$_POST['a'] /$_POST['b'];
							echo $tong;
						
						}
						
				}
				?>
			</div>
		</div>
		<div class="row">
			<div class="col-4 offset-4">
				<form action="" method="POST">
					<div class="form-group">	
						<input type="text" class="form-control" id="" name="a" placeholder="Nhập giá trị a">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="" name="b" placeholder="Nhập giá trị b">
					</div>
					<div class="form-group">
						<button type="submit" name="btn-tong" class="btn btn-info">Tổng</button>
						<button type="submit" name="btn-hieu" class="btn btn-info">Hiệu</button>
						<button type="submit" name="btn-tich" class="btn btn-info">Tích</button>
						<button type="submit" name="btn-thuong" class="btn btn-info">Thương</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>