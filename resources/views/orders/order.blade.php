
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



<form style="font-family:'Times New Roman';" method="post">
    <div class="container">
    <table class="table table-hover table-dark table-striped" style=" width: 100%; text-transform:uppercase;">
                <thead class="thead-white" style="">
                    <tr>
                        <th class="border">id</th>
                        <th class="border">customer name</th>
                        <th class="border">customer address</th>
                        <th class="border">phone Number</th>
                        <th class="border">product</th>
                        <th class="border">amount</th>

                    </tr>
                </thead>
                <tbody>

                @foreach ($order as $item)
                <tr>
                    <td>{{$item['id']}}</td>
                    <td>{{$item['cust_name']}}</td>
                    <td>{{$item['cust_addr']}}</td>
                    <td>{{$item['cust_phone']}}</td>
                    <td>{{$item['product_name']}}</td>
                    <td>{{$item['product_price']}}</td>

                </td>
                </tr>
                @endforeach
                </tbody>
            </table></div>
        </div>
    </div>
    </form>
	</div>

</body>
</html>
