<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <h1 style="font-size: 2.5em">Buat Account Baru!</h1>
	<h2>Sign Up Form</h2>
	<form action="/welcome" method="POST">
        @csrf
		<p>First name:</p>
		<input type="text" name="nama_depan">

		<p>Last name:</p>
		<input type="text" name="nama_blkg" >

		<p>Gender:</p>
		<input type="radio" name="gender" value="male">
			<label for="male">Male</label> <br>
		<input type="radio" name="gender" value="female">
			<label for="female">Female</label> <br>
		<input type="radio" name="gender" value="other">
			<label for="other">Other</label>

		<p>Nationality:</p>
		<select name="nationality">
			<option value="Indonesia">Indonesian</option>
			<option value="Singapore">Singaporean</option>
			<option class="Malaysia">Malaysian</option>
			<option value="Australia">Australian</option>
		</select>

		<p>Language Spoken</p>
		<input type="checkbox" name="bahasa" value="Bahasa Indonesia">
			<label for="Bahasa Indonesia">Bahasa Indonesia</label> <br>
		<input type="checkbox" name="bahasa" value="Anglais">
			<label for="Anglais">English</label> <br>
		<input type="checkbox" name="bahasa" value="Other">
			<label for="Other">Other</label> <br>

		<p>Bio:</p>
		<textarea name="bio" cols="40" rows="10"></textarea> <br>
		<input type="submit" name="">
	</form>
</body>
</html>
