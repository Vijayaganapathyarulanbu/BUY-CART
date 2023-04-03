  
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel Menu</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>	
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style>
	body{
		margin:0;
		padding:0;
	}
       
	table{
           margin-top: 10%;
		}

		
		.sidebar {

			height: 640px;
			padding: 15px;
			background-color: #343a40;
			color: #fff;
		}

		.sidebar h3 {
			margin-top: 0;
			margin-bottom: 20px;
		}

		.sidebar .nav-item {
			margin-bottom: 15px;
		}

		.sidebar .nav-link {
			color: #fff;
		}

		.sidebar .nav-link:hover {
			color: #007bff;      
		}
	</style>
</head>
<body>
<div class="row">
<div class="col-2">
	<div class="sidebar">
		<h3>Admin Panel</h3>
		<ul class="nav ">
			<li class="nav-item">
				<a href="#" class="nav-link active">Dashboard</a>
			</li>
			<li class="nav-item">
            <a href="{{ url('orders.order') }}" class="nav-link">User Orders</a>
			</li>
			<li class="nav-item">
				<a href="{{ url('/product.product') }}" class="nav-link">Products list</a>
			</li>
			<li class="nav-item">
				<a href="{{ url('/product.proform') }}" class="nav-link">add Product</a>
			</li>
		</ul>
	</div>
	</div>
	<div class="col-9">
<table class="table  table-striped table-bordered ; ">
<thead>
<tr>
    <th>id</th> 
    <th>customer name</th>
    <th>customer address</th>
    <th>phone Number</th>
    <th>product</th>
    <th >amount</th>
</tr>
	</thead>
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
</table>
	</div>
	</div>
</body>
</html>
