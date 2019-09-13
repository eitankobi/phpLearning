<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    var_dump($_POST);

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Forms</title>
    <meta charset="utf-8">
</head>
<body>

<form method="post">

   <fieldset>
   	<legend>Article</legend>
	   <div>
	   		<label for="title">Title</label>: <input type="text" name="title" id="title" placeholder="Article title" readonly>
	   </div>

	   <div>
	   		<label for="content">Content</label>: 
	   		<textarea autofocus name="content" rows="4" cols="40" id="content" placeholder="Write something here.."></textarea>
	   </div>

	   <div>
	   	
	   		<label for="lang">Language</label>:
	   		<select name="lang" id="lang">
	   			<option value="en" >English</option>
	   			<option value="fr">French</option>
	   			<option value="sp">Spanish</option>	   			
	   		</select>

	   </div>


   </fieldset>
   
   <fieldset>
   	<legend>Attributes</legend>
	   <div>
	   		<input type="checkbox" name="visible" value="yes" id="visible">
	   		<label for="visible">Visible</label>
	   </div>
   </fieldset>

   <fieldset>
	   	<legend>Colour:</legend>
	   	<input type="radio" name="color" value="blue" id="one" checked>
	   	<label for="one">Blue</label>
	   	<br>

	   	<input type="radio" name="color" value="red" id="two" disabled>
	   	<label for="two">Red</label>
	   	<br>

	   	<input type="radio" name="color" value="green" id="three">
	   	<label for="three">Green</label>

   </fieldset>


    <button>Press me!</button>

</form>

</body>
</html>