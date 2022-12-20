<!DOCTYPE html>
<html>
<head>
	<title>Example</title>
	<style>div {
  width:200px;
  height: 100px;
  background-color: red;
  position: relative;
  animation-name: example;
  animation-duration: 4s;
  animation-delay: -2s;
}

@keyframes example {
  0%   {background-color:red; left:0px; top:0px;}
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
<script>
        let d = new Date();
        alert("Today's date is " + d);
    </script>
<div><h1> Comment</h1></div>
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

