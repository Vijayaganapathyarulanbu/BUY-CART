<!DOCTYPE html>
<html>
<head>
	<title>Registration Successful</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
		.container {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 100vh;
		}
		h1 {
			font-size: 3rem;
			margin-bottom: 1rem;
		}
		p {
			font-size: 1.5rem;
			margin-bottom: 2rem;
		}
		.button {
			font-size: 1.2rem;
			padding: 0.5rem 1rem;
			background-color: #007bff;
			color: #fff;
			border: none;
			border-radius: 0.3rem;
			cursor: pointer;
		}
		.button:hover {
			background-color: #0062cc;
		}
	</style>
</head>
<body>
    <div style="margin-top:%;">
	<div class="container">
		<h1>Registration Successful</h1>
		<p>Thank you for registering.</p>
		<a   class="button" href="{{ url('/login') }}">LOGIN</a>
	</div>
</div>
</body>
</html>
