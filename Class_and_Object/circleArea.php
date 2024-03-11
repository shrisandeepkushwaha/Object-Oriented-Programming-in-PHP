<?php
class circle_area{
	public function calc($rad){
		$pi = 3.14;
		$area = $pi * $rad * $rad;
		echo "Are of circle is: ".$area;
	}
}

if (isset($_REQUEST['submit'])) {
	$r = $_REQUEST['rad'];

	$obj = new circle_area();
	echo $obj->calc($r);
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="post">
		<table align="left" border="1">
			<tr>
				<td>Enter Radius</td>
				<td><input type="text" name="rad"></td>
			</tr>
			<tr>
				<td align="center" colspan="-2">
					<input type="submit" name="submit" value="click">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>