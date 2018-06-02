<!doctype html>
<html>
	<head>
			<title><?php echo "Create dictionary"; ?></title>
			
			<link rel = "stylesheet" href = "css/uikit.css"/>
			<link rel = "stylesheet" href = "css/style.css"/>
		</head>

		<body>
			<div class = "wrapper">
				<nav>
					
					<div class = "logo"><a href = "index.php">Some Logo</a></div>
					<div class = "menu">
					<ul>
						<a href = "#"><li>Discover</li></a>
						<a href = "create_dictionary.php"><li>Create</li></a>
						<a href = "#"><li>Authors</li></a>
						<a href = "#"><li>About</li></a>
						<input type="text" name="Search" placeholder="Search dictionaries and authors..." />

						<button class = "Button" value="submit" style="width: 50%; height: 50%; align-self: center;"> Search</button>

					</ul>

				</div>
				</nav>
				<section class = "CD_Form_Header">
				<h5 style="opacity: 0.6;">Add dictionary information</h5>
				<h3>CREATE YOUR OWN DICTIONARY</h3>
				</section>
				<div class = "CD_Form">

					Title: <input type = "text" name = "Dict_Title" style="width: 50%;" placeholder="Untitled dictionary"> <br/>
					Type:<input type="text" name="Dict_Type" style="width: 50%;" placeholder="Ex. Billingual, Collegiate, Learner's, etc...">
				</div>
			</div>

		</body>


		</html>