<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Laravel App</title>
	<style>
		body {
			font-family: sans-serif;
			background-color: #F5F5F5;
			color: #333333;
			line-height: 1.5;
			overflow-x: hidden;
		}

		.container {
			max-width: 1200px;
			margin: 0 auto;
			padding: 30px;
		}

		.brand-image {
			width: 200px;
			height: 200px;
			object-fit: cover;
			border-radius: 50%;
			box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		}

		.header {
			display: flex;
			justify-content: space-between;
			align-items: center;
			margin-bottom: 50px;
		}

		.header h1 {
			font-size: 40px;
			font-weight: bold;
		}

		.nav {
            margin-left: 520px;
			display: flex;
			align-items: center;
		}

		.nav a {
			margin-left: 30px;
			font-size: 20px;
			font-weight: bold;
			text-decoration: none;
			color: #333333;
			transition: color 0.2s ease-in-out;
		}

		.nav a:hover {
			color: #0066CC;
		}

		.content {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
		}

		.content p {
			font-size: 24px;
			margin-top: 50px;
			text-align: center;
			color: #666666;
		}
	</style>
</head>
<body>


	<div class="container">
		<div class="content">
			<img src="{{ asset('images/Infoglobal.jpeg') }}" alt="Logo" class="brand-image">
		</div>
	</div>

    <header class="header">

		<nav class="nav">
			@if (Route::has('login'))
				@auth
					<a href="{{ url('/show') }}">Home</a>
				@else
					<a href="{{ route('login') }}">Log in</a>
					@if (Route::has('register'))
						<a href="{{ route('register') }}">Register</a>
					@endif
				@endauth
			@endif
		</nav>
	</header>
</body>
</html>
