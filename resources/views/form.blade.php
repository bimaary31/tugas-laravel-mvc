<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FROM</title>
</head>
<body>
    <H1>CREATE FORM ACCONT</H1>
    <form form action="selamat_datang" method="post">
	@csrf
		<label for="First name:">First Name:</label><br>
		<br>
		<input type="text" name="First name" id="First name"><br>
		<br>
		<label for="Last name:">Last name:</label><br>
		<br>
		<input type="text" name="Last Name:" id="Last name:"><br>
		<br>
		<label for="Gender:">Gender:</label><br>
		<br>
		<input type="radio" name="Gender:" value="Male" id="Gender:">Male<br>
		<input type="radio" name="Gender:" value="Female" id="Gender:">Female<br>
		<input type="radio" name="Gender:" value="Other" id="Gender:">Other<br>
		<br>
		<label for="Nationality:">Nationality:</label><br>
		<select>
			<option>Indonesia</option>
			<option>Malaysia</option>
			<option>Australia</option>
		</select><br>
		<br>
		<label for="National Spoken:">National Spoken:</label><br>
		<br>
		<input type="checkbox" name="National Spoken" value="Indonesia" id="National Spoken">Indonesia <br>
		<input type="checkbox" name="National Spoken" value="English" id="National Spoken"> English <br>
		<input type="checkbox" name="National Spoken" value="Other" id="National Spoken"> Other <br>
		<br>
		<label for="bio:">bio:</label><br>
		<TEXTAREA cols="100"rows="9"></TEXTAREA><br>
		<br>
		<input type="submit" value="sign up">
	</form>
</body>
</html>