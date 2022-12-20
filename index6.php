<!DOCTYPE html>
<html>
<head>
	<title>Example</title>
	<style>
#com {
  width:200px;
  height: 100px;
  background-color: white;
  position: relative;
  animation-name: example;
  
  animation-duration: 4s;
  animation-delay: -2s;
}
h1{
	font-size: 20px;
}

@keyframes example {
  0%   {background-color:blue; left:0px; top:0px;}
  25%  {background-color:yellow; left:-100px; top:0px;}
  50%  {background-color:blue; left:-300px; top:200px;}
  75%  {background-color:green; left:300px; top:-300px;}
  25%  {background-color:green; left:500px; top:300px;}
  100% {background-color:red; left:0px; top:200px;}
}
		body {
			display: flex;
			align-items: center;
			justify-content: center;
			min-height: 100vh;
			font-family: arial, sans-serif;
		}
		input, textarea {
			display: block;
			width: 300px;
			font-size: 18px;
			margin: 7px 0px;
		}
		label {
			display: block;
			padding: 2px 0px;
		}
	</style>
</head>
<body>
<script src="js.js">
      
    </script>
<div id='com'><h1> Comment</h1></div>

    <form method="post" action="save.php">
    	<label>Name:</label>
    	<input type="text" 
    	       name="name">
    
    	<label>Message:</label>
    	<textarea name="message"></textarea>

    	<input type="submit" 
    	       name="btn">
    </form>
	
</body>
</html>

<!DOCTYPE html>
<html>
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<body>

<div id="myPlot" style="width:50%;width:70%;margin:15%"></div>

<script src="js2.js">

</script>

</body>
</html>