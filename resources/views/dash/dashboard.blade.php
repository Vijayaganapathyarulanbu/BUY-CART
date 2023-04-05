
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
    *
{
	padding: 0px;
	margin: 0px;
	box-sizing: border-box;
	list-style: none;
	font-family: 'Poppins',sans-serif;
}
body{
    background-size: cover;
}
.main{
width: 100%;
display: flex;
text-align: center;
}
.menu{
width: 20%;
height: 100vh;
background-color: #121227;
}
#logo{
color: #fff;
font-size: 30px;
letter-spacing: 4px;
background-color: #000;
padding: 15px;
}
.menu a{
text-decoration: none;
color: #fff;
font-size: 10px;
letter-spacing: 2px;
display: list-item;
padding: 20px;
border-top: 1px solid black;
border-bottom:1px solid black;
text-transform: uppercase;
}
.menu a:hover{
background-color: red;
color: #fff;
transition: 0.6s ease;
letter-spacing: 4px;
text-transform: uppercase;
}

.container{
margin-top: 50px;
margin-left: 20px;
display: flex;
flex-wrap: wrap;
justify-content: center;
}

.card{
width: 300px;
height: 200px;
margin: 20px;
padding: 20px;
box-shadow: 0 0 10px rgba(0,0,0,0.2);
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
background-color: white;
}

.card h1{
text-align: center;
font-size: 30px;
margin-bottom: 20px;
}

.card p{
text-align: center;
font-size: 20px;
font-weight: bold;
}

</style>
	<title>AdminDashboard</title>
</head>
<body>
	<div class="main">
     <div class="menu">
     	<h2 id ="logo">Admin Panel</h2>
		<a href="{{ url('dash') }}">Dashboard</a>
		<a href="{{ url('orders.order') }}">User Orders</a>
		<a href="{{ url('/product.product') }}">Product List</a>
		<a href="{{ url('/product.proform') }}">add Product</a>
        <br><br><br>
        <img src="https://cavinkare.com/img/2017/03/logo.png" >
    </div>
</div>
<div class="container">
    <div class="card">
      <h1>Product</h1>
      <p>{{$product}}</p>
    </div>
    <div class="card">
        <h1>Order</h1>
        <p>{{$order}}</p>
      </div>

      <div class="card">
        <h1>User</h1>
        <p>{{$User}}</p>
      </div>

      <div class="card">
        <h1>Admin</h1>
        <p>{{$admin}}</p>
      </div>


    </body>
    </html>
