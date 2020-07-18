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
  background-image: url('background4.jpg');
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
	box-shadow: 1px 1px 20px #61F4FC;
}
 
.black{
	background:#00868B;
	background-color:rgb(0,0,0,0.6);
	margin:auto;
	color: #ffffff;
}

.button {
  background-color: #79F5FC; 
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
	font-style : impact ;
	font-size : 15px;
 }


</style>
<body>

<div class="bgimg w3-display-container  w3-text-white">

  <div class="w3-display-middle box black w3-text-white">
     <center><font face="Impact" class="w3-xxlarge ">ACCOUNT NUMBER : 123456</font></center>
     <div class="w3-display-middle w3-container "> 
     
    <div class="button w3-round-large"><font face="Arial Black" class="w3-xlarge " >THANK YOU<br/>
   <span font face="Arial Black" style="font-size:18px" >Transfer And Upload Receipt</span></div>

<p1>

<form action ="../GoalExperience/GoEx.php" method="post" ecntype="multipart/form-data">
		<label for="Package">Your Goal:</label>
  		<select id="package" name="package">
   		<option value="1Month">1 Month</option>
    		<option value="3Month">3 Month</option>
    		<option value="1 Year">1 Year</option>
  		</select>
                <br></br>
		<label for = "file">Choose a file :</label>
		<input type="file" name="file1" />
		<input type ="submit" value="Send!" />
	</form>


</p1>	

</div>
</div>  
</div> 



</body>
</html>