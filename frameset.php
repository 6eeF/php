
<html>
<head>
<title>Insert title here</title>
</head>
<body>
<?php
    //$x =2;
	function maxa()
	{
		echo func_num_args()."<hr>";
		$array_i = func_get_args();
		
		foreach ($array_i as $aaa)
			echo $aaa.",";
	}
	maxa();
	maxa("1","2","3");
	
	//
	echo "<hr>"."<hr>";
	//
	
	function maxb()
	{
		static $count;
		$count = $count+2;
		echo $count."<hr>";
	}
	maxb();
	maxb();
	
	$c = "maxa";	$c();
	$c = "maxb";	$c();
	if(function_exists($c))	$c();
	
	//
	echo "<hr>"."<hr>";
	//
	
	function f($n)
	{
		if($n ==1 || $n ==0)
			return 1;
		else 
			return f($n-1)+f($n-2);
	}
	echo f(5);
	
	//
	echo "<hr>"."<hr>";
	//
	

	function MS($m)
	{
		$s=1;
		if($m==2 || $m==1){
			return 1;	}
		else{
			if(($m+1)/2%2 == 0){
				MS(($m+1)/2);$s+2;	
				return $s;}
			else if (($m-1)/2*2 == ($m-1)){
				$m-1;MS($m/2);$s++;	}
				

		}
	}echo MS(15);
?>
</body>
</html>