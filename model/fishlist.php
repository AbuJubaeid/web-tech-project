<html>
<body>
<fieldset>
<legend><b>Fish Variety</b></legend>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	<table>
	<tr><td><b>Big Carp</b></td></tr>
	<tr><td>1kg=180 taka<input type="radio" name="bigcarp" value="1kg=180 taka"></td></tr>
	<tr><td>2kg=360 taka<input type="radio" name="bigcarp" value="2kg=360 taka"></td></tr>
	<tr><td>3kg=540 taka<input type="radio" name="bigcarp" value="3kg=540 taka"></td></tr>
	<tr><td>4kg=720 taka<input type="radio" name="bigcarp" value="4kg=720 taka"></td></tr>
	<tr><td>5kg=900 taka<input type="radio" name="bigcarp" value="5kg=900 taka"></td></tr>
	
	<tr><td><b>Small Carp</b></td></tr></tr>
	<tr><td>1kg=140 taka<input type="radio" name="smallcarp" value="carp"></td></tr>
	<tr><td>2kg=280 taka<input type="radio" name="smallcarp" value="carp"></td></tr>
	<tr><td>3kg=420 taka<input type="radio" name="smallcarp" value="carp"></td></tr>
	<tr><td>4kg=560 taka<input type="radio" name="smallcarp" value="carp"></td></tr>
	<tr><td>5kg=700 taka<input type="radio" name="smallcarp" value="carp"></td></tr>
	<tr><td><input type="submit" value="submit"></span></td></tr>
	</table>
</form>
</fieldset>
</body>
</html>
<p><a href="home.php"> Go Back to Home Page </a> </p>