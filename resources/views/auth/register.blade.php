<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Register</title>

</head>

<body>

<h1>Register Page</h1>

<form action="/auth/register" method="POST">

@csrf

<input type="text" name="name" placeholder="Enter Name">

<br><br>

<input type="email" name="email" placeholder="Enter Email">

<br><br>

<input type="password" name="password" placeholder="Enter Password">

<br><br>

<button type="submit">

Register

</button>

</form>

</body>

</html>