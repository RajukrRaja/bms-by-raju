<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Add Book</title>

</head>

<body>

<div style="display:flex; justify-content:center; align-items:center; height:100vh;">

<div>

<h1>Add Book</h1>

<form action="/books" method="POST" enctype="multipart/form-data">

@csrf

<input type="text" name="title" placeholder="Book Title">

<br><br>

<input type="text" name="author" placeholder="Author Name">

<br><br>

<input type="file" name="cover_image">

<br><br>

<input type="number" name="price" placeholder="Price">

<br><br>

<input type="date" name="published_date">

<br><br>

<button type="submit">

Add Book

</button>

</form>

</div>

</div>

</body>

</html>