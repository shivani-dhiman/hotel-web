
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>rooms</title>
<link rel="stylesheet" href="NewFile.css">
<link rel="stylesheet" type="media_query" href="NewFile.css">
<link rel="stylesheet" type="topnav/css" href="NewFile.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
</style>
</head>
<body>
<h1 style="text-align: center; color: #800000; background-color: #FBB917">Luxury Collection Hotel, New York City <i class="material-icons"style="font-size: 48px; color: blue">room</i>
	</h1>
<div class="topnav" id="myTopnav">
<a href="NewFile.html"><font size="5">Home</font></a>
<a href="picture.html"><font size="5">Photos</font></a>
<a href="newfile_get.html"><font size="5">Rooms</font></a>
<a href="location.html"><font size="5">Locations</font></a>
<a href="services.html"><font size="5">Services</font></a>
<a href="dining.html"><font size="5">Dining</font></a>
<a href="meeting.html"><font size="5">Meeting/Events</font></a>
<a href="#reviews"><font size="5">Reviews</font></a>
<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<br>

<h1 style="text-align:center;font-family:Berlin Sans serif">Select Room</h1>
<form id="booking-form" class="booking-form" name="form1" method="GET" action="info_get.php">
       <div class="w3-row-padding">
                <div  class="w3-col m3">
                    <label for="date-from">From</label>
                        <input id="date-from" name="date-from" class="w3-input w3-border" type="text">
                        <i class="fa fa-calendar"></i>
                    </div>
                    </div>
                    <div  class="w3-col m3">
                    <label for="date-to">To</label>        
                        <input id="date-to" name="date-to" class="w3-input w3-border" type="text">
                        <i class="fa fa-calendar"></i>
                    </div>
                  
                    <div  class="w3-col m3">
                    <label for="room-type">Room type</label>
                    <div>
                        <select id="room-type" name="room-type" class="w3-input w3-border">
                            <option value="Single room">Single room</option>
                            <option value="Double room">Double room</option>
                            <option value="Apartment">Apartment</option>
                        </select>
                    </div>
                    </div>
                      <div class="w3-col m3">
                    <label for="room-requirements">Room requirements</label>
                    <div>
                        <select id="room-requirements" name="room-requirements" class="w3-input w3-border">
                            <option value="No Preference">No Preference</option>
                            <option value="Non Smoking">Non Smoking</option>
                            <option value="Smoking">Smoking</option>
                        </select>
                    </div>
                </div>
   <div  class="w3-col m3">
                    <label for="adults">Adults</label>
                    <div>
                        <select id="adults" name="adults" class="w3-input w3-border">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                </div>
                <div class="w3-col m3">
                <label for="children">Children</label>
                <div>
                <select id="children" name="children" class="w3-input w3-border">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>                
                </select>
                </div>
                </div>
             
                             <div  class="w3-col m3">
                    <label for="name">Name</label>
                    <div><input class="w3-input w3-border" id="name" name="name" class="form-control" type="text" placeholder="Name"></div>
                </div>
                <div  class="w3-col m3">
                    <label for="email">Email</label>
                    <div><input class="w3-input w3-border" id="email" name="email" class="form-control" type="email" placeholder="Email"></div>
                </div>
                <div  class="w3-col m3">
                    <label for="phone">Phone</label>
                    <div><input class="w3-input w3-border" id="phone" name="phone" class="form-control" type="text" placeholder="Phone"></div>
                </div>
                <div  class="w3-col m3">
                    <label for="special-requirements">Special requirements</label>
                    <div><textarea id="special-requirements" name="special-requirements" class="form-control" cols="" rows="5" placeholder="Special requirements"></textarea></div>
                </div>
                <div  class="w3-col m3">
                    <label class="empty"></label>
                    <div><input class="w2-button w3-block w2-black" name="submit" type="submit" value="Submit"/></div>
                </div>
  
            <div id="form-loading" class="hide"><i class="fa fa-circle-o-notch fa-spin"></i></div>
        </form>
</body>
</html>

