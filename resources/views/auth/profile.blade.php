<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard</title>

<style>

body{
margin:0;
font-family:Arial,sans-serif;
background:#f5f5f5;
}

.container{
display:flex;
height:100vh;
}

.left{
width:40%;
background:#fff;
padding:30px;
border-right:1px solid #ddd;
}

.right{
width:60%;
padding:30px;
}

.profile{
width:100px;
height:100px;
border-radius:50%;
background:#ddd;
display:flex;
align-items:center;
justify-content:center;
font-size:35px;
font-weight:bold;
margin-bottom:20px;
}

h1{
margin-bottom:25px;
}

h3{
font-weight:normal;
margin-bottom:15px;
}

.buttons{
display:flex;
flex-wrap:wrap;
gap:10px;
}

.buttons button{
border:none;
padding:10px 14px;
border-radius:5px;
cursor:pointer;
font-size:14px;
color:white;
}

.blue{
background:#0d6efd;
}

.green{
background:#198754;
}

.orange{
background:#fd7e14;
}

.red{
background:#dc3545;
}

.dark{
background:#212529;
}

.logout{
margin-top:25px;
}

.logout button{
border:none;
padding:10px 20px;
background:#dc3545;
color:white;
border-radius:5px;
cursor:pointer;
}

@media(max-width:768px){

.container{
flex-direction:column;
}

.left,
.right{
width:100%;
}

}

</style>

</head>

<body>

<div class="container">

<div class="left">

<div class="profile">

{{ strtoupper(substr($user->name,0,1)) }}

</div>

<h1>Profile</h1>

<h3>Name : {{ $user->name }}</h3>

<h3>Email : {{ $user->email }}</h3>

<form action="/auth/logout" method="POST" class="logout">

@csrf

<button type="submit">

Logout

</button>

</form>

</div>

<div class="right">

<h1>Book Management</h1>

<div class="buttons">

<button class="blue">
Add Book
</button>

<button class="green">
View Books
</button>

<button class="orange">
Update
</button>

<button class="red">
Delete
</button>

<button class="dark">
Search
</button>

<button class="blue">
Pagination
</button>

<button class="green">
Soft Delete
</button>

<button class="orange">
Validation
</button>

<button class="dark">
JWT
</button>

<button class="red">
JSON
</button>

</div>

</div>

</div>

</body>

</html>