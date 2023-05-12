<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Change Color</title>
</head>
<body>


	<h1>Change the color of Header and Footer.</h1>

<form action="{{url('change-color')}}" method="post">
	@csrf
  <label >Select color for Header:</label>
  <input type="color"   name="hcolor"><br><br>

  <label >Select color for Footer:</label>
  <input type="color"   name="fcolor"><br><br>
  <input type="submit">
</form>


</body>
</html>