<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster&effect=brick-sign">
<style>
body,h1,h5 {font-family: "Lobster&effect=brick-sign", sans-serif}
body, html {height: 100%}

.bgimg {
  background-image: url('background7.jpg');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}

      @font-face { font-family: Delicious; src: url('Delicious-Roman.otf'); } 
      @font-face { font-family: Delicious; font-weight: bold; src: url('Delicious-Bold.otf');}
      @font-face { font-family: Delicious2; src: url('Delicious2-Roman.otf'); } 
      @font-face { font-family: Delicious2; font-weight: bold; src: url('Delicious-Bold.otf');}

.box{
	width:850px;
	height:450px;
	border-radius: 10px;
	box-shadow: 1px 1px 20px #F1DC0D;
}
 
.black{
	background:#F6F5F4;
	background-color:rgb(0,0,0,0.6);
	margin:auto;
	color: #ffffff;
}

.button {
  background-color: #A8E6CE; 
  border: none;
  color: #000000;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

p1{
	font-style : italic ;
	font-size : 20px;
	color : white ;
 }


</style>
<body>

<div class="bgimg w3-display-container  w3-text-white">

  <div class="w3-display-middle box black w3-text-white">
     <center><font face="Impact" class="w3-xxlarge ">GOAL AND EXPERIENCE</font></center>

<br></br>
<br></br>

  
  
<center><p1><form action="..//PlanLose//PlanLose.php">

  <label for="Goal">Your Goal:</label>
  <select id="cars" name="cars">
    <option value="Lose Weight">Lose Weight</option>
    <option value="Get Toned">Get Toned</option>
    <option value="Build Muscle">Build Muscle</option>
 
  </select>

<br></br>

	<label for="Experience">Your Experience:</label>
  <select id="Experience" name="Experience">
    <option value="Beginner">Beginner</option>
    <option value="Intermediate">Intermediate</option>
    <option value="Advanced">Advanced</option>
  </select>

<br></br>

  <input type="submit">
</form>
</p1>
</center>	


<div class="w3-display-bottomright w3-container w3-large"> 
    <a href="../Login/Welcome.php" class="w3-button w3-black">HOME</a>
</div>

</div>
</div>  
</div> 



</body>
</html>