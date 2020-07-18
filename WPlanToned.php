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
  background-image: url('background-3.jpg');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}




* {
  box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the four columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}


</style>
<body>

<div class=" bgimg w3-display-container  w3-text-white">

  <div class="w3-display-top box black w3-text-white">
     <center><font face="Impact" class="w3-xxlarge ">WORKOUT PLAN</font></center>
      
     

</div> 



<p style="color:black">1</p>
<p style="color:black">1</p>
<p style="color:black">1</p>
<p style="color:black">1</p>
<p style="color:black">1</p>

<div class="row">
  <div class="column" style="background-color:#aaa; ">
    <h2 style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;color:black;" ></h2>
    <p style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;color:black;" >Toned Full Body</p>
    <video width="350" controls >
  <source src="TonedFullBody.mp4" type="video/mp4">
  <source src="TonedFullBody.ogg" type="video/ogg">
  Your browser does not support HTML video.
</video>
  </div>
  <div class="column" style="background-color:#bbb;">
    <h2 style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;color:black;" ></h2>
    <p style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;color:black;" >Toned Arm</p>
<video width="350" controls >
  <source src="TonedArm.mp4" type="video/mp4">
  <source src="TonedArm.ogg" type="video/ogg">
  Your browser does not support HTML video.
</video>
  </div>
  <div class="column" style="background-color:#ccc;">
    <h2 style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;color:black;" ></h2>
    <p style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;color:black;">Shredded Body</p>
<video width="350" controls >
  <source src="ShreddedBody.mp4" type="video/mp4">
  <source src="ShreddedBody.ogg" type="video/ogg">
  Your browser does not support HTML video.
</video>
  </div>
  <div class="column" style="background-color:#ddd;">
    <h2 style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;color:black;" ></h2>
    <p style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;color:black;">Lean Body</p>
<video width="350" controls >
  <source src="LeanBody.mp4" type="video/mp4">
  <source src="LeanBody.ogg" type="video/ogg">
  Your browser does not support HTML video.
</video>
  </div>

<div class="w3-display-bottomright w3-container w3-large"> 
    <a href="../Main/Main.php" class="w3-button w3-black">HOME</a>
</div>

</div>
</div>


</div>
</div>  



</body>
</html>