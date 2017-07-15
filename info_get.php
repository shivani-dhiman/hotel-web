<html>
<link rel="stylesheet" href="NewFile.css">
<link rel="stylesheet" type="text/css" href="NewFile.css">
<link rel="stylesheet" type="media_query" href="NewFile.css">
<link rel="stylesheet" type="topnav/css" href="NewFile.css">
<link rel="stylesheet" type="map/css" href="NewFile.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
</head>
<body>
<h1 style="text-align: center; color: #800000; background-color: #FBB917">Luxury Collection Hotel, New York City <i class="material-icons"style="font-size: 48px; color: blue">room</i>
	</h1>
	<div class="topnav" id="myTopnav">
		<a href="NewFile.html"><font size="5">Home</font></a> <a
			href="picture.html"><font size="5">Photos</font></a> <a
			href="newfile_get.php"><font size="5">Rooms</font></a> <a
			href="location.html"><font size="5">Locations</font></a> <a
			href="services.html"><font size="5">Services</font></a>
			 <a href="dining.html"><font size="5">Dining</font></a> 
			<a href="meeting.html"><font size="5">Meeting/Events</font></a>
		<a href="review.html"><font size="5">Reviews</font></a> <a
			href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
	</div>
From:  <?php echo $_GET["date-from"]; ?> <br><br>
To:   <?php echo $_GET["date-to"]; ?> <br><br>
Room-Type:  <?php echo $_GET["room-type"]; ?> <br><br>
Room-Requirement:  <?php echo $_GET["room-requirements"]; ?> <br><br>
Adults:  <?php echo $_GET["adults"]; ?> <br><br> 
Children:  <?php echo $_GET["children"]; ?> <br><br>
Name: <?php echo $_GET["name"]; ?> <br><br>
Email:  <?php echo $_GET["email"]; ?> <br><br>
Phone:  <?php echo $_GET["phone"]; ?> <br><br>
Special-Requirement: <?php echo $_GET["special-requirements"]; ?> <br><br>
</body>
</html>
