

<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel Menu</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
		form{
			margin-top: 10%;
		}
        
		.sidebar {
			position: fixed;
			top: 0;
			left: 0;
			height: 100%;
			width: 250px;
			padding: 15px;
			background-color: #343a40;
			color: #fff;
		}

		.sidebar h3 {
			margin-top: 0;
			margin-bottom: 20px;
		}

		.sidebar .nav-item {
			margin-bottom: 10px;
		}

		.sidebar .nav-link {
			color: #fff;
		}

		.sidebar .nav-link:hover {
			color: #007bff;
		}
        form{
            margin-left: 40%;
            width: 500px;
        }
	</style>
</head>
<body>

	<div class="sidebar">
		<h3>Admin Panel</h3>
		<ul class="nav flex-column">
			<li class="nav-item">
				<a href="#" class="nav-link active">Dashboard</a>
			</li>
			<li class="nav-item">
            <a href="{{ url('/list') }}" class="nav-link">User Orders</a>
			</li>
			<li class="nav-item">
				<a href="{{ url('/product.product') }}" class="nav-link">Products list</a>
			</li>
			<li class="nav-item">
				<a href="{{ url('/product.proform') }}" class="nav-link">add Product</a>
			</li>
		</ul>
	</div>


<form  method="post" action = "{{url('/update', ['id' => $product->id])}}">
    @csrf
	@method('PUT')
    <div class="form-group">
        <label for="">product Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
    </div>
    <div class="form-group">
        <label for="">description</label>
        <input type="text" class="form-control" id="description" name="description" value="{{ old('name', $product->description) }}" required>
    </div>
    <div class="form-group">
        <label for="">category</label>
        <input type="text" class="form-control" id="category" name="category" value="{{ old('name', $product->category) }}" required>
    </div>
    <div class="form-group">
        <label for="">price</label>
        <input type="text" class="form-control" id="price" name="price" value="{{ old('name', $product->price) }}" required>
    </div>
    <button type="submit" class="btn btn-primary" style="margin-left: 77%;">Update product</button>
</form>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/esm/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>