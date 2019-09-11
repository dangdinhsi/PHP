
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
	<div class="container">
		<div class="row">
			<div class="col-4 offset-4">
				<?php 
$so1=$so2=$tong=$hieu=$tich=$thuong='';
if(!empty($_POST)){
	if ($_POST['so1'] =='' || $_POST['so2']=='') {
		echo "nhap lai gia tri";
	}else{
		$so1 =$_POST['so1'];
		$so2 =$_POST['so2'];
		if(!empty($_POST['cong'])){
			$tong =$so1+$so2;
			echo $tong;
		}
		if(!empty($_POST['tru'])){
			$hieu =$so1-$so2;
			echo $hieu;
		}
		if(!empty($_POST['nhan'])){
			$tich =$so1*$so2;
			echo $tich;
		}
		if(!empty($_POST['chia'])){
			if($so2==0){
				echo "khong the lam phep chia cho so 0";
			}else{
				$thuong =$so1/$so2;
				echo $thuong;
			}
			
		}
	}
}
?>
			</div>
		</div>
		<div class="row">
			<div class="col-4 offset-4">
			<form action="" method="POST">
		<div class="form-group">
			<input type="text" class="form-control" name="so1" id="" value="<?=$so1?>">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" name="so2" id="" value="<?=$so2?>">
		</div>
		<input type="submit" name="cong" value="CONG">
		<input type="submit" name="tru" value="TRU">
		<input type="submit" name="nhan" value="NHAN">
		<input type="submit" name="chia" value="CHIA">
	</form>
		</div>
		</div>
		
	</div>
</body>
</html>