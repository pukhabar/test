<?php
	
	$ccode = $_POST['clg'];
	$scode = $_POST['sbj'];
	
	$num = $ccode.$scode;
	
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'pu');
	
	$code=$ccode.'B'.$scode.'0';
	$zero='';
	
	$qs="select * from t where cs = '$num' order by roll asc";
	$n1=mysqli_query($con,$qs);
	$row=mysqli_num_rows($n1);
	echo $code.' <br><br>';
	for($i=1;$i<=$row;$i++)
	{
	$sd = mysqli_fetch_array($n1);
	if($sd['roll']<10)
		$zero='00';
	else if($sd['roll']<100)
		$zero='0';
	else
		$zero='';
	
	echo $code.$zero.$sd['roll'].'&nbsp;&nbsp;&nbsp;'. strtolower($sd['fname']).'<br>';
	} 
	
	 mysqli_close($con);

function test_input($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}
?>
