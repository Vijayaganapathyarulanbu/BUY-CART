<!DOCTYPE html>
<html lang="en">
<head>

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
  text-decoration: none;
	background-color: red;
	color: #fff;
	transition: 0.6s ease;
	letter-spacing: 4px;
	text-transform: uppercase;
}

.body h1{
	margin-top: 250px;
	color: #fff;
  font-size: 10px;
	letter-spacing: 4px;
	padding: 20px;
	background-color: #000;
}
.body p{
	color: white;
	background-color: red;
	font-family: 'Poppins',sans-serif;
}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <title>Document</title>
  <style>
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

  </style>
</head>
<body>
<div class="main">
     <nav class="menu">
     	<h2 id ="logo">Admin Panel</h2>
         <a href="{{ url('dash') }}">Dashboard</a>
         <a href="{{ url('orders.order') }}">User Orders</a>
         <a href="{{ url('/product.product') }}">Product List</a>
         <a href="{{ url('/product.proform') }}">add Product</a>

</nav>


<form method="post" action="{{ route('pro') }}" enctype="multipart/form-data">
    @csrf
    <h1>ADD PRODUCTS</h1>
    <div class="container">
        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" class="form-control" id="name" name="name" required >
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" required>
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" class="form-control" id="category" name="category" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="text" class="form-control" id="price" name="price" pattern="[0-9]+" title="Please enter only numbers" required>
            </div>
        </div>

        </div>
        <div class="form-group">
            <label for="image">Image</label>
      <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Product</button>
    </div>
</form>


</div>
</body>
</html>
