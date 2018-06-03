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
				<h3 style=" border-radius: 1px solid #ccc;">CREATE YOUR OWN DICTIONARY</h3>
				</section>
				<div class = "CD_Form">

					Title: <br/> <input type = "text" name = "Dict_Title" style="width: 50%;" placeholder="Untitled dictionary"> <br/>
					Type: <br/><input type="text" name="Dict_Type" style="width: 50%;" placeholder="Ex. Billingual, Collegiate, Learner's, etc..."><br/>
					Description: <br/><textarea name = "Dict_Desc" class = "styled" rows = "15" cols= "100";></textarea><br/>
					Language: <select data-placeholder="Choose a Language...">
					  <option value = "SEL"> -Select- </option>
					  <option value="AF">Afrikanns</option>
					  <option value="SQ">Albanian</option>
					  <option value="AR">Arabic</option>
					  <option value="HY">Armenian</option>
					  <option value="EU">Basque</option>
					  <option value="BN">Bengali</option>
					  <option value="BG">Bulgarian</option>
					  <option value="CA">Catalan</option>
					  <option value="KM">Cambodian</option>
					  <option value="ZH">Chinese (Mandarin)</option>
					  <option value="HR">Croation</option>
					  <option value="CS">Czech</option>
					  <option value="DA">Danish</option>
					  <option value="NL">Dutch</option>
					  <option value="EN">English</option>
					  <option value="ET">Estonian</option>
					  <option value="FJ">Fiji</option>
					  <option value = "FL">Filipino</option>
					  <option value="FI">Finnish</option>
					  <option value="FR">French</option>
					  <option value="KA">Georgian</option>
					  <option value="DE">German</option>
					  <option value="EL">Greek</option>
					  <option value="GU">Gujarati</option>
					  <option value="HE">Hebrew</option>
					  <option value="HI">Hindi</option>
					  <option value="HU">Hungarian</option>
					  <option value="IS">Icelandic</option>
					  <option value="ID">Indonesian</option>
					  <option value="GA">Irish</option>
					  <option value="IT">Italian</option>
					  <option value="JA">Japanese</option>
					  <option value="JW">Javanese</option>
					  <option value="KO">Korean</option>
					  <option value="LA">Latin</option>
					  <option value="LV">Latvian</option>
					  <option value="LT">Lithuanian</option>
					  <option value="MK">Macedonian</option>
					  <option value="MS">Malay</option>
					  <option value="ML">Malayalam</option>
					  <option value="MT">Maltese</option>
					  <option value="MI">Maori</option>
					  <option value="MR">Marathi</option>
					  <option value="MN">Mongolian</option>
					  <option value="NE">Nepali</option>
					  <option value="NO">Norwegian</option>
					  <option value="FA">Persian</option>
					  <option value="PL">Polish</option>
					  <option value="PT">Portuguese</option>
					  <option value="PA">Punjabi</option>
					  <option value="QU">Quechua</option>
					  <option value="RO">Romanian</option>
					  <option value="RU">Russian</option>
					  <option value="SM">Samoan</option>
					  <option value="SR">Serbian</option>
					  <option value="SK">Slovak</option>
					  <option value="SL">Slovenian</option>
					  <option value="ES">Spanish</option>
					  <option value="SW">Swahili</option>
					  <option value="SV">Swedish </option>
					  <option value="TA">Tamil</option>
					  <option value="TT">Tatar</option>
					  <option value="TE">Telugu</option>
					  <option value="TH">Thai</option>
					  <option value="BO">Tibetan</option>
					  <option value="TO">Tonga</option>
					  <option value="TR">Turkish</option>
					  <option value="UK">Ukranian</option>
					  <option value="UR">Urdu</option>
					  <option value="UZ">Uzbek</option>
					  <option value="VI">Vietnamese</option>
					  <option value="CY">Welsh</option>
					  <option value="XH">Xhosa</option>
					</select>
					<br/>
					<button class="Button1" value="submit" style="width: 40%; border-radius: 5px; float: right">Submit</button>
				</div>
				

			</div>

		</body>


		</html>