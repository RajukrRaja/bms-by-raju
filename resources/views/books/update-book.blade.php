<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Update Book</title>

</head>

<body>

<div style="display:flex; justify-content:center; align-items:center; height:100vh;">

<div>

<h1>Update Book</h1>

<form action="/books/{{ $book->id }}" method="POST" enctype="multipart/form-data">

@csrf

@method('PUT')

<input 
type="text" 
name="title" 
value="{{ $book->title }}"
>

<br><br>

<input 
type="text" 
name="author" 
value="{{ $book->author }}"
>

<br><br>

<input 
type="file" 
name="cover_image"
>

<br><br>

<input 
type="number" 
name="price" 
value="{{ $book->price }}"
>

<br><br>

<input 
type="date" 
name="published_date" 
value="{{ $book->published_date }}"
>

<br><br>

<button type="submit">

Update Book

</button>

</form>

</div>

</div>

</body>

</html>