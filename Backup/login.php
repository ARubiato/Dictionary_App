<!doctype html>
<html>
	<head>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Community Based Dictionary</title>
			
			<link rel = "stylesheet" href = "css/uikit.css"/>
			<link rel = "stylesheet" href = "css/style.css"/>
		</head>

		<body>
			<header>
				<h4 align="center"> Your Web-Based <br/>Community Dictionary!</h4>
			</header>	

				<div class = "Container">
					<div class = "Login" align="center">
						<h3 style ="background-color: white;">Log In</h3>
						<form action="index.php">
						<br/><input type ="text" name = "Username" placeholder="Username" required autocomplete="off">
						<br/>
						<input type="Password" name="Password" placeholder="Password" required>
						<br/>
						<br/>
						<Button class="Button" value="Submit">Login</Button>
						<h5>Don't have account?</h5><button id="ButtonModal">Create one!</button>
						<div class = "modal" id = "myModal">
							<div class = "modal-content">
								<span class = "close">&times;</span>
									<div class = sign-up>
										
									</div>
							</div>
						</div>
						 <!-- Sign up <a href = "sign_up.php">here</a>!</h5> -->
					</form>
					</div>
				</div>

				<script>
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
				</script>

		</body>

</html>