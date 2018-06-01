<!doctype html>
<html>
	<head>
			<title> Community Based Dictionary</title>
			
			<link rel = "stylesheet" href = "css/uikit.css"/>
			<link rel = "stylesheet" href = "css/style.css"/>
		</head>

		<body>
			<header style="margin:auto;">
					<h4 align="center" > Your Web-Based <br/>Community Dictionary!</h4>
					<!-- <h5 align="right" style="background-color: white;"><a href = "login.php">Logout</a></h5> -->
			</header>	
				<div class = "Indx_Container">
					<div class = "Indx_Content">
						<div class = "navi">
							<Button class = "Button1" value ="submit">Add a Dictionary</Button>
							<Button class = "Button1" value = "submit">View Dictionaries</Button>
							<Button class = "Button1" value = "submit">Manage Users </Button>
							<Button class = "Button1" value = "submit">Print </Button>
						</div>	
						<div class = "Dashboard">
							<h2>CREATE YOUR OWN DICTIONARY!</h2>
							<h5> Enter information below: </h5>
							Title: <input type="text" name="Title" placeholder="Ex: My Dictionary" required>
							Type: <input type="text" name="Type" placeholder="Specialized, Defining, etc...">
							Language : <input type="text" name="Language" placeholder="English, Spanish, etc...">
						</div>

					</div>
				</div>

				<footer style = "margin:auto;">
					<h5> &copy; LekiLad 2018</h5>
				</footer>
		</body>

</html>