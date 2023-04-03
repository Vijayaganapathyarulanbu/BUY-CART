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

.body h1{
	margin-top: 250px;
	color: #fff;
	letter-spacing: 4px;
	padding: 20px;
	background-color: #000;
}
.body p{
	color: white;
	background-color: red;
	font-family: 'Poppins',sans-serif;
}
label{
	margin-left:4px;
	display: flex;
}
input[type="submit"]{
  display: flex;
  margin-top: 20px;
}
input[type="text"]{

	display: flex;
	border-radius: 10px;
	width: 700px;
	border: 1px solid black;
	padding: 10px;

}
.container{
  display: inline-block;
  padding-left: 100px;
  margin-top: 50px;
  margin-left: 20px;
  height: 600px;
  font-size: 15px;
  width: 900px;
  border: 1px solid black;
  justify-content: center;
}
</style>
	<title>AdminDashbord</title>
</head>
<body>
	<div class="main">
     <div class="menu">
     	<h2 id ="logo">Admin Panel</h2>
		<a href="{{ url('dash') }}">Dashboard</a>
		<a href="{{ url('orders.order') }}">User Orders</a>
		<a href="{{ url('/product.product') }}">Product List</a>
		<a href="{{ url('/product.proform') }}">add Product</a>

     </div>
	</div>

</body>
</html>
