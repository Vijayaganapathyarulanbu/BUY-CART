<!DOCTYPE html>
<html>
<head>
	<title>Order Confirmation</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
		.container {
			margin-top: 5%;
			text-align: center;
		}
		.message {
			font-size: 24px;
			margin-bottom: 30px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="message">
			<p>Thank you for shopping with BuyCart! Your order has been confirmed.</p>
			<p>Have a nice day!</p>
		</div>
		<a href="{{ url('/') }}" class="btn btn-primary">Return to Homepage</a>
	</div>
	<!-- jQuery and Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/esm/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
