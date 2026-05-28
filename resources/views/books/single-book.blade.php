<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Single Book</title>

</head>

<body>

<div style="display:flex; justify-content:center; align-items:center; height:100vh;">

<div style="border:1px solid black; padding:20px; width:300px; text-align:center;">

<h1>Book Details</h1>

<img 
src="{{ asset('storage/' . $book->cover_image) }}" 
width="150"
height="200"
>

<br><br>

<h2>{{ $book->title }}</h2>

<p>
Author : {{ $book->author }}
</p>

<p>
Price : ₹{{ $book->price }}
</p>

<p>
Published Date : {{ $book->published_date }}
</p>

<p>
Book ID : {{ $book->id }}
</p>

</div>

</div>

</body>

</html>