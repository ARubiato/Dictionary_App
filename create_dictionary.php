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
						<button class = "Button" value="submit" style="width: 50%; height: 50%; align-self: center; cursor: pointer;"> Search</button>
					</ul>
				</div>
				</nav>

				<div class = "Create_intro">
						<form action = "create_dictionary_form.php">
					<h3>My Creation</h3> <Button class = "Button1" value = "submit" style ="border-radius: 5px; margin: 1em auto; width: 60%;">+ CREATE</Button>
				</div>
			</form>
				<div class = "Create_body">
					<div class = "Dictionaries_created">
						  <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                  </p>
					</div>
				</div>	

			</div>
					</body>

		</html>
