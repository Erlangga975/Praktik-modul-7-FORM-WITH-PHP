<!DOCTYPE html>
<html>
<head>
	<title>form login</title>
	<style type="text/css">
		body{
	 		background-color: grey;
	 	}
		h1{

	 		 font-size: 40px;
            font-family:fantasy;
            font-style: italic;
            -webkit-text-stroke: 1px black;
            color: white;
            text-shadow:
            3px 3px 0 #000,
            -1px -1px 0 #000,  
            1px -1px 0 #000,
            1px 1px 0 #000,
            1px 1px 0 #000; 
            border-style: solid;
            border-color: black;
            background-color: red;  
            padding: 30px 35px;
        	text-align:center;
		}
		.border{
        	font-family:fantasy;
            font-style: italic;
        	text-align:center;
        	border-style: solid;
            border-color: black;
            background-color: white;

        }  
	</style>
</head>
<body>
	<form action="login.php" method="post">	
		<table align="center">
			<tr align="center">
				<td><h1>LOGIN</h1></td>
			</tr>
		<tr><td>
		<div class="border">
			<table align="center"cellspacing="10">
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="login" value="Log In"></td>
				</tr>
			</table>
		</div>	
		</td>
	</tr>
	</form>
</body>
</html>