<!DOCTYPE html>
<html>
<head>
<body>
<p> my first webpage</p>
<a href="https://www.google.com/">link</a>
<br>

<button>login</button>
<br>
<br>
<form action="{{url('add')}}" method="POST">
	<input type="text" name="name" placeholder ="firstname">
<br><br>
<input type="text" name="lastname" placeholder="lastname">
<br><br>
<input type="submit" value="submit">
</form>
</body>
</head>
</html>