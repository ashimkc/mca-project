<?php
require_once('logiinvalidator.php');
?>
<html>
<head>
	<title>Contact</title>
	<link rel="stylesheet" href="primary.css"/>
	
	<link href="css/bootstrap.min.css"rel="stylesheet">
</head>
<body>

<?php include('topmenu.php');?>
<p align="right"><a href="index.html" style="color:red">Logout</a></p>
<form>
<table align="center" >
<tr>
<td style="margin-left:50px">Name:	<input type="text" name="name" class="form-control"/></td><br></tr>
<tr><td>Address:	<input type="text" name="address" class="form-control"/></td></tr><br>
<tr><td>Contact:		<input type="number" name="contact" class="form-control"/></td></tr><br>
<tr><td>Description:<textarea name="description" class="form-control"></textarea></td></tr>
<tr><td><input type="submit"class="btn btn-brand" name="submit" value="Apply"/></td><td style="float:right"><input type="reset" name="reset"class="btn btn-brand" value="Reset"/></td>
</tr>
</table>

</form>
</body>

</html>