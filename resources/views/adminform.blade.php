
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Login</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-jB0CYR+mN4uuk6vGewEhKP8SzXunLsN0km6vDmW8J8voOEEU6mQ2z0yytTDNq3zEJN2Xh0R5um5D5ybbHr35pA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Custom CSS -->
	<style>
		body {
			background-color: #f5f5f5;
		}
		.container {
			margin-top: 50px;
		}
		.card {
			border: none;
			border-radius: 10px;
			box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
		}
		.card-header {
			background-color: #ffffff;
			border-bottom: none;
			text-align: center;
			font-weight: bold;
			font-size: 24px;
			padding-top: 30px;
			padding-bottom: 10px;
		}
		.card-body {
			padding: 40px;
		}
		.form-control {
			border-radius: 10px;
			border-color: #d3d3d3;
			padding: 15px;
			font-size: 16px;
			font-weight: bold;
			color: #000000;
			background-color: #ffffff;
			box-shadow: none;
		}
		.btn {
			border-radius: 10px;
			padding: 15px 30px;
			font-size: 16px;
			font-weight: bold;
			text-transform: uppercase;
			margin-top: 20px;
			background-color: #aac5e2;
			border-color: #ceddec;
		}
		.btn:hover {
			background-color: #a7c7e7;
			border-color: #d7dee6;
		}


	</style>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">Admin Login</div>
					<div class="card-body">
                        <form method="POST" action="{{ route('logo') }}" style="text-align:center">
                            @csrf

							<div class="form-group">
								<label for="username">Username</label>
								<input type="text"  name="name" class="form-control" id="username" placeholder="Enter username">
							</div>
							<div class="form-group">
                                <label for="password">Password</label>
                                <input type="password"  name="password" name="password" class="form-control" id="password" placeholder="Enter password">
                            </div>
                            <a href="{{'dash'}}"><button class="btn">LOGIN</a></button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-9zVWUhA8NvWv2Zn43jqy/5vZaO0t0xpjq9JZM9vyPTNgD6SiuL6IITJyGQJ6EJG6SP7k6Vg9q4RXn7V+08HvRQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js" integrity="sha512-2F+/lUQ4O9ivZCjYOsYm7EWEvS5vj+7yf5Ggjj30eVvPCpq71XiehuxJp8oGgKjvY2rHr3l3qg8Wd7bFtMN0Xg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js" integrity="sha512-EsNzTxlGcKVE1W/fzoFvRkk9XEBuHm9rBl7o++Mx14Jt7RLuULr3lKli8pxa5Q2qb5eYzto9K0b8FZgnpiRP1A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>
