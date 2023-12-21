<html>
	<head>
	</head>
	<body>
		<form action="" method="POST">
		<input type="text" placeholder="X" name="x">
		<input type="text" placeholder="N" name="n">
		<input type="submit" value="Ввод" name="button">
		</form>
		<?php
		if(isset($_POST['button'])){
			main($_POST['n'], $_POST['x']);
		}
		
		function fact($num){
		$result = 1;
			for ($i = 1; $i<=$num; $i++){
			$result *= $i;
			}
		return $result;
		}
		
		function calc($n, $x){
		$sum = 0;
		for ($a = 0; $a <= $n; $a++){
		$sum += (-1)**$a * $x**(2*$a)/fact(2*$a);
		}
		return $sum;
		}

		function main($numn, $numx){
		$res = calc($numn, $numx);
		echo $res;
}
		?>
	</body>
</html>