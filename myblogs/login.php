<?php
if(!empty($_GET['msg'])){
	echo $_GET['msg'];
}
?>
<html>
<head>
	<title>Login</title>
	
	<link href="css/bootstrap.min.css"rel="stylesheet">
</head>
<body>
<form method="POST" action="loginhandler.php"/>
<table align="center"style="margin-top:100px" >
<tr>
<td>Username:<input type="text" name="username"placeholder="username" class="form-control"/></td>
<tr><td>Password:<input type="text" name="password" class="form-control"/></td></tr>
<tr ><td><input type="submit" name="submit"value="login" class="btn btn-brand" style="background-color:green"/></td></tr>
</table>
</form>
</body>
</html>
