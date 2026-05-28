<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard</title>

</head>

<body>

<div style="display:flex; width:100%;">

<div style="width:40%; padding:20px;">



<h1>Profile</h1>

<h3>Name : {{ $user->name }}</h3>

<h3>Email : {{ $user->email }}</h3>

<form action="/auth/logout" method="POST">

@csrf

<button type="submit">

Logout

</button>

</form>

</div>

<div style="width:1px; background:black;"></div>

<div style="width:60%; padding:20px;">

<h1>Book Management</h1>

<button>
Add Book
</button>

<button>
List Books
</button>

<button>
Fetch One
</button>

<button>
Update Book
</button>

<button>
Soft Delete
</button>

</div>

</div>

</body>

</html>