<!DOCTYPE html>
     <html lang="eng" dir="ltr">
        <head>
   	  <meta charset="utf-8">
	  <title>BMI Calculator</title>
	</head>
	<style>
	   body{
		text-align: center;
		background-image: url('background-3.jpg');
  		background-repeat: no-repeat;
  		background-attachment: fixed; 
 	 	background-size: 100% 100%;
		}
	   div{
		width: 500px;
		position: absolute;
		top: 30%;
		left: 30%;
		background-color:rgb(0,0,0,0.6);
		margin:auto;
	color: #ffffff;
		transform: translate(-50%, -50);
		padding: 20px;
		border-radius: 10px;
		box-shadow: 1px 1px 20px #963cbf;
	       }
	    h2{
		font-size: 30px;
		font-weight: 600;
	      }
	    .text{
		text-align: left;
		margin-left: 150px;
		text-color: #FFFFFF;
		 }
	     #w, #h{
		color: #FFFFFF;
		text-align: left;
		font-size: 20px;
		font-weight: 200;
		outline: none;
		border: none;
		background: none;
		border-bottom: 1px solid #FFFFFF;
		width: 200px;
		   }

	     #w:focus, #h:focus{
		border-bottom: 2px solid #341f97;
		width: 300px;
		transition: 0.5s;
			       }
	     #result{
		color: #FFFFFF
		    }
	   #btn{
		font-family: inherit;
		margin-top: 10px;
		boder: none;
		color: #fff;
		background-image:linear-gradient(120deg,#ff6b6b, #5f27cd);
		width: 150px;
		padding: 10px;
		border-radius: 30px;
		outline: none;
		cursor: pointer;
		}
	   #btn-hover{
		box-shadow: 1px 1px 10px #341f97;
		     }
	   #btn1{
		font-family: inherit;
		margin-top: 10px;
		boder: none;
		color: #fff;
		background-image:linear-gradient(120deg,#ff6b6b, #5f27cd);
		width: 150px;
		padding: 10px;
		border-radius: 30px;
		outline: none;
		cursor: pointer;
		}
	   #btn1-hover{
		box-shadow: 1px 1px 10px #341f97;
		     }
	   #info{
		font-size: 12px;
		font-family: inherit;
		}
	</style>
	<script type="text/javascript">
	  function BMI() {
		var h=document.getElementById('h').value;
		var w=document.getElementById('w').value;
		var bmi=w/(h/100*h/100);
		var bmio=(bmi.toFixed(2));

		document.getElementById("result").innerHTML="Your BMI is " + bmio;
			}
	</script>
	<body>
	  <div>
	   <h2>BMI Calculator</h2>
	   <p class="text">Height</p>
	   <input type="text" id="h">
	   <p class="text">Weight</p>
	   <input type="text" id="w">
	   <p id="result"></p>
	   <p id="info">Please enter height[cm] and weight[kg]</p>
	   <button id="btn" onClick="BMI()">Calculate</button>
	 <button onclick="document.location='../Sub/sub.html'" id="btn1">Submit</button>

	  </div>
        </body>

        
     </html>