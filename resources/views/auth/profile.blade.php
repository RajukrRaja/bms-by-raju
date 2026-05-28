<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard</title>

</head>

<body>

<div style="width:90%; margin:auto; margin-top:30px;">

<h1>Dashboard</h1>

<div style="display:flex; border:1px solid black;">

<div style="width:40%; padding:20px;">

<h2>Profile</h2>

<hr>

<p>
<strong>Name :</strong> {{ $user->name }}
</p>

<p>
<strong>Email :</strong> {{ $user->email }}
</p>

<br>

<form action="/auth/logout" method="POST">

@csrf

<button 
type="submit"
style="padding:10px 20px;"
>

Logout

</button>

</form>

</div>

<div style="width:1px; background:black;"></div>

<div style="width:60%; padding:20px;">

<h2>Book Management</h2>

<hr>

<div style="display:flex; gap:10px; flex-wrap:wrap;">

<a href="/create-books">

<button style="padding:10px 15px;">

Add Book

</button>

</a>

<a href="/books">

<button style="padding:10px 15px;">

Show All Books

</button>

</a>






</div>

</div>

</div>

</div>

</body>

</html>