<!DOCTYPE html>
<html>
<head>
<meta charset="BIG5">
<title>Insert title here</title>
</head>
<body>
<?php 
	echo $_POST["abc"];
	
	echo $_POST["def"];
	
	echo "<br>";
	$NUMBER=10000;
	$sum=0;
		for($n=1; $n<$NUMBER;$n++){
			$sum=0;
			for($i=1; $i<$n; $i++){
				if($n%$i==0)
					$sum+=$i;
			}
			if($n==$sum)
				echo $n." ";
		}

?>

</body>
</html>