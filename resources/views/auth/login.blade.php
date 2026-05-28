<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login</title>

</head>

<body>

<div style="display:flex;justify-content:center;align-items:center;height:100vh;">

<div>

<h1>Login Page</h1>

@if(session('error'))

<p>

{{ session('error') }}

</p>

@endif

<form action="/auth/login" method="POST">

@csrf

<input 
type="email" 
name="email" 
placeholder="Enter Email"
required
>

<br><br>

<input 
type="password" 
name="password" 
placeholder="Enter Password"
required
>

<br><br>

<button type="submit">

Login

</button>

<button 
type="button"
onclick="window.location='/auth/register-page'"
>

Register

</button>

</form>

</div>

</div>

</body>

</html>