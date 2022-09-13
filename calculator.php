<!--
 ***   ***        ****             *   *          ***   ***
***** *****       *   *            *   *         ***** *****
***********       *   *            ** **         ***********
 *********        ****     *****   * * *          *********                                            
  *******         * *              *   *           *******
   *****          *  *             *   *            *****
    ***           *   *            *   *             ***
     *                                                *
-->

<?php
if(isset($_POST['op'])){
	$n1=$_POST['n1'];
	$n2=$_POST['n2'];
	$op=$_POST['op'];
	if($op=="+")
		$re=$n1+$n2;
	else if($op=="-")
		$re=$n1-$n2;
	else if($op=="x")
		$re=$n1*$n2;
	else if($op=="/")
		$re=$n1/$n2;
}?>
<html>
<head>
<title>calculator</title>
	</head>
	
<body>
<div >
<form method="post" action="">
<h1>Simple Calculator</h1>
<br>
First Number:<input name="n1" value="<?php echo $n1; ?>">
<br>
Second Number:<input name="n2" value="<?php echo $n2; ?>">
<br>
<input type="submit" name="op" value="+">
<input type="submit" name="op" value="-">
<input type="submit" name="op" value="x">
<input type="submit" name="op" value="/">
<br>
<br>Result: <input type='text' value="<?php echo $re; ?>"><br>
</form>
	</div>
</body>
</html>