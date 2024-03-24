	<?php
	$con=mysqli_connect("localhost", "root", "", "arsenal");

	?>
	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
	
	.container {
		position: absolute;
		text-align: left;
		color: red;
    
	}

	.ars-senal {
		width: 1500px;
		height: 500px;
		top:0px;
		border-radius:5px;
		border-shadow:1px 2px;
	
	}

	.text {
		position: absolute;
		top: 32%;
		left: 5%;
	}

	.text1 {
		position: absolute;
		top: 38%;
		left: 5%;
		font-size: 30px;
		font-weight: bold;
	}

	.text2 {
		position: absolute;
		top: 2%;
		left: 5%;
		width: auto;
		height: 30px;
	}

	.text3 {
		position: absolute;
		top: 2.5%;
		left: 10%;
		font-size: 15px;
		font-weight: bold;
		flex-direction:row;
		display:flex;
		justify-content:flex-end;
	}

	.text4 {
		position: absolute;
		top: 6.4%;
		left: 10%;
		font-size: 7px;
		font-weight: lighter;
		flex-direction:row;
		justify-content:flex-end;
		font-family:Arial,sans-serif;
	}

	/* Add a black background color to the top navigation */
	.topnav {
		overflow: hidden;
		position: absolute;
		top: 2.5%;
		left: 70%;
		font-size: 7px;
		font-weight: bold;
		font-family:monospace;
	}

	/* Style the links inside the navigation bar */
	.topnav a {
		float: left;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
		font-size: 15px;
	}

	/* Change the color of links on hover */
	.topnav a:hover {
		background-color: red;
		color: black;
	}

	/* Add a color to the active/current link */
	.topnav a.active {
		background-color: ;
		color: white;
	}

	.button1 {
		position: absolute;
		top: 50%; /* Adjust the position of the button */
		left: 7%;
		font-size: 15px;
		font-weight: bold;
		color: red;
		text-decoration: none;
		font-family:monospace;
	}
	.rib1{
	position: absolute;
	background:red;
	left: 2.5%;
	top: 470px; 
	width:15%;
	height:40%;
	 border-radius: 8px;
        box-shadow: 1px 2px 10px;
	}
	.box1 {
    position: absolute;
    background: white;
    left: 22.5%;
    top: 545px;
    width: 20%;
    height: 32.5%;
    font-family: Arial; /* Corrected font family name */
    font-size: 25px;
    border: 1px silver; /* Corrected border shorthand */
    border-radius: 4px; /* Corrected border-radius property */
    box-shadow: 1px 1px 2px;
}


	.box2 {
		position: absolute;
		background: white;
		left: 49%;
		top:545px;
		width: 20%;
		height: 32.5%;
		font-family: ariel;
		font-size: 25px;
		 border: 1px  silver; /* Corrected border shorthand */
    border-radius: 4px; /* Corrected border-radius property */
    box-shadow: 1px 1px 2px;
	}
	.box3 {
		position: absolute;
		background: white;
		left: 75%;
		top:545px;
		width: 20%;
		height: 32.5%;
		font-family: ariel;
		font-size: 25px;
		 border: 1px silver; /* Corrected border shorthand */
    border-radius: 4px; /* Corrected border-radius property */
    box-shadow: 1px 1px 2px;
	}
	.ars1{
		position: absolute;
		left:2%;
		top:50px;
		width: auto;
		height: 30%;
		border-radius: 5px;
	}
	.ars2{
		position: absolute;
		left:2%; /* Adjust the left position */
		top:50px;
		width: auto;
		height: 30%;
		border-radius: 5px;
	}
	.ars3{
		background: LightSkyBlue;
		position: absolute;
		left:2%; /* Adjust the left position */
		top:50px;
		width: auto;
		height: 30%;
		border-radius: 5px;
	}
	.d1 {background: white;
		position:absolute;
		left:10%;
		top:900px;
		width: 200px;
		height: 36.4%;
		font-family: ariel;
		font-size: 25px;
	}
	.d2 {background: white;
		position:absolute;
		left:30%;
		top:900px;
		width: 200px;
		height: 36.4%;
		font-family: ariel;
		font-size: 25px;
	}
	.d3 {background: white;
		position:absolute;
		left:50%;
		top:900px;
		width: 200px;
		height: 36.4%;
		font-family: ariel;
		font-size: 25px;
	}
	.d4 {background: white;
		position:absolute;
		left:13%;
		top:1320px;
		width: 500px;
		height: 50%;
		font-family: monospace;
		font-size: 25px;
	}
	.d5 {background: white;
		position:absolute;
		left:58%;
		top:1300px;
		width: 500px;
		height: 50%;
		font-family: monospace;
		font-size: 25px;
	}
	.d6 {background: black;
		position:absolute;
		left:0%;
		top:1700px;
		width: 1510px;
		height: 50%;
		font-family: monospace;
		font-size: 25px;
	}
	.lisa1{
		position: absolute;
		left22.5%;
		top:0px;
		width: auto;
		height: 126px;
        border-radius: 5px;
	}
	.liv2{
	position: absolute;
		left22.5%;
		top:0px;
		width: auto;
		height: 126px;
		border-radius: 5px;
	}
	.bel1{
	position: absolute;
		left22.5%;
		top:0px;
		width: auto;
		height: 126px;
        border-radius: 5px;
	}
	.rad1{

		left:25%;
		top:0px;
		width: auto;
		height: 100%;
		border: 0px;
        border-radius: 8px;
        box-shadow: 10px 10px 40px;
	}
	.para1{
	position:absolute;
		left:0%;
		top:260px;
		font-size:17px;
	}
	.text12{
	  position:absolute;
	  text-align:center;
	  color:white;
	  top: 50%;
	  left:50%;
	  transform:translate(-50%,-50%);
	  font-family:ariel;
	}
	.text13{
	  position:absolute;
	  color:black;
	  font-family:ariel;
	}
	.text21 {
		position: absolute;
		top: 15%;
		left: 5%;
		width: 30px;
		height: 30px;
	}

	.text31 {
		position: absolute;
		color:white;
		top: 15%;
		left: 7.5%;
		font-size: 15px;
		font-weight: bold;
		flex-direction:row;
		display:flex;
		justify-content:flex-end;
	}

	.text41 {
	position: absolute;
		color:white;
		top: 21.5%;
		left: 7.4%;
		font-size: 7px;
		font-weight: lighter;
		flex-direction:row;
		justify-content:flex-end;
		font-family:Arial,sans-serif;
	}
	.text22{
	position: absolute;
		top: 28%;
		left: 5%;
		color:white;
		font-size:10px;
	}
	.text23{
	position: absolute;
		top: 35%;
		left: 5%;
		color:white;
		font-size:10px;
	}
	.text24{
	position: absolute;
		top: 42%;
		left: 5%;
		color:white;
		font-size:10px;
	}
	.textc1{
	position: absolute;
		top: 15%;
		left: 20%;
		color:white;
		font-family:ariel;
	}
	.textc2{
	position: absolute;
		top: 26%;
		left: 20%;
		color:white;
		font-family:ariel;
		font-size:12px;
		font-weight:lighter;
	}
	.textc3{
	position: absolute;
		top: 35%;
		left: 20%;
		color:white;
		font-family:ariel;
		font-size:12px;
		font-weight:lighter;
	}
	.textc4{
	position: absolute;
		top: 43%;
		left: 20%;
		color:white;
		font-family:ariel;
		font-size:12px;
		font-weight:lighter;
	}
	.textb1{
	position: absolute;
		top: 15%;
		left: 35%;
		color:white;
		font-family:ariel;
		font-size:25px;
		font-weight:lighter;
	}
	.textb2{
	position: absolute;
		top: 26%;
		left: 35%;
		color:white;
		font-family:ariel;
		font-size:12px;
		font-weight:lighter;
		text-decoration: none;
	}
	.textb2 a:{
	position: absolute;
		color:white;
	    text-decoration: none;
	}
	.textb2 a:hover {
        color: red; 
	    text-decoration: none;
}
	.textb3{
	position: absolute;
		top: 35%;
		left: 35%;
		color:white;
		font-family:ariel;
		font-size:12px;
		font-weight:lighter;
	}
	.textb4{
	position: absolute;
		top: 43%;
		left: 35%;
		color:white;
		font-family:ariel;
		font-size:12px;
		font-weight:lighter;
	}
	.rib11{
	font-size:40px;
	}
	form {
            width: 200px;
            margin: 0 auto;
			height: 10px;

        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 2px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 5px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
		.container2{
		position:absolute;
		top:500px;
		left:850px;				
		}
		.cont3{
		position:absolute;
		top:600px;
		left:350px;
		font-size:45px;
		font-family:Arial;
		font-weight:bold;
		}
	</style>
	</head>
	<body>


	<div class="container">
		<div class="text3"> ARSENAL</div>
		<div class="text4"> ARE HOME EMIRATES</div>
		<img class="text2" src="arlogo.PNG">
		<img class="ars-senal" src="wal.JPG" style="left:0px;">
		<div class="text"> "Trust the process"<b>Arteta</b></div>
		
		<br>
		<div class="text1">We are Arsenal. "VISIT RWANDA"<br>#COYG</div>
	</div>
	<div class="topnav">
		<a class="active" href="#home">Home</a>
		<a href="#news">News</a>
		<a href="#contact">Contact</a>
		<a href="#about">About</a>
	</div>
	<a href="#Getstartednow"><button class="button1" type="submit">GET STARTED NOW</button></a>
	<div class="rib1">
    <span style="font-size: 30px;">👟</span><br>
    <b style="font-size: 15px;">Sports wear</b><br><br>
    <span style="font-size: 30px;">⚽</span><br>
    <b style="font-size: 15px;">Sports equipment</b><br><br>
    <span style="font-size: 30px;">📰</span><br>
    <b style="font-size: 15px;">Team news</b>	
	</div>
	<div class ="container2">
	<form method="post" action="index.php">
    <h2>Sign Up</h2>
    <label>Name:</label><br>
    <input type="text" id="name" name="name" required><br>

    <label>Email:</label><br>
    <input type="email" id="email" name="email" required><br>

    <label>Phone Number:</label><br>
    <input type="text" id="phone" name="phone_number" required><br>

    <label>Password:</label><br>
    <input type="password" id="password" name="password" required><br>

    <!-- Add input for uploading CV -->
        <label>Upload CV:</label><br>
        <input type="file" id="cv" name="cv" accept=".pdf, .doc, .docx"><br>


    <input type="submit" value="Sign Up" name="ok">
    <a style ="background-color:white;"href="login.php" style='color;'>Already have an account</a>
    <?php 
    if(isset($_POST['ok'])){
    	$name=$_POST['name'];
    	$email=$_POST['email'];
    	$phone_number=$_POST['phone_number'];
    	$password=$_POST['password'];
    	$cv=$_POST['cv'];


    	$check = mysqli_query($con, "INSERT INTO arsenal_fans (name, email, phone_number, password, cv) VALUES ('$name', '$email', '$phone_number', '$password' , '$cv')");

if($check){
    //header("Location: index.php");

   // exit;
} 

else {
    echo "Error: " . mysqli_error($con);

}

    }
    ?>
</form>
	</div>
	<div>
	<label class="cont3">JOIN OUR <b style="color:red;">ARSENAL</b><br> COMMUNITY<br> <b Style="color:red;">MEMBERS➡️</b></label><br>

	</div>
    
	<div>
	  <div class="d1">
    <img class="lisa1" src="japh.JPG"><br><br><br><br>
    <p style="font-size:14px;">Japhet</p>
    <p style="font-size:12px;"><b>Gym Trainor</b></p>
    <p style="font-size:12px;">Arsenal physical trainer who is dedicated in giving his support to the community</p>
	<h1 style="font-size:5px;">Download My CV</h1>
    <p style="font-size:5px;">Click the button below to download my CV:</p>
    <form action="download_cv.php" method="post">
        <button type="submit" name="download">Download CV</button>
    </form>
</div>

	  <div class="d2"><img class="liv2" src="liv2.JPG"><br><br><br><br>
		<p style="font-size:14px;">Livin</p>
	  <p style="font-size:12px;"><b>Head Coach</b></p>
	  <p style="font-size:12px;">A passionate arsenal player since his time at arsenal who turned out to be our savior</p>
	  <h1 style="font-size:5px;">Download My CV</h1>
    <p style="font-size:5px;">Click the button below to download my CV:</p>
    <form action="download_cv.php" method="post">
        <button type="submit" name="download">Download CV</button>
    </form>
</div>
	  <div class="d3">
	  	<img class="bel1" src="b.JPG"><br><br><br><br>
		<p style="font-size:14px;">Bruce</p>
	  <p style="font-size:12px;"><b>Club President</b></p>
	  <p style="font-size:12px;">Bussiness man who came in bussiness, buying 70% of arsenal and giving all what he can to give our club hope in the league</p>
	  <h1 style="font-size:5px;">Download My CV</h1>
    <p style="font-size:5px;">Click the button below to download my CV:</p>
    <form action="download_cv.php" method="post">
        <button type="submit" name="download">Download CV</button>
    </form>
	  </div>
	</div>
	<div>
	<div class="d4">
	<div class="text12">
	<p Style="font-size:12px; color: red;">"VISIT RWANDA"</p>
	<b style="font-size:15px; font-family:ariel; color:red;">A HOME OF GUNNERS</b>
	</div>
		<img class="rad1" src="hi.webp">
	</div>
	</div>
	<div class="d5">
	<div class="text13">
	<p Style="font-size:23px;"><b>Gunners home</b></p>
	<p Style="font-size:20px;">The Arsenal Football Club,  
	commonly known as Arsenal, 
	is an English professional football club based in Islington,
	North London. Arsenal compete in the Premier League, 
	the top flight of English football. 
	In domestic football, Arsenal have won 13 league titles (
	including one unbeaten title), a record 14 FA Cups, two League Cups,
	17 FA Community Shields and a Football League Centenary Trophy.
	In European football, they have one European Cup Winners' Cup 
	and one Inter-Cities Fairs Cup. In terms of trophies won, 
	it is the third-most successful club in English football.[2]</p>
	</div>
	
	</div>
	<div class="d6">
	<div class="text31"> ARSENAL</div>
		<div class="text41"> ARE HOME EMIRATES</div>
		<img class="text21" src="arlogo.png">
		<b class="text22">📞 (+250) 791578879</b>
		<b class="text23">✉ mugishalivin@gmail.com</b>
		<b class="text24">📍 KG 22 Avenue,<br><br> Kigali,RWANDA.</b>
	     <div class="textc1"> COMPANY</div>
		 <div class="textc2">Help center</div>
		 <div class="textc3">Language</div>
		 <div class="textc4">Privacy policy</div>
	     <div class="textb1">Useful links</div> 
		 <div class="textb2"><a class="link" href="#Help_center">Help center</a></div>

		 <div class="textb3"><a class="link" href="#Joinfanclub">Join fanclub</a></div>
		 <div class="textb4"><a class="link" href="#Community_service">Community service</a></div>
	</div>
	
	</body>
	</html>
