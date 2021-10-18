
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<title>  
		<?php include('vars.php'); echo NOME?> 
		| Home
	</title>
	<style>
	*{
		/*border: 1px solid red;*/
		font-family: tahoma;
	}
	section {
		width: 200px;
		font-size: 20pt;
		float: flex;
		justify-content: center;
		margin: 0 auto;
		
		text-align: ;

	}
	input{
		width: 190px;
		line-height: 30px;
	}
	#submit, #reset{

		padding: 15px ; 
		font-size: 15pt;
		width: auto;
	}
	#logo{
		width: 120px;
		margin: 0 auto;
	}
	form * {
		margin: 10px 0px;
	}
	a {
		font-size: 15pt;
	}
</style>
</head>
<body>
	<section>
		<figure>
			<img src="_imgs/logo.jpg" alt="logo.jpg" id="logo">
		</figure>
		<form action="" method="post">
			<label for="usr">
				User <br>
				<input type="text" name="usr" id="usr" />
			</label> <br>
			<label for="pw">
				Password <br>
				<input type="password" name="pass" id="pass" />
			</label> <br>
			<input type="submit" name="submit" id="submit" value="Log In">
			<input type="reset" name="reset" id="reset" value="Reset">
		</form>
		<a href="#"> Esqueceu seu cadastro? </a>
	</section>
</body>
</html>