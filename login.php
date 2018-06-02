<!doctype html>
<html>
	<head>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> <?php echo "Login - Dictionary" ?></title>
			
			<link rel = "stylesheet" href = "css/uikit.css"/>
			<link rel = "stylesheet" href = "css/style.css"/>
		</head>

		<body>
			
			<!-- <header style="height: 50%; position: relative;">
				<h4 style="text-align: center;">This is a header. Heheheh</h4>
			</header>
 -->				<div class = "Container">
					<div class = "login_bg">
				<img src = "img/login_bg.jpg"/ style="width: 100%; height: auto; position: relative;">
					<div class = "Login_intro">
						<div class = "L_information">
							<h1>Welcome</h1>
							<p style="font-size: 25px; color: #858585;">This Web-Based Community Dictionary is an application in which it allows the community to create their own type of dictionary at their own interest.  <br/>This application also allows you to view other dictionaries created by other users.</p>
							<p> What are you waiting for?! <b>CREATE YOUR OWN DICTIONARY!</b> </p>
						</div>
					</div>

					<div class = "Login_form">
						<form method="get" action="index.php">
								<div class = "Login_body">
									<h3 style="margin-top: -1">Log In to Your Account</h3>	
									<input type ="text" name="uname" placeholder="Username" required autocomplete="off">
									<input type = "password" name="pwd" placeholder = "Password" required>
									<br/>
									<button class = "Button" value="submit" href = "index.php" style = "cursor: pointer;">Log In</button>

								</div>
								<div class = "Login_footer">
								<h5 style="text-align: center;">Don't have an account? Sign up<a href="sign_up.php" style="color:#4c4c4c;"> here</a>!</h5>
								</div>
							</form>
					</div>
				</div>
			</div>
		</body>

</html>	







<!-- <script>
					var modal = document.getElementById('modal'); /* gets the modal*/
					var btn = document.getElementById("ButtonModal"); /*gets the button for modal*/
					var span = document.getElementByClassName("Close")[0]; /*gets the <span> element that closes the modal*/
					btn.OnClick = function() {
						modal.style.display = "block"; //when the user clicks to open the modal
					}
					span.onClick = function()  {
						modal.style.display = "none";
					}

					window.onClick = function(event) {
						if (even.target == modal) {
							modal.style.display = "none";
						}
					}
				</script> -->