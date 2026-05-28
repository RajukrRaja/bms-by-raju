<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Books</title>

</head>

<body>

<div style="width:90%; margin:auto;">

<div style="display:flex; justify-content:space-between; align-items:center;">

<h1>All Books</h1>

<a href="/create-books">

<button style="padding:10px 15px;">

Add Book

</button>

</a>

</div>

<form action="/books" method="GET">

<input 
type="text" 
name="search" 
placeholder="Search Book"
value="{{ request('search') }}"
style="padding:8px; width:250px;"
>

<button 
type="submit"
style="padding:8px 15px;"
>

Search

</button>

</form>

<br>

<table border="1" cellpadding="15" cellspacing="0" width="100%">

<tr>

<th>ID</th>

<th>Cover</th>

<th>Title</th>

<th>Author</th>

<th>Price</th>

<th>Date</th>

<th>Action</th>

</tr>

@foreach($books as $book)

<tr>

<td>{{ $book->id }}</td>

<td>

<img 
src="{{ asset('storage/' . $book->cover_image) }}" 
width="100"
height="120"
style="object-fit:cover;"
>

</td>

<td>{{ $book->title }}</td>

<td>{{ $book->author }}</td>

<td>₹{{ $book->price }}</td>

<td>{{ $book->published_date }}</td>

<td>

<div style="display:flex; gap:5px;">

<a href="/books/{{ $book->id }}">

<button>

View

</button>

</a>

<a href="/update-books/{{ $book->id }}">

<button>

Update

</button>

</a>

<form action="/books/{{ $book->id }}" method="POST">

@csrf

@method('DELETE')

<button type="submit">

Delete

</button>

</form>

</div>

</td>

</tr>

@endforeach

</table>

<br>

<div style="display:flex; gap:10px; align-items:center;">

@if ($books->onFirstPage())

<button disabled>
Previous
</button>

@else

<a href="{{ $books->previousPageUrl() }}">

<button>
Previous
</button>

</a>

@endif

<span>

Page {{ $books->currentPage() }} of {{ $books->lastPage() }}

</span>

@if ($books->hasMorePages())

<a href="{{ $books->nextPageUrl() }}">

<button>
Next
</button>

</a>

@else

<button disabled>
Next
</button>

@endif

</div>

</div>

</body>

</html>