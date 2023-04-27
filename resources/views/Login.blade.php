<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page in HTML with CSS Code Example</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="../CSS/Login.css">

</head>
<body>
<div class="box-form">
	<div class="left">
		<div class="overlay">
		<div><h1>HomeRentAR.</h1></div>
		<div><br><br><br><br><p>Looking for your next dream rental? Look no further! Our website offers a one-stop-shop <br>
			for finding your perfect place to call home. With a vast selection of rental properties <br>
			available at your fingertips, you can easily filter through options to find the one that<br>
			 best fits your budget and preferences. Plus, our streamlined booking process makes renting <br>
			 quick and hassle-free. <br>
			 <br><br>
			 Don't wait, start your search today and find your dream rental in no time!</p>
			</div>
		
		</div>
	</div>
	
	
		<div class="right">
		<h5>Login</h5>
		<p>Don't have an account? <a href="{{url('SignUp')}}">Create Your Account</a> it takes less than a minute</p>
		<form action="{{url('login')}}" method="post">
			@csrf
			<div class="inputs">
				<input type="email" name="email" placeholder="Email" required>
				<br>
				<input type="password" name="pass" placeholder="Password" required>
			</div>
				
				<br><br>
				
			<div class="remember-me--forget-password">
					
				<p><a href="ForgetPass.html">Forget Password?</a></p>
			</div>
				
				<br>
				<button type="submit">Login</button>
		</form>
	</div>
	
</div>

<script src="../JS/nonEmptyField.js"></script>
</body>
</html>
