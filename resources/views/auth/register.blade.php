
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Customer Registration</title>
	<link rel="stylesheet" href="{{ asset('style.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-jB0CYR+mN4uuk6vGewEhKP8SzXunLsN0km6vDmW8J8voOEEU6mQ2z0yytTDNq3zEJN2Xh0R5um5D5ybbHr35pA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
		.register-link {
			margin-top: 10px;
			font-weight: bold;
			color: #aac5e2;
			text-align: center;
			text-decoration: none;
			display: block;
		}
		.register-link:hover {
			color: #a7c7e7;
			text-decoration: none;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">Customer Registration</div>
					<div class="card-body">
                        <form action="{{route('register-user')}}" method="POST">
                            @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get(success)}}</div>
                            @endif
                            @if(Session::has('fail'))
                            <div class="alert alert-success">{{Session::get(fail)}}</div>
                            @endif
                            @csrf
                            <div class="form-group mb-3">
                            <label for="name" class="label">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                            <span class="text-danger">@error('name'){{$message}} @enderror</span>
                        </div>
                        <div class="form-group mb-3">
                                <label for="email" class="label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                <span class="text-danger">@error('email'){{$message}} @enderror</span>
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="password">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                                <span class="text-danger">@error('password'){{$message}} @enderror</span>
                            </div>
                            <div class="form-group">

                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Submit</button>

                            </div>
                            <div class="form-group d-md-flex">

                            </div>
                        </form>
                        <p class="text-center">Already a member? <a data-toggle="tab" href="{{ url('/login') }}">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    </div>
                </div>
            </div>
        </body>
        </html>

