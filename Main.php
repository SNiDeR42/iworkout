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
  background-image: url('wallpaper2.png');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}

      @font-face { font-family: Delicious; src: url('Delicious-Roman.otf'); } 
      @font-face { font-family: Delicious; font-weight: bold; src: url('Delicious-Bold.otf');}
      @font-face { font-family: Delicious2; src: url('Delicious2-Roman.otf'); } 
      @font-face { font-family: Delicious2; font-weight: bold; src: url('Delicious-Bold.otf');}

</style>
<body>

<div class="bgimg w3-display-container ">
  <div class="w3-display-middle w3-text-white ">
    <p><font face="Impact" class="w3-jumbo ">iWorkout</font></p>
    <p><font face="Arial Black"  class="w3-xxlarge" style="color:#3DED97" style="text-shadow:1px 1px 0 #444">The Freedom To Move</font></p>
    
  </div>
  
<div class="w3-bar w3-black">
  <a href="../Main/Main.php" class="w3-bar-item w3-button">Home</a>
  <a href="../Register/Register.html" class="w3-bar-item w3-button">Register</a>
  <a href="../Login/login2.php" class="w3-bar-item w3-button">Sign In</a>
</div>

<div class="w3-display-bottomleft w3-container w3-large"> 
    <p><button onclick="document.getElementById('7D').style.display='block'" class="w3-button w3-black">7 Day Free Trials</button></p>
</div>





<!-- 7D Modal -->
<div id="7D" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black">
      <span onclick="document.getElementById('7D').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1></h1>
    </div>
   <div class="w3-container w3-black">
    <p class="w3-large">The 7 Days Free Trial to the iWorkout is a fantastic way to introduce yourself to our workout ! </p>
    <h1 class="w3-xxlarge " style="text-shadow:1px 1px 0 #444"><b>All Access !! For Free !!<b></h1>
     </div>
   
   <div class="w3-container w3-black">
    <h1 class="w3-large">The trial will allow you to access all programs and content within the iWorkout-exactly the same as a normal subscription !</h1>
    <h1 class="w3-large">There are many workout plan and diet plan to follow. Just tell us your target and we will guide the rest.</h1>
    <h1 class="w3-large">At the end of your 7 Days trials, you can choose wether to continue or not. </h1>
   </div>
 </div>
</div>



</body>
</html>